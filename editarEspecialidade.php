<?php
$id = filter_input(INPUT_GET, "id_especialidade");
$descricao = filter_input(INPUT_GET, "descricao");
$valor = filter_input(INPUT_GET, "valor");




 //echo $dataConsulta;



$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");






if($mysqllink){


    
    
$sql = mysqli_query($mysqllink,"UPDATE especialidade set descricao = '$descricao', valor = '$valor' where id_especialidade = '$id'");

		if($sql){
                 
                echo $idPaciente;
			header("Location: pesquisaProcedimento.php");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>


