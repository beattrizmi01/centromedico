<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * from paciente as p inner JOIN consulta_has_paciente as cp on cp.paciente_id_paciente = p.id_paciente inner Join consulta as c on c.id_consulta = cp.consulta_id_consulta inner join consulta_has_medico as cm on cm.consulta_id_consulta = c.id_consulta inner join medico as m on m.id_medico = cm.medico_id_medico inner join especialidade as e on e.id_especialidade = m.especialidade where p.id_paciente= '$id' order by  data desc");
echo $id;


			
    $linha = mysqli_fetch_assoc($dados);
    
    
       
    
		


 






?>
