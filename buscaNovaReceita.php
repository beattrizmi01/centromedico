<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"select  p.nomePaciente, e.descricao, m.nome, e.valor, c.`data`, c.id_consulta, c.status from consulta as c  inner join consulta_has_medico  as cm on cm.consulta_id_consulta = c.id_consulta inner join medico as m on m.id_medico = cm.medico_id_medico inner join especialidade as e on e.id_especialidade=  m.especialidade inner join consulta_has_paciente as cp on cp.consulta_id_consulta = c.id_consulta inner join paciente as p on p.id_paciente = cp.paciente_id_paciente where c.id_consulta = '$id'");

			
    $linha = mysqli_fetch_assoc($dados);
    