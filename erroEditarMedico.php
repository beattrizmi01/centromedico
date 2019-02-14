<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    
  $id = filter_input(INPUT_GET, 'id');

  
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
				<p>Painel gerente</p>
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
			<a href="cadastrarFuncionarios.html">
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
			<a href="cadastrarProcedimento.html">
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
				 		<p>Erro editar médico</p>
				 	</div>
				 </header>
				 <div class="container-info-paciente alinha-central">
				 	<div class="info-paciente">
                                            
				 		<h4> Médico não possui horários cadastrado, favor cadastrar Medico Novamente!  </h4>
              
				 	</div>

				 	<div class="botoes-container">
                                            
                                           
				 		<div class="container-apagar containerSome">
							<p class="optionSome txtApagar">Deseja apagar este procedinto do Sistema?</p>
					 		<div class="dangerZone">
                                                            <div class="btn btn-red btnExcluir optionSome"><a href="cadastrarMedico.php">Cadastrar</a></div>
						 	
						 

						 <div class="btn btn-gray btnCancelar optionSome">Fechar</div>
					 	</div>
					 		

						 </div>

						 
						 <div class="btn-pagar alinha-central">
                                                     <a href="pesquisaMedico.php">
						 	<button class="btn btn-fixo btn-blue">Voltar</button></a>
						 </div>
				 	</div>
				 </div>
                            
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
	<script type="text/javascript" src="js/confirmaApagar.js"></script>
</body>
</html>