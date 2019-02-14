<?php


   
  

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



if($mysqllink){
    
    
  

    
$sql = mysqli_query($mysqllink,"delete  from paciente where id_paciente = '$id'");


if($sql){
			header("Location: atendente-paciente.php");//Enacomnhar para pagina especifica
		}
                else{
			//die("Erro:" . mysqli_error($sql));
                        
                        header("Location: tela-erro.php");//Enacomnhar para pagina especifica
		}
}else{

die("Erro:" . mysqli_error($link));
}






?>