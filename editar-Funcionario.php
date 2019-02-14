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
     $id = filter_input(INPUT_GET, 'id');
     echo $id;
     require_once('buscarFuncionarioEditar.php');
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
		<div class="area-geral">
			<header class="area-geral-cabecalho">
				<div class="info-cabecalho  alinha-central">
					<div class="icon icon-info alinha-central">
						<i class="fas fa-plus"></i>
					</div>
					<div class="icon texto-info alinha-central">
						<p>Editar funcionário</p>
					</div>
				</div>
			</header>
			<div class="card-cadastro cadastroPaciente">
				 <header class="header-cadastro">
				 	<div class="">
				 		<p></p>
				 	</div>
				 </header>
                            <form class="area-form" action="editarFuncionario.php">
                                
                                <div class="input-area">
				 		<p>Codigo do Funcionario</p>
                                                <input required="" type="text" name="id" required="" value="<?php echo $linha['idFuncionario']?>" readonly="true" >
				 	</div>
				 	<div class="input-area">
				 		<p>Nome completo</p>
                                                <input required="" type="text" name="nome" required="" value="<?php echo $linha['nome_funcionario']?>" >
				 	</div>
				 	<div class="input-area">
				 		<p>CPF</p>
				 		<input required="" type="text" name="cpf" required="" id="cpf"  value="<?php echo $linha['cpf_funcionario']?>">
				 	</div>
				 	<div class="input-area">
				 		<p>Endereço</p>
				 		<input required="" type="text" name="endereco" required="" value="<?php echo $linha['endereco_funcionario']?>">
				 	</div>
				 	<div class="input-area">
				 		<p>Telefone</p>
				 		<input required="" type="text" name="telefone" required="" id="telefone" value="<?php echo $linha['telefone_funcionario']?>">
				 	</div>
				 	<div class="input-area ">
				 		<p>Cargo</p>
                                                <select class="campoSelect input-maior" name="cargo">
                                                    <option value="<?php echo $linha['cargo_idcargo']?>"><?php echo $linha['descricao_cargo'] ?></option>
				 			<option value="1">Gerente</option>
				 			<option value="2">Subgerente</option>
				 			<option value="3">Atendente</option>
				 		</select>
				 	</div>
				 	<div class="input-area">
				 		<p>Email</p>
                                                <input required="" type="email" name="email" value="<?php echo $linha['email_funcionario'] ?>" required="" id="email" >
				 	</div>
                    <div class="input-area">
				 		<p>Senha</p>
                                                <input required="" type="text" name="senha"   value="<?php echo $linha['senha_funcionario']?>">
				 	</div>    
				 	<div class="area-btn alinha-central">
                                            <button type="submit" class="btn btn-blue">Editar</button>
				 		<a href="pesquisaFuncionario.php"><div  class="btn btn-gray">Cancelar</div></a>
				 	</div>
				 </form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
</body>
</html>