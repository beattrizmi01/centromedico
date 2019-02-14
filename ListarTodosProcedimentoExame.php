<?php




$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"SELECT * FROM `tipo_exame` ORDER BY `descricao_tipo_exame` ASC");



			
    $linha = mysqli_fetch_assoc($dados);
    
    $flagDados = 0;
    
    

?>