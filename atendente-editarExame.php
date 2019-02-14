<!DOCTYPE html>
<html lang="pt-br">
<head>
    
   <?php
     if (!isset($_SESSION)) {
	session_start();
        }

    $acesso = $_SESSION['acesso'] ;
    
    
    //VERIFICAR LOGIN
    if($acesso== null){

               header('Location:login.html');

        }
 
    $Exame = filter_input(INPUT_GET, 'id_exame');
    
    require_once ('buscarExameEditar.php');
    $total = mysqli_num_rows($dados);
    $idP=$linha['id_paciente'];
	var_dump($total);
    //*************************************
        
               
        
          
    
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard/estrutura.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="css/components/components.css">
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
			<div class="card-cadastro card-cadastro-maior cadastroPaciente">
				 <header>
				 	<div class="area-texto">
				 		<p>Editar exame</p>
				 	</div>
				 </header>
				 <div class="container-info-paciente alinha-central">
				 	<div class="info-paciente">
				 		<h4><?php echo $linha['nomePaciente']?></h4>
				 		<p><?php echo $linha['convenio']?></p>
				 		<p><?php echo $linha['descricao_tipo_exame']?></p>
				 		<p><?php echo $linha['data_exame']?></p>
				 		<p><?php echo $linha['turno']?></p>
                                                <p><?php echo $linha['status']?></p>
				 	</div>
				 	<div class="botoes-container">
				 		<div class="container-apagar containerSome">
							<p class="optionSome txtApagar">Deseja cancelar o exame?</p>
					 		<div class="dangerZone">
                                                            
                                                            
                                                            <div class="btn btn-red btnExcluir optionSome"><a href="<?php echo "cancelarExame.php?id=" . $linha["id_exame"] ?>">Cancelar</a></div>
						 		<div class="btn btn-fixo btn-red btnApagar">Cancelar exame</div>
						 		<div class="btn btn-gray btnCancelar optionSome">Fechar</div>
					 		</div>
					 	</div>
					 	<div class="btn-pagar alinha-central">
                                                    <a href="novaReceitaExame.php?id=<?php echo $linha['id_exame'] ?>"><button class="btn btn-fixo btn-blue">Nova receita</button></a>
						 </div>
				 	</div>
				 </div>
                            <form class="area-form semPadding padding-top" action="editarExame.php">
				 	<div class="input-area flex">
				 		<h3>Editar exame</h3>
				 	</div>
                                     
                                     
                                     <div class="input-area">
				 		<p>Código do Agendamento</p>
                                                <input class="" value="<?php  echo $linha['id_exame'] ?>" type="text" name="idExame" readonly="true">
				 	</div>
                                     
				 	<div class="input-area select">
				 		<p>Tipo de convênio</p>
                                                <select class="input-maior campoSelect" name="convenio">
				 			<option value="PREFEITURA">Prefeitura</option>
				 			<option value="PARTICULAR">Particular</option>
				 		</select>
				 	</div>
				 	
				 	
                                      
				 
				 	                          
                                     
				 	<div class="input-area">
				 		<p>Data do exame:</p>
				 		<input class="input-menor"  type="date" name="data" placeholder="CPF">
				 	</div>
				 	<div class="input-area">
				 		<p>Turno do exame:</p>
                                                <select class="input-menor campoSelect" name="turno">
				 			<option >manhã</option>
				 			<option >tarde</option>
				 			<option >noite</option>
				 		</select>
				 	</div>
				 	<div class="area-btn alinha-central">
											<button type="submit" class="btn btn-blue">Editar</button>
						<a href="atendente-atividadesExamePaciente.php?id= <?php echo $idP ?>">
						 <div  class="btn btn-gray">Cancelar</div>
						</a>
				 	</div>
                </form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
	<script type="text/javascript" src="js/confirmaApagar.js"></script>
</body>
</html>