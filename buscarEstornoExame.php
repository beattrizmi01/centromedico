<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM exame as e INNER JOIN pagamento_exame as pe on pe.exame_id_exame = e.id_exame inner join tipo_exame as tp on e.tipo_exame_id_tipo_exame = tp.id_tipo_exame inner join paciente_exame as px on px.exame_id_exame = e.id_exame inner join paciente as p on p.id_paciente = px.paciente_id_paciente where pe.id_pagamento_exame = '$id' ");
echo $id;


			
    $linha = mysqli_fetch_assoc($dados);


?>
