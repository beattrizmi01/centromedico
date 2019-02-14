<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM paciente AS p INNER JOIN paciente_exame AS pe ON pe.paciente_id_paciente = p.id_paciente inner JOIN exame as e on e.id_exame = pe.exame_id_exame inner join  tipo_exame as te on te.id_tipo_exame = e.tipo_exame_id_tipo_exame where e.id_exame ='$id'");
echo $id;


			
    $linha = mysqli_fetch_assoc($dados);
    
