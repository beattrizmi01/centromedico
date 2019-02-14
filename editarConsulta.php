<?php

$id= filter_input(INPUT_GET, "idConsulta");
$data = filter_input(INPUT_GET, "dataConsulta");
$turno = filter_input(INPUT_GET, "turno");



 //echo $dataConsulta;



$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");





$data = implode('-', array_reverse(explode('/', $_GET['dataConsulta']))); //Converter data 





function converterData($dataConsulta, $formato){
    //"br"-> data vem no formato dd-mm-aa
    //"en"-> data vem no formado yyyy-mm-dd
    
    //convertendo para yyy-mm-dd
    if($formato == "br"){
        list($dia, $mes, $ano)=
 explode("/", $dataConsulta);
            $dataNova = $ano . "-" . $mes . "-" . $dia;         
    }
    return $dataNova;
}


if($mysqllink){


    
    
$sql = mysqli_query($mysqllink,"UPDATE consulta set data = '$data', turno = '$turno' where id_consulta = '$id'");

		if($sql){
                 
                echo $idPaciente;
			header("Location: atendente-editarConsulta.php?id=$id ");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>



