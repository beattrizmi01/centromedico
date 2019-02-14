<?php


$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM medico AS m inner join horario as h on h.medico_id_medico = m.id_medico where 1=1 AND  m.id_medico = '$id' AND h.status= 'ATIVO'");

			
    $linhaPM = mysqli_fetch_assoc($dados);
    
    ?>
