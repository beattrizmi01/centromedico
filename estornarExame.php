<?php
$id = filter_input(INPUT_GET, "id");

$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");

if($mysqllink){


$sql = mysqli_query($mysqllink,"UPDATE pagamento_exame set estorno = 'V' WHERE id_pagamento_exame = '$id';");

    
		
		if($sql){
                    
                    require_once ("./area-financeiraExame.php");
                  
                 
		
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>

