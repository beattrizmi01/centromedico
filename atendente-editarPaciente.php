<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
    
     if (!isset($_SESSION)) {
            session_start();
          }
          
          
            $acesso = $_SESSION['acesso'] ;
   $apagar = 0;
    if($acesso==1){
       $apagar = 1;
         //    require_once ('./semAcesso.php');
      
 
    }
    
 $id = filter_input(INPUT_GET, 'id');
 
 require_once('buscarPaciente.php');
 $total = mysqli_num_rows($dados);
	var_dump($total);
    ?>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard/estrutura.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="css/components/components.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#telefone").mask("(00) 00000-0000")
		})
	</script>
</head>
<body>
	<header class="container-cabecalho">
		<div class="area-logo">
			<div class="logo">
				<p class="logo-texto">Centro Médico</p>
				<p class="logo-texto">Francisco Machado</p>
			</div>
		</div>
		<div class="area-meio">
			
		</div>
		<div class="area-fim alinha-central">
			<a href="login.html">
				<button class="btn btn-dark alinha-central">Sair</button>
			</a>
		</div>
	</header>
	<main class="container-principal">
		<aside class="menu-opcoes">
			<div class="usuario alinha-central">
				<div class="content-info">
                                    <!--REPLICAR PARA TODOS --->
                                    <?php if($acesso == 1){ ?>
                                        <p>Painel atendente</p>
                                        
                                    <?php }else If($acesso == 2){ ?>
					<p>Painel Sub Gerente</p>
                                    <?php }else {?>
                                        <p>Painel Gerente</p>
                                    <?php }?>
				</div>
			</div>
			<a href="telaPrincipal-Atendente.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-tachometer-alt"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Início</p>
					</div>
				</div>
			</a>
			<a href="atendente-paciente.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-user"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Pacientes</p>
					</div>
				</div>
			</a>
			<a href="atendente-novoPaciente.html">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="far fa-plus-square"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Novo paciente</p>
					</div>
				</div>
			</a>
			<a href="atendente-listarConsultas.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-notes-medical"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Listagem consultas</p>
					</div>
				</div>
			</a>
			<a href="atendente-listarExames.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-file-medical"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Listagem exames</p>
					</div>
				</div>
			</a>
                    
                    
			<a href="cadastrarFuncionarios.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-plus"></i>
					</div>
					<div class="opcoes-detalhes">
                                           
						<p>Cadastrar funcionário</p>
					</div>
				</div>
			</a>
			<a href="pesquisaFuncionario.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-search"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Pesquisar funcionário</p>
					</div>
				</div>
			</a>
			<a href="cadastrarMedico.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-user-md"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Cadastrar médicos</p>
					</div>
				</div>
			</a>
			<a href="pesquisaMedico.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-search-plus"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Pesquisar médicos</p>
					</div>
				</div>
			</a>
			<a href="cadastrarProcedimentos.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-prescription-bottle-alt"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Cadastrar procedimento</p>
					</div>
				</div>
			</a>
			<a href="pesquisaProcedimento.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-search-minus"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Procedimento consulta</p>
					</div>
				</div>
            </a>
            <a href="pesquisarProcedimentoExame.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-search-minus"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Procedimento exame</p>
					</div>
				</div>
			</a>
			<a href="area-financeira.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Financeiro Consulta</p>
					</div>
				</div>
			</a>
			<a href="area-financeiraExame.php">
				<div class="opcoes alinha-central">
					<div class="opcoes-icon alinha-central">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="opcoes-detalhes">
						<p>Financeiro Exame</p>
					</div>
				</div>
			</a>
		</aside>
		<div class="area-geral alinha-central">
			<div class="card-cadastro cardMaiorEspaço cadastroPaciente">
				 <header>
				 	<div class="area-texto">
				 		<p>Editar paciente</p>
				 	</div>
				 </header>
				 <div class="container-info-paciente alinha-central">
				 	<div class="info-paciente">
				 		<p><?php echo $linha['nomePaciente'] ?></p>
				 		<p><?php echo $linha['telefone'] ?></p>
				 		<p><?php echo $linha['dataNascimento'] ?></p>
				 	</div>
				 	<div class="info-paciente alinha-central">
                                            
                                            
                                            <?php if ($apagar == 0) {?>
						<div class="container-apagar containerSome">
							<p class="optionSome txtApagar">Deseja apagar o paciente?</p>
					 		<div class="dangerZone">
                                                            
                                                            <div class="btn  btn-red btnExcluir optionSome">
                                                                
                                                                
                                                                <a href="<?php     
                                                               

                                                                
                                                                
                                                                
                                                                
                                                                echo "deletarPaciente.php?id=" . $linha["id_paciente"] 
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        ?>">Apagar</a></div>
                                                              
                                                                <div class="btn btn-fixo btn-red btnApagar"> Apagar Paciente</div>
						 		<div class="btn btn-gray btnCancelar optionSome">Cancelar</div>
					 		</div>
					 	</div>
                                            
                                            <?php } ?>
                                            
                                            <a href="<?php echo "atendente-novaConsulta.php?id=" . $linha["id_paciente"] ?>">
						 	<div class="input-area flex">
                                                            <button class="btn btn-fixo btn-blue">Nova consulta</button>
						 	</div>
					 	</a>
                             <a href="<?php echo "atendente-atividadesConsultaPaciente.php?id=" . $linha["id_paciente"] ?>">
						 	<div class="input-area flex">
						 		<button class="btn btn-fixo btn-yellow">Histórico paciente</button>
						 	</div>
					 	</a>
				 	</div>
				 </div>
                            
                            
                            <form class="area-form" action="editarPaciente.php">
                                <div class="input-area">
				 		<p>Codigo</p>
                                                <input type="text" name="id" value="<?php echo $linha['id_paciente'] ?>"  readonly="true" >
				 	</div>
                                
				 	<div class="input-area">
				 		<p>Nome completo</p>
                                                <input type="text" name="nome" value="<?php echo $linha['nomePaciente'] ?>">
				 	</div>
				 	<div class="input-area">
				 		<p>CPF</p>
                                                <input type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf'] ?>">
				 	</div>
				 	<div class="input-area select" >
				 		<p>Sexo</p>
                                                <select class="campoSelect input-maior" name="sexo" >
				 			<option value="<?php echo $linha['sexo'] ?>"><?php echo $linha['sexo'] ?></option>
				 			<?php
                                                        if( $linha['sexo'] == "feminino"){ ?>
                                                         
                                   
                                                      <option value="masculino">Masculino</option>
                                                      
                                                      <?php
                                                        } else { ?>
                                                      
                                                       <option value="feminino">Feminino</option>
                                                        
                                                        <?php  }?>
				 		</select>
				 	</div>
				 	<div class="input-area">
				 		<p>Data de nascimento:</p>
                                                <input type="date" name="dataNascimento" value="<?php echo $linha['dataNascimento']?>" >
				 	</div>
				 	<div class="input-area">
				 		<p>Telefone</p>
                                                <input type="text" id="telefone" name="telefone" value="<?php echo $linha['telefone'] ?>">
				 	</div>
				 	<div class="area-btn alinha-central">
                                            <button type="submit" class="btn btn-blue">Editar</button>
				 		<a href="atendente-paciente.php"><div  class="btn btn-gray">Cancelar</div></a>
				 	</div>
				 </form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
	<script type="text/javascript" src="js/confirmaApagar.js"></script>
</body>
</html>