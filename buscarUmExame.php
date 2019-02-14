<?php


$id = filter_input(INPUT_GET, 'id');

$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM tipo_exame where id_tipo_exame ='$id' ");

			
    $linha = mysqli_fetch_assoc($dados);
    