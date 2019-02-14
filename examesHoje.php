<?php

//$id = filter_input(INPUT_GET, 'id');


$mysqllinkEx = mysqli_connect("localhost", "root", "");
$dbEx = mysqli_select_db($mysqllinkEx,"mydb");



//data sistema
$d=  date('d/m/y');

//echo $d;

$dataAtual = implode('-', array_reverse(explode('/', $d))); //Converter data 






echo $dataAtual;


$dadosEx = mysqli_query($mysqllinkEx,"SELECT * FROM paciente AS p INNER JOIN paciente_exame AS pe ON pe.paciente_id_paciente = p.id_paciente inner JOIN exame as e on e.id_exame = pe.exame_id_exame inner join  tipo_exame as te on te.id_tipo_exame = e.tipo_exame_id_tipo_exame  where data_exame like '%$dataAtual%'");

			
    $linhaEx = mysqli_fetch_assoc($dadosEx);
    
    
    ?>