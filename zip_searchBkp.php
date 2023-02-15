<?php
/*
* Plugin Name: Zip Search
* Plugin URI: https://example.com
* Description: Este plugin permite importar dados de um arquivo CSV para o banco de dados do WordPress.
* Version: 1.0
* Author: Guilherme Dantas
* Author URI: https://example.com
* License: GPL2
* Text Domain: zip-search
* Domain Path: languages
*/

if (!defined('ABSPATH')) {
  exit;
}


if (!class_exists('Zip_Search')) {
  class Zip_Search
  {
    public function __construct()
    {
      $this->define_constants();

      add_action('admin_menu', array($this, 'csv_import_menu'));
      add_action('wp_insert_post', array($this, 'csv_import_menu', 10, 1));
    }

    public function define_constants()
    {
      define('ZIP_SEARCH_PATH', plugin_dir_path(__FILE__));
      define('ZIP_SEARCH_URL', plugin_dir_url(__FILE__));
      define('ZIP_SEARCH_VERSION', '1.0.0');
    }


    /* 
        * Activate the plugin 
        */
    public static function activate() {

      update_option('rewrite_rules', '');

      global $wpdb;

      $table_name = $wpdb->prefix . "zipcodes";

      $zipcode_db_version = get_option('zip_search_db_version');

      if (empty($zipcode_db_version)) {
        $query = "
          CREATE TABLE $table_name (
              zip_id int NOT NULL AUTO_INCREMENT,
              zip_electron bigint(20) NULL,
              zip_viasat bigint(20) NULL,
              zip_3 bigint(20) NULL,
              zip_4 bigint(20) NULL,
              zip_5 bigint(20) NULL,
              zip_6 bigint(20) NULL,
              PRIMARY KEY  (zip_id))
              ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($query);

        $zipcode_db_version = '1.0';
        add_option('zip_search_db_version', $zipcode_db_version);
      }
    }

    /* 
    * Criação do Menu de administração do Plugin
    */
    public function csv_import_menu() {
      add_menu_page('Zip Search', 'Zip Search', 'manage_options', 'csv-import', array($this, 'csv_import_page'), 'dashicons-upload');
    }


    /* 
    * Inserção dos dados do arquivo CSV no banco de dados na tabela wp_zipcode
    */
    public function csv_import_page() {

      global $wpdb;

      $table_name = $wpdb->prefix . "zipcodes";

      if (isset($_POST['submit'])) {
        if ($_FILES['file']['name']) {
          $filename = $_FILES['file']['name'];
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          if ($ext == 'csv') {

            $handle = fopen($_FILES['file']['tmp_name'], "r");

            while (($dados = fgetcsv($handle, 1000, ",")) !== FALSE) {

              $wpdb->insert(
                $table_name,
                array(
                  "zip_electron" => $dados[0]
                ),
                array(
                  '%d'
                )
              );
            }
            fclose($handle);
            echo 'Arquivo importado com sucesso.';
          } else {
            echo 'O arquivo deve ser do tipo CSV.';
          }
        } else {
          echo 'Selecione um arquivo para importar.';
        }
      }

      ?>
        <div class="wrap">
          <h2>Importar Zips</h2>
          <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" /><br /><br />
            <input type="submit" name="submit" value="Importar" class="button-primary" />
          </form>
        </div>
      <?php
    }

    /* 
    * Deactivate the plugin 
    */
    public static function deactivate() {
      flush_rewrite_rules();
    }

    /* 
    * Uninstall the plugin 
    */
    public static function uninstall() {
    }
  }
}

if (class_exists('Zip_Search')) {
  // Installation and uninstallation hooks
  register_activation_hook(__FILE__, array('Zip_Search', 'activate'));
  register_deactivation_hook(__FILE__, array('Zip_Search', 'deactivate'));
  register_uninstall_hook(__FILE__, array('Zip_Search', 'uninstall'));

  $zip_search = new Zip_Search();
}

$url = $_SERVER["REQUEST_URI"];

$frase = strpos($url, 'es-bundles');


if ($frase !== false) {
  ?>

  <form role="search" method="post" id="searchform" action="<?php echo get_stylesheet_directory_uri(); ?>/search.php">
    <div>
      <input pattern="[0-9]*" type="number" value="" placeholder="<?php esc_html_e(' Su código postal', 'bridge'); ?>" name="n-searchbox" id="n-searchbox" autofocus />
      <input type="submit" id="searchsubmit" value="Ver Ofertas" />
    </div>
  </form>
<?php
} else {

?>


  <form role="search" method="post" id="searchform" action="/gama/wp-content/plugins/zip_search/redirect.php" style="margin-left: 200px;"> <!--  -->
    <div>
      <input pattern="[0-9]*" type="number" value="" placeholder="<?php esc_html_e(' Your Zip code', 'bridge'); ?>" name="n-searchbox" id="n-searchbox" autofocus />
      <input type="submit" id="searchsubmit" value="View Offers" />
    </div>
  </form>

<?php } ?>