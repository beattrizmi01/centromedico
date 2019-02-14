<?php
$id = filter_input(INPUT_GET, "id_especialidade");
$descricao = filter_input(INPUT_GET, "descricao");
$valor = filter_input(INPUT_GET, "valor");




 //echo $dataConsulta;



$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");






if($mysqllink){


    
    
$sql = mysqli_query($mysqllink,"UPDATE tipo_exame set descricao_tipo_exame = '$descricao', valor_exame = '$valor' where id_tipo_exame = '$id'");

		if($sql){
                 
                echo $idPaciente;
			header("Location: pesquisarProcedimentoExame.php");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>


