<?php

function validaZip()
{
  require_once('../../../wp-config.php');

  global $wpdb;

  // Tabela a ser verificada
  $table_name = $wpdb->prefix . 'zipcodes';


  // Array para armazenar as colunas da tabela
  $columns = array();

  // Obter o nome das colunas da tabela
  $columns_query = $wpdb->get_results("DESCRIBE $table_name");

  // Percorrer o resultado da consulta para obter os nomes das colunas
  foreach ($columns_query as $column) {
    // Adicionar o nome da coluna ao array
    $columns[] = $column->Field;
  }

  // Array para armazenar os valores de cada coluna
  $column_values = array();
  $valor_digitado = $_POST['n-searchbox'];
  $name_column = array();


  // Percorrer cada coluna da tabela
  foreach ($columns as $column) {
    // Obter os valores da coluna
    $values_query = $wpdb->get_results("SELECT $column FROM $table_name");

   

    // Percorrer o resultado da consulta para obter os valores da coluna
    foreach ($values_query as $value) {
      // Adicionar o valor da coluna ao array correspondente
      $column_values[$column][] = $value->$column;
    }
  }



  // Array para armazenar os valores em comum
  $common_values = array();

  // Percorrer cada coluna da tabela
  foreach ($columns as $column) {
    // Percorrer cada valor da coluna
    if (in_array($valor_digitado, $column_values[$column])) {
      $name_column[] = $column;
    }

    foreach ($column_values[$column] as $value) {
      // Verificar se o valor já existe em outra coluna
      foreach ($columns as $other_column) {
        // Ignorar a coluna atual
        // $name_column[] = $other_column;
        if ($other_column == $column) {
          continue;
        }
        // Verificar se o valor existe em outra coluna
        if (in_array($valor_digitado, $column_values[$other_column])) {

          // Adicionar o valor em comum ao array
          $common_values[] = $value;
          break;
        }
      }
    }
  }

  $name_column = array_unique($name_column);

  $combinacao = implode(',', $name_column);
  switch ($combinacao) {
    case "zip_spectrum,zip_viasat,zip_frontier,zip_optimum,zip_erthlink,zip_att":
      header("Location: /gama/deu-certo110euros/");
      exit();

    case "zip_spectrum":
      header("Location: /gama/deu-certo1/{$valor_digitado}");
      exit();

    case "zip_spectrum,zip_frontier":
      header("Location: /gama/deu-certo11?id={$valor_digitado}");
      exit();

    case "zip_spectrum,zip_optimum,zip_erthlink,zip_att":
      header("Location: /gama/deu-certo420/");
      exit();

    default:
      header("Location: /gama/deu-certodefault/");
      exit();
  }
}

validaZip();

?>