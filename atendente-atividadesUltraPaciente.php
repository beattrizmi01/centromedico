<!DOCTYPE html>
<html lang="pt-br">
<head>
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
		<div class="area-geral">
			<header class="area-geral-cabecalho">
				<div class="escolha-modalidade alinha-central">
					<div class="modalidade-center alinha-central">
						<div class="container-btn">
							<a href="atendente-atividadesConsultaPaciente.php">
								<button class="btn btn-dark marginBtn">Consulta</button>
							</a>
							<a href="atendente-atividadesExamePaciente.php">
								<button class="btn btn-dark marginBtn">Exame</button>
							</a>
							<a href="atendente-atividadesUltraPaciente.php">
								<button class="btn btn-dark marginBtn">Ultra</button>
							</a>
							<a href="atendente-editarPaciente.php">
								<button class="btn btn-gray marginBtn">voltar</button>
							</a>
						</div>
					</div>
				</div>
			</header>
			<div class="atividades-paciente">
				<h2>Wesley Rafael Costa dos Santos</h2>
			</div>
			<div class="campo-atividade">
				<header class="campo-atividade-header">
					<h3>Ultrasonografia</h3>
				</header>
				<div class="atividade-detalhe">
					<p>Tipo de convênio:</p>
					<p>Prefeitura</p>
				</div>
				<div class="atividade-detalhe">
					<p>Ultrasonografia feito:</p>
					<p>Raio X</p>
				</div>
				<div class="atividade-detalhe">
					<p>Data da Ultrasonografia:</p>
					<p>29/09/2018</p>
				</div>
				<div class="atividade-detalhe">
					<p>Turno da Ultrasonografia:</p>
					<p>Vespertino</p>
				</div>
				<div class="atividade-detalhe">
					<p>Status Ultrasonografia</p>
					<p>Agendada</p>
				</div>
				<div class="btn-editar-consulta alinha-central">
					<a href="atendente-editarUltra.php">
						<button class="btn btn-dark">Editar</button>
					</a>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
</body>
</html>