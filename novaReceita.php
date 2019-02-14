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
    
       require_once('./buscaNovaReceita.php');
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
			<div class="card-cadastro cadastroPaciente">
				 <header>
				 	<div class="area-texto">
				 		<p>Novo pagamento</p>
				 	</div>
				 </header>
                            
                            
           
                            
				 <div class="info-pagamento">
                                     
                                     
                            	
                                     
                                     
                                     
				 	<div class="pagamento-area">
				 		<p>Paciente:</p>
				 		<div class="div-info">
				 			<p><?php echo $linha['nomePaciente']?></p>
				 		</div>
				 	</div>
				 	<div class="pagamento-area">
				 		<p>Procedimento:</p>
				 		<div class="div-info">
				 			<p><?php echo $linha['descricao']?></p>
				 		</div>
				 	</div>
				 	<div class="pagamento-area">
				 		<p>Médico:</p>
				 		<div class="div-info">
				 			<p><?php echo $linha['nome']?></p>
				 		</div>
				 	</div>
				 	<div class="pagamento-area">
				 		<p>Valor do procedimento:</p>
				 		<div class="div-info">
				 			<p>R$ <span  class="valorProcedimento"><?php echo $linha['valor']?></span></p>
				 		</div>
				 	</div>
				 </div>
                            <form class="area-form" action="registarPagementoConsulta.php">
                                
                                <div class="input-area">
				 		<p>Codigo da Consulta</p>
                                                 <input class="" value="<?php  echo $linha['id_consulta'] ?>" type="text" name="idConsulta" readonly="true">
                                                
				 	</div>
                                
                                
                                
				 	<div class="input-area">
				 		<p>Formas de pagamento</p>
                                                <select name="opcao" class="pagamento input-maior campoSelect" onchange="Mudar();">
				 			<option value="cartao">Cartão de crédito</option>
				 			<option value="boleto">Boleto</option>
				 			<option value="dinheiro">Dinheiro</option>
				 		</select>
				 	</div>
                                
                                
                                
                                
                                
				 	<div class="input-area container-moeda someDinheiro">
				 		<p>Valor recebido</p>
				 		<div class="area-troco">
				 			<div class="moeda alinha-central">
				 				<p>R$</p>
				 			</div>
				 			<input  onchange="MudaTroco()" id="preco" class="valor" type="text" name="">
				 		</div>
				 	</div>
				 	<div class="pagamento-area container-troco txtnormal someDinheiro">
				 		<p>Troco:</p>
				 		<div class="div-info">
				 			<p>R$ <span class="troco"></span></p>
				 		</div>
				 	</div>
				 	<div class="input-area">
				 		<p>Data</p>
                                                <?php ?>
                                                <input type="date" name="" placeholder="Endereço" value="<?php  $d = date("Y-m-d"); echo$d; $linha['data']?>">
				 	</div>
				 	<div class="input-area">
				 	</div>
				 	<div class="area-btn alinha-central">
                                            <?php  if($linha['status']== "Agendada"){?>
                                            
                                            <button type="submit" class="btn btn-blue">Finalizar</button>
                                            
                                            <?php }  ?>
				 		<div  class="btn btn-gray">Cancelar</div>
				 	</div>
				 </form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/campoDinheiro.js"></script>
	<script type="text/javascript" src="js/calcularTroco.js"></script>
</body>
</html>