<?php


$id_exame = filter_input(INPUT_GET, 'id_exame');

$mysqllinkLE = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllinkLE,"mydb");

echo $id_exame;


$dadosLE = mysqli_query($mysqllinkLE,"SELECT * FROM tipo_exame where id_tipo_exame ='$id_exame' ");

			
    $linhaLE = mysqli_fetch_assoc($dadosLE);
    