<?php

$nome = filter_input(INPUT_GET, "nome");
$especialidade = filter_input(INPUT_GET, "especilidade");

$segunda = 0;
$sm = filter_input(INPUT_GET, "sm"); //horarios 
$st= filter_input(INPUT_GET, "st");
$sn= filter_input(INPUT_GET, "sn");
//Terça
$terca = 0;
$tm = filter_input(INPUT_GET, "tm");
$tt=filter_input(INPUT_GET, "tt");
$tn = filter_input(INPUT_GET, "tn");
//Quarta
$quarta =0;
$qm =  filter_input(INPUT_GET, "qm");
$qt =  filter_input(INPUT_GET, "qt");
$qn =  filter_input(INPUT_GET, "qn");
//Quinta
$quinta = 0;
$quim =  filter_input(INPUT_GET, "quim");
$quit =   filter_input(INPUT_GET, "quit");
$quin =  filter_input(INPUT_GET, "quin");
//Sexta
$sexta = 0;
$sxm = filter_input(INPUT_GET, "sxm");
$sxt = filter_input(INPUT_GET, "sxt");
$sxn = filter_input(INPUT_GET, "sxn");
//*******************************************









$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



//CADASTRAR HORARIOS 
      //Validação dos hoarios 
      if($sm || $st || $sn != null){//Hoarios para segunda
          $segunda = 1;
      }
      
      if($tm || $tt || $tn != null){//Hoarios para terca
          $terca = 1;
      }
      if($qm || $qt|| $qn != null){//Hoarios para quarta
          $quarta = 1;
      }
      if($quim || $quit || $quin != null){//Hoarios para quinta
          $quinta = 1;
      }
      if($sxm || $sxt || $sxn != null){//Hoarios para sexta
          $sexta = 1;
      } 
      
      
   



if($mysqllink){
    
    
    
    
    
    

$sql = mysqli_query($mysqllink,"START TRANSACTION;");//Iniciar Trasação
    



$sql = mysqli_query($mysqllink,"insert into medico(id_medico,nome,especialidade) 
values ('', '$nome', '$especialidade');");
      $consulta =(mysqli_insert_id($mysqllink)); //Pega ID Do medico cadastrado


      
      
      //Segunda
      if($segunda ==1 && $terca ==1){
         $sql = mysqli_query($mysqllink,"insert into horario(id_horario, dia, m, t,n, medico_id_medico) VALUES('','Segunda','$sm', '$st', '$sn', '$consulta')");
      }
      //TERÇA
       if($terca ==1 ){
         $sql = mysqli_query($mysqllink,"insert into horario(id_horario, dia, m, t,n, medico_id_medico) VALUES('','Terça','$tm', '$tt', '$tn', '$consulta')");
      }
      //Quarta
        if($quarta ==1 ){
         $sql = mysqli_query($mysqllink,"insert into horario(id_horario, dia, m, t,n, medico_id_medico) VALUES('','Quarta','$qm', '$qt', '$qn', '$consulta')");
      }
      //Quinta
        if($quinta ==1 ){
         $sql = mysqli_query($mysqllink,"insert into horario(id_horario, dia, m, t,n, medico_id_medico) VALUES('','Quinta','$quim', '$quit', '$quin', '$consulta')");
      }
      //Sexta
        if($sexta ==1 ){
         $sql = mysqli_query($mysqllink,"insert into horario(id_horario, dia, m, t,n, medico_id_medico) VALUES('','Sexta','$sxm', '$sxt', '$sxn', '$consulta')");
      }
		if($sql){
                       $sql = mysqli_query($mysqllink,"COMMIT;"); //Deu certo COMMIT
			header("Location: pesquisaMedico.php");
                       echo $segunda;
		}
                else{
                            $sql = mysqli_query($mysqllink,"ROLLBACK;"); //Deu ERRADO rollback
			die("Erro:" . mysqli_error($sql));
		}
}else{

die("Erro:" . mysqli_error($link));
}

?>
