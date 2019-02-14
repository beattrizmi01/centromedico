<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");


if($mysqllink){

    
     $sql = mysqli_query($mysqllink," UPDATE consulta set status= 'Cancelada' where id_consulta= '$id'");
    
     
     if($sql){
                 
                
			header("Location: atendente-editarConsulta.php?id=$id ");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
     
     
     
}else{

die("Erro:" . mysqli_error($link));
}




?>