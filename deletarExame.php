<?php


$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



if($mysqllink){

    
$sql = mysqli_query($mysqllink,"START TRANSACTION;");//Iniciar Trasação

$sql = mysqli_query($mysqllink,"DELETE from paciente_exame where exame_id_exame= '$id';");


$sql = mysqli_query($mysqllink,"delete from exame where id_exame='$id';");



if($sql){
    $sql = mysqli_query($mysqllink,"COMMIT;"); //Deu certo COMMIT
			header("Location: atendente-listarExames.php");//Enacomnhar para pagina especifica
		}
                else{
                      $sql = mysqli_query($mysqllink,"ROLLBACK;"); //Deu ERRADO rollback
                      header("Location: tela-erro.php");//Enacomnhar para pagina especifica
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}




