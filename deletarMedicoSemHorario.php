<?php


   
  

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



if($mysqllink){
    
    
  

    //Flag para desativar medico 
$sql = mysqli_query($mysqllink,"delete from  medico where id_medico= $id");

echo $id;

if($sql){
			header("Location: erroEditarMedico.php");//Enacomnhar para pagina especifica
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}






?>
