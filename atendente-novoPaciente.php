<?php

$nome = filter_input(INPUT_GET, "nome");
$cpf= filter_input(INPUT_GET, "cpf");
$sexo = filter_input(INPUT_GET, "sexo");
$dataNascimento = filter_input(INPUT_GET, "data");
$telefone = filter_input(INPUT_GET, "telefone");
$pagina = "atendente-novoPaciente.php";


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");


$data = implode('-', array_reverse(explode('/', $_GET['dataNascimento']))); //Converter data 





function converterData($dataNascimento, $formato){
    //"br"-> data vem no formato dd-mm-aa
    //"en"-> data vem no formado yyyy-mm-dd
    
    //convertendo para yyy-mm-dd
    if($formato == "br"){
        list($dia, $mes, $ano)=
 explode("/", $dataNascimento);
            $dataNova = $ano . "-" . $mes . "-" . $dia;         
    }
    return $dataNova;
}


if($mysqllink){


$sql = mysqli_query($mysqllink,"insert into paciente(id_paciente,cpf, dataNascimento,nomePaciente,sexo,telefone ) 
values ('', '$cpf', '$data', '$nome', '$sexo', '$telefone');");

$paciente =(mysqli_insert_id($mysqllink)); //Pega ID Do paciente cadastrado
		
		if($sql){
			header("Location: atendente-editarPaciente.php?id=$paciente");
                    
                    
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

