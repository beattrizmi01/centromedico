<?php

$descricao= filter_input(INPUT_GET, "descricao");
$valor = filter_input(INPUT_GET, "valor");

$tipo = filter_input(INPUT_GET, "tipo");

$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");




if($mysqllink){

    

if($tipo == "Consulta"){
$sql = mysqli_query($mysqllink,"insert into especialidade(id_especialidade, descricao, valor) 
values ('', '$descricao', '$valor');");
    
		
		if($sql){
			header("Location: pesquisaProcedimento.php");
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
                
}else if($tipo == "Exame"){
    //EXAME
    $sql = mysqli_query($mysqllink,"insert into tipo_exame(id_tipo_exame, descricao_tipo_exame, valor_exame) 
values ('', '$descricao', '$valor');");
    
		
		if($sql){
			header("Location: pesquisarProcedimentoExame.php");
		}
                else{
			die("Erro:" . mysqli_error($sql));
		}
    
    
    }else {
        
    }    
    
                
}else{

die("Erro:" . mysqli_error($link));
}





?>
