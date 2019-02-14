<?php

$idMedico= filter_input(INPUT_GET, "idMedico");
$dataConsulta = filter_input(INPUT_GET, "dataConsulta");
$turno = filter_input(INPUT_GET, "turno");
$idPaciente = filter_input(INPUT_GET, "idPaciente");


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


    
    
$sql = mysqli_query($mysqllink,"insert into consulta (id_consulta,data,turno)
values ('', '$data', '$turno'); ");
   $consulta =(mysqli_insert_id($mysqllink)); //Pega ID DA CONSULTA CADASTRADA
   
   $sql = mysqli_query($mysqllink," insert into consulta_has_medico(consulta_id_consulta,medico_id_medico) values ('$consulta','$idMedico')");
     
   
   $sql = mysqli_query($mysqllink," insert into consulta_has_paciente(consulta_id_consulta,paciente_id_paciente) values ('$consulta','$idPaciente')");
   

//echo $consulta;

    		
        $id = $idPaciente;
		if($sql){
                 
                echo $idPaciente;
			header("Location: atendente-atividadesConsultaPaciente.php?id= $idPaciente ");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>

