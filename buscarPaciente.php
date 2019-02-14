<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");

$dados = mysqli_query($mysqllink,"select * from paciente where id_paciente = '$id'");

$linha = mysqli_fetch_assoc($dados);




?>