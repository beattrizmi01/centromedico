<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"select * from exame as e inner join tipo_exame as te on te.id_tipo_exame = e.tipo_exame_id_tipo_exame inner join paciente_exame as pe on pe.exame_id_exame = e.id_exame inner join paciente as p on p.id_paciente = pe.paciente_id_paciente where e.id_exame = '$id'");

			
    $linha = mysqli_fetch_assoc($dados);
    

