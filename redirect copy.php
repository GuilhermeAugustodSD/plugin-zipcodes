<?php

//$prev_full_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$prev_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//$prev_url = parse_url($url);
//echo $url;
//$prev_url = $parts[path];

function validaZip()
{
  require_once('../../../wp-config.php');
  global $wpdb;

  $valor_digitado = $_POST['n-searchbox'];
  $table_name = $wpdb->prefix . "zipcodes";

  $resultados = $wpdb->get_results("SELECT * FROM {$table_name}");




  echo $spectrum;
  // Percorre os resultados
  foreach ($resultados as $resultado) {
    // Compara o valor digitado com o valor da tabela
    if ($resultado->zip_spectrum == $valor_digitado) {
      echo "Valor encontrado: ", $resultado->zip_spectrum;
      //header("Location: /gama/deu-certo/");
      break;
    } else {
      echo  $valor_digitado;
      echo "Valor encontrado else: ", $resultado->zip_spectrum;

      // header("Location: /no-area/");
    }
  }
}

validaZip();



function findZip() {
  
  $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $prev_url = parse_url($url);

  if ($prev_url == "/spectrum-bundles-1/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/spectrum-bundles-1p/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-p1/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/spectrum-bundles-1a/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/spectrum-bundles-1b/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/spectrum-bundles-1c/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/spectrum-bundles-1d/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }

  /* P1 Design May 2021 */
  if ($prev_url == "/land-spectrum-2/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-1/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-1a/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-1b/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-1c/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }
  if ($prev_url == "/bundles-spectrum-1d/") {
    header("Location:  /spectrum-zip-code-search-1/");
  }

  /* v2 */
  if ($prev_url == "/spectrum-bundles-2/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/spectrum-bundles-2a/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/spectrum-bundles-2b/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/spectrum-bundles-2c/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/spectrum-bundles-2d/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }

  /* P2 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-2/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/bundles-spectrum-2a/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/bundles-spectrum-2b/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/bundles-spectrum-2c/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }
  if ($prev_url == "/bundles-spectrum-2d/") {
    header("Location:  /spectrum-zip-code-search-2/");
  }

  /* V3 */
  if ($prev_url == "/spectrum-bundles-3/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/spectrum-bundles-3a/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/spectrum-bundles-3c/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/spectrum-bundles-3d/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }

  /* P3 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-3/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/bundles-spectrum-3a/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/bundles-spectrum-3b/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/bundles-spectrum-3c/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }
  if ($prev_url == "/bundles-spectrum-3d/") {
    header("Location:  /spectrum-zip-code-search-3/");
  }

  /* V4 */
  if ($prev_url == "/spectrum-bundles-4/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/spectrum-bundles-4a/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/spectrum-bundles-4b/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/spectrum-bundles-4c/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/spectrum-bundles-4d/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }

  /* P4 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-4/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/bundles-spectrum-4a/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/bundles-spectrum-4b/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/bundles-spectrum-4c/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }
  if ($prev_url == "/bundles-spectrum-4d/") {
    header("Location:  /spectrum-zip-code-search-4/");
  }

  /* v5 */
  if ($prev_url == "/spectrum-bundles-5/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/spectrum-bundles-5a/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/spectrum-bundles-5b/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/spectrum-bundles-5c/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/spectrum-bundles-5d/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }

  /* P5 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-5/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/bundles-spectrum-5a/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/bundles-spectrum-5b/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/bundles-spectrum-5c/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }
  if ($prev_url == "/bundles-spectrum-5d/") {
    header("Location:  /spectrum-zip-code-search-5/");
  }

  /* v6 */
  if ($prev_url == "/spectrum-bundles-6/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/spectrum-bundles-6a/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/spectrum-bundles-6b/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/spectrum-bundles-6c/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/spectrum-bundles-6d/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }

  /* P6 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-6/") {
    header("Location:  /spectrum-zip-code-search-6p/");
  }
  if ($prev_url == "/bundles-spectrum-6a/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/bundles-spectrum-6b/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/bundles-spectrum-6c/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }
  if ($prev_url == "/bundles-spectrum-6d/") {
    header("Location:  /spectrum-zip-code-search-6/");
  }

  /* v7 */
  if ($prev_url == "/spectrum-bundles-7/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/spectrum-bundles-7a/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/spectrum-bundles-7b/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/spectrum-bundles-7c/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/spectrum-bundles-7d/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }



  /* P7 Design May 2021 */
  if ($prev_url == "/bundles-spectrum-7/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/bundles-spectrum-7a/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/bundles-spectrum-7b/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/bundles-spectrum-7c/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }
  if ($prev_url == "/bundles-spectrum-7d/") {
    header("Location:  /spectrum-zip-code-search-7/");
  }

  /* P8 Design May 2021 - Published Aug 9 2021*/
  if ($prev_url == "/bundles-spectrum-8/") {
    header("Location:  /spectrum-zip-code-search-8/");
  }

  /* P9 Design May 2021 - Published Sep 23 2021*/
  if ($prev_url == "/bundles-spectrum-9/") {
    header("Location:  /spectrum-zip-code-search-9/");
  }
  if ($prev_url == "/bundles-spectrum-9a/") {
    header("Location:  /spectrum-zip-code-search-9/");
  }
  if ($prev_url == "/bundles-spectrum-9b/") {
    header("Location:  /spectrum-zip-code-search-9/");
  }
  if ($prev_url == "/bundles-spectrum-9c/") {
    header("Location:  /spectrum-zip-code-search-9/");
  }
  if ($prev_url == "/bundles-spectrum-9d/") {
    header("Location:  /spectrum-zip-code-search-9/");
  }

  /* Aug 2022 */
  if ($prev_url == "/bundles-spectrum-10p/") {
    header("Location:  /spectrum-zip-code-search-10p/");
  }
  if ($prev_url == "/bundles-spectrum-10a/") {
    header("Location:  /spectrum-zip-code-search-10/");
  }
  if ($prev_url == "/bundles-spectrum-10b/") {
    header("Location:  /spectrum-zip-code-search-10/");
  }
  if ($prev_url == "/bundles-spectrum-10c/") {
    header("Location:  /spectrum-zip-code-search-10/");
  }
  if ($prev_url == "/bundles-spectrum-10d/") {
    header("Location:  /spectrum-zip-code-search-10/");
  }

  if ($prev_url == "/bundles-spectrum-11p/") {
    header("Location:  /spectrum-zip-code-search-11p/");
  }
  if ($prev_url == "/bundles-spectrum-11a/") {
    header("Location:  /spectrum-zip-code-search-11/");
  }
  if ($prev_url == "/bundles-spectrum-11b/") {
    header("Location:  /spectrum-zip-code-search-11/");
  }
  if ($prev_url == "/bundles-spectrum-11c/") {
    header("Location:  /spectrum-zip-code-search-11/");
  }
  if ($prev_url == "/bundles-spectrum-11d/") {
    header("Location:  /spectrum-zip-code-search-11/");
  }


  if ($prev_url == "/bundles-spectrum-12a/") {
    header("Location:  /spectrum-hay-servicio-12/");
  }
  if ($prev_url == "/bundles-spectrum-12b/") {
    header("Location:  /spectrum-hay-servicio-12/");
  }
  if ($prev_url == "/bundles-spectrum-12c/") {
    header("Location:  /spectrum-hay-servicio-12/");
  }
  if ($prev_url == "/bundles-spectrum-12d/") {
    header("Location:  /spectrum-hay-servicio-12/");
  }

  if ($prev_url == "/bundles-spectrum-13/") {
    header("Location:  /spectrum-hay-servicio-13p/");
  }
  if ($prev_url == "/bundles-spectrum-13a/") {
    header("Location:  /spectrum-hay-servicio-13/");
  }
  if ($prev_url == "/bundles-spectrum-13b/") {
    header("Location:  /spectrum-hay-servicio-13/");
  }
  if ($prev_url == "/bundles-spectrum-13c/") {
    header("Location:  /spectrum-hay-servicio-13/");
  }
  if ($prev_url == "/bundles-spectrum-13d/") {
    header("Location:  /spectrum-hay-servicio-13/");
  }

  if ($prev_url == "/bundles-spectrum-14/") {
    header("Location:  /spectrum-hay-servicio-14p/");
  }
  if ($prev_url == "/bundles-spectrum-14a/") {
    header("Location:  /spectrum-hay-servicio-14/");
  }
  if ($prev_url == "/bundles-spectrum-14b/") {
    header("Location:  /spectrum-hay-servicio-14/");
  }
  if ($prev_url == "/bundles-spectrum-14c/") {
    header("Location:  /spectrum-hay-servicio-14/");
  }
  if ($prev_url == "/bundles-spectrum-14d/") {
    header("Location:  /spectrum-hay-servicio-14/");
  }

  if ($prev_url == "/bundles-spectrum-15/") {
    header("Location:  /spectrum-hay-servicio-15p/");
  }
  if ($prev_url == "/bundles-spectrum-15a/") {
    header("Location:  /spectrum-hay-servicio-15/");
  }
  if ($prev_url == "/bundles-spectrum-15b/") {
    header("Location:  /spectrum-hay-servicio-15/");
  }
  if ($prev_url == "/bundles-spectrum-15c/") {
    header("Location:  /spectrum-hay-servicio-15/");
  }
  if ($prev_url == "/bundles-spectrum-15d/") {
    header("Location:  /spectrum-hay-servicio-15/");
  }
}

?>