<?php


$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



if($mysqllink){

    
$sql = mysqli_query($mysqllink,"START TRANSACTION;");//Iniciar Trasação




$sql = mysqli_query($mysqllink,"delete from especialidade where id_especialidade='$id';");



if($sql){
    $sql = mysqli_query($mysqllink,"COMMIT;"); //Deu certo COMMIT
			header("Location: pesquisaProcedimento.php");//Enacomnhar para pagina especifica
		}
                else{
                      $sql = mysqli_query($mysqllink,"ROLLBACK;"); //Deu ERRADO rollback
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}




