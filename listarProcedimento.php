<?php


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");

$dados = mysqli_query($mysqllink,"select * from especialidade order by descricao");

$linha = mysqli_fetch_assoc($dados);


?>
