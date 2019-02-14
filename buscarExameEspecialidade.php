<?php

//$idExame = filter_input(INPUT_GET, 'idExame');
//$id = filter_input(INPUT_GET, 'id');

echo $idExame;


$mysqllinkE = mysqli_connect("localhost", "root", "");
$dbE = mysqli_select_db($mysqllinkE,"mydb");

//if($idExame!=null){

//$dadosE = mysqli_query($mysqllinkE,"select * from tipo_exame where id_tipo_exame = '$idExame'");

//$linhaE = mysqli_fetch_assoc($dadosE);
//}else {
    
    
    $dadosE = mysqli_query($mysqllinkE,"select * from tipo_exame");

$linhaE = mysqli_fetch_assoc($dadosE);
//}



?>