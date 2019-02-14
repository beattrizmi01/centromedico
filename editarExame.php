<?php

$idCodigoAgendamento= filter_input(INPUT_GET, "idExame");
$convenio = filter_input(INPUT_GET, "convenio");
$data = filter_input(INPUT_GET, "data");
$turno = filter_input(INPUT_GET, "turno");



 //echo $dataConsulta;



$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");





$data = implode('-', array_reverse(explode('/', $_GET['data']))); //Converter data 





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


    
    
$sql = mysqli_query($mysqllink,"UPDATE exame set convenio = '$convenio', data_exame = '$data', turno = '$turno' where id_exame = '$idCodigoAgendamento'");

		if($sql){
                 
                echo $idPaciente;
			header("Location: atendente-editarExame.php?id=$idCodigoAgendamento ");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>


