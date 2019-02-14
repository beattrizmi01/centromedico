<?php
$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$cpf= filter_input(INPUT_GET, "cpf");
$endereco = filter_input(INPUT_GET, "endereco");
$telefone = filter_input(INPUT_GET, "telefone");
$cargo = filter_input(INPUT_GET, "cargo");
$email = filter_input(INPUT_GET, "email");
$senha = filter_input(INPUT_GET, "senha");



$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");


 echo $cargo;



if($mysqllink){

    $sql = mysqli_query($mysqllink,"START TRANSACTION;");//Iniciar Trasação
$sql = mysqli_query($mysqllink,"UPDATE  funcionario set nome_funcionario = '$nome', cpf_funcionario = '$cpf', endereco_funcionario= '$endereco', cargo_idcargo = '$cargo', telefone_funcionario ='$telefone', email_funcionario = '$email',senha_funcionario = '$senha' where idFuncionario='$id' "); 


		
		if($sql){
                       $sql = mysqli_query($mysqllink,"COMMIT;"); //Deu certo COMM
			header("Location: pesquisaFuncionario.php");
                    
                    
                   // echo $pagina;
                    	//header("Location: tela-sucesso.php?p='$pagina'");
		}
                else{
                     $sql = mysqli_query($mysqllink,"ROLLBACK;");
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>

