<?php

$idMedico = filter_input(INPUT_GET, 'idEspecialidade');
$id = filter_input(INPUT_GET, 'id');

echo $id;
echo $idMedico;


$mysqllinkM = mysqli_connect("localhost", "root", "");
$dbM = mysqli_select_db($mysqllinkM,"mydb");



$dadosM = mysqli_query($mysqllinkM,"select * from especialidade as e"
        . " inner join medico as m on m.especialidade = e.id_especialidade"
        . " inner join horario as h on h.medico_id_medico = m.id_medico "
        . "where especialidade = '$idMedico' AND h.status = 'ATIVO' AND m.situacao<> 'D' " );

$linhaM = mysqli_fetch_assoc($dadosM);




?>
