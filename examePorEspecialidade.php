<?php

$idExame = filter_input(INPUT_GET, 'idExame');
//$id = filter_input(INPUT_GET, 'id');

echo $idExame;


$mysqllinkP = mysqli_connect("localhost", "root", "");
$dbP = mysqli_select_db($mysqllinkP,"mydb");

if($idExame!=null){

$dadosP = mysqli_query($mysqllinkP,"select * from tipo_exame where id_tipo_exame = '$idExame'");

$linhaP = mysqli_fetch_assoc($dadosP);
}else {
    
    
    $dadosP = mysqli_query($mysqllinkP,"select * from tipo_exame");

$linhaP = mysqli_fetch_assoc($dadosP);

}



?>
