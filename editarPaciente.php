
<?php
$id = filter_input(INPUT_GET, "id");

$nome = filter_input(INPUT_GET, "nome");
$cpf= filter_input(INPUT_GET, "cpf");
$sexo = filter_input(INPUT_GET, "sexo");
$dataNascimento = filter_input(INPUT_GET, "dataNascimento");
$telefone = filter_input(INPUT_GET, "telefone");





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


$sql = mysqli_query($mysqllink,"UPDATE paciente set nomePaciente = '$nome', cpf = '$cpf', dataNascimento='$data', 
    sexo = '$sexo', telefone= '$telefone' WHERE id_paciente = '$id';");

    
		
		if($sql){
                    
                    require_once ("atendente-editarPaciente.php");
                  
                 
		
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>

