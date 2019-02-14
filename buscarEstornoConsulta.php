
<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM consulta as c INNER JOIN pagamento_consulta as pg on pg.consulta_id_consulta = c.id_consulta INNER JOIN medico as m INNER JOIN especialidade as e on e.id_especialidade = m.especialidade INNER JOIN consulta_has_paciente as cp on cp.consulta_id_consulta = c.id_consulta inner join paciente as p on p.id_paciente = cp.paciente_id_paciente where pg.id_pagamento='$id'");
echo $id;


			
    $linha = mysqli_fetch_assoc($dados);


?>
