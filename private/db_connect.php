<?php

// Defina as informações de conexão ao banco de dados
$db_host = "localhost";
$db_username = "unitre71_thiago";
$db_password = "5147486Unitreino.";
$db_name = "unitre71_unitreino";

// Crie a conexão com o banco de dados
$db = new mysqli($db_host, $db_username, $db_password, $db_name);

// Verifique se a conexão foi bem-sucedida
if ($db->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $db->connect_error);
}

?>
