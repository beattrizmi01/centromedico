<?php


$idPaciente = filter_input(INPUT_GET, "idPaciente");
$convenio =  filter_input(INPUT_GET, "convenio");
$tipo = filter_input(INPUT_GET, "especialidade");
$data = filter_input(INPUT_GET, "data");
$turno = filter_input(INPUT_GET, "turno");



 //echo $dataConsulta;

 echo $tipo;


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

//Exemplo de chamada a função




if($mysqllink){

$sql = mysqli_query($mysqllink,"START TRANSACTION;");//Iniciar Trasação
   
    
$sql = mysqli_query($mysqllink,"insert into exame (id_exame, data_exame, turno, convenio, tipo_exame_id_tipo_exame)
values ('', '$data', '$turno', '$convenio', '$tipo'); ");
   $exame =(mysqli_insert_id($mysqllink)); //Pega ID DO EXAME
   
   $sql = mysqli_query($mysqllink," insert into paciente_exame(exame_id_exame, paciente_id_paciente) values ('$exame','$idPaciente')");
     
//echo $consulta;

    		
      //  $id = $idPaciente;
            //echo $exame;
            
		if($sql){
                 
                echo $idPaciente;
                 $sql = mysqli_query($mysqllink,"COMMIT;"); //Deu certo COMMIT
			header("Location: atendente-atividadesExamePaciente.php?id= $idPaciente ");  //ENCAMINHAR PARA TELA DE HISTORCO DE PACINETE
		}
                else{
                      $sql = mysqli_query($mysqllink,"ROLLBACK;");
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}



//VALIDA DATA 
function ValidaData($dat){
	$data = explode("/","$dat"); // fatia a string $dat em pedados, usando / como referência
	$d = $data[0];
	$m = $data[1];
	$y = $data[2];
 
	// verifica se a data é válida!
	// 1 = true (válida)
	// 0 = false (inválida)
	$res = checkdate($m,$d,$y);
	if ($res == 1){
            return 1;
	   
	} else {
	   echo "Atenção: Data Invalida!";
	}
}
 

?>



