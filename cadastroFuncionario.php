<?php

   
 
    




$nome = filter_input(INPUT_GET, "nome");
$cpf= filter_input(INPUT_GET, "cpf");
$endereco = filter_input(INPUT_GET, "endereco");
$telefone = filter_input(INPUT_GET, "telefone");
$cargo = filter_input(INPUT_GET, "cargo");
$email= filter_input(INPUT_GET, "email");
$senha= filter_input(INPUT_GET, "senha");


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");


 echo $cargo;

 

    
   
 


if($mysqllink){


$sql = mysqli_query($mysqllink,"insert into funcionario(idFuncionario, nome_funcionario, cpf_funcionario, endereco_funcionario, cargo_idcargo, telefone_funcionario, email_funcionario, senha_funcionario) 
values ('', '$nome', '$cpf', '$endereco',  '$cargo', '$telefone', '$email', '$senha' );");

		
		if($sql){
			header("Location: pesquisaFuncionario.php");
                    
                    
                   // echo $pagina;
                    	//header("Location: tela-sucesso.php?p='$pagina'");
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>

