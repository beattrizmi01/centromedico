<?php

//$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



//data sistema
$d=  date('d/m/y');

//echo $d;

$dataAtual = implode('-', array_reverse(explode('/', $d))); //Converter data 






echo $dataAtual;


$dados = mysqli_query($mysqllink,"SELECT * from paciente as p inner JOIN consulta_has_paciente as cp on cp.paciente_id_paciente = p.id_paciente inner Join consulta as c on c.id_consulta = cp.consulta_id_consulta inner join consulta_has_medico as cm on cm.consulta_id_consulta = c.id_consulta inner join medico as m on m.id_medico = cm.medico_id_medico inner join especialidade as e on e.id_especialidade = m.especialidade where data like '%$dataAtual%'");

			
    $linha = mysqli_fetch_assoc($dados);
    
    
    ?>