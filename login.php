<?php


$email = filter_input(INPUT_POST, 'email');

$senha = filter_input(INPUT_POST, 'senha');

$mysqllink = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($mysqllink,"mydb");



$dados = mysqli_query($mysqllink,"select * from funcionario where 1=1 and email_funcionario  = '$email' and senha_funcionario = '$senha'");



			
    $linha = mysqli_fetch_assoc($dados);
    
    
    $nomeFuncionario = $linha['nome_funcionario'];
    $Matricula = $linha['IdFuncionario'];
    
   
    if($linha!=0){
        
        
      //Criar sessão 
      //COLOCAR NOME DO USUARIO EM SESSÃO
       //INICIAR SESSÃO
        
       session_start();
       
       $_SESSION['Usuario'] = $nomeFuncionario;
       $_SESSION['Matricula'] = $Matricula;
       $_SESSION['acesso'] = $linha['cargo_idcargo'];
        
        
        $acesso = $linha['cargo_idcargo'];
    echo $acesso;
    if($acesso ==2){
    //require_once ("../Sistem-de-gest-o-de-consultas/sub-gerente/telaPrincipal-Atendente.php");
          require_once ("./telaPrincipal-Atendente.php");;
        
    } else if($acesso == 1){
       //require_once ("../Sistem-de-gest-o-de-consultas/atendente/telaPrincipal-Atendente.php");
       require_once ("./telaPrincipal-Atendente.php");
        // require_once ("./paginaTesteLogin.php");
       echo $_SESSION['Usuario'];
    } 
    else{
         require_once ("./telaPrincipal-Atendente.php");
        
    }
    
    }else {
        
        require_once ("./senhaErradaLogin.html");
    }
        
    

?>

