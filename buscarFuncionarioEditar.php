<?php

$id = filter_input(INPUT_GET, 'id');


$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM  funcionario as f inner join cargo as c on c.idCargo = f.cargo_idcargo where idFuncionario='$id'");
echo $id;


			
    $linha = mysqli_fetch_assoc($dados);


?>
