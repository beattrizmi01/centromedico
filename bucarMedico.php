<?php




$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"select * from medico as m inner join especialidade as e on e.id_especialidade = m.especialidade and m.situacao= 'A' ");



			
    $linha = mysqli_fetch_assoc($dados);
    

?>