<?php


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");

$dados = mysqli_query($mysqllink,"select * from funcionario order by nome_funcionario");

$linha = mysqli_fetch_assoc($dados);


?>

