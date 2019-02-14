<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
    
        
    //********************************************
    
        //permissão

    if (!isset($_SESSION)) {
	session_start();
        }

    $acesso = $_SESSION['acesso'] ;
    
    
    //VERIFICAR LOGIN
    if($acesso== null){

               header('Location:login.html');

        }

    
    
    //********************************************
    
  
        require_once('consultas.php');
         $total = mysqli_num_rows($dados);
	var_dump($total);
        
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard/estrutura.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="css/components/components.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
				<div class="opcoes alinha-central active">
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
				<div class="info-cabecalho alinha-central">
					<div class="icon icon-info alinha-central">
						<i class="fas fa-notes-medical"></i>
					</div>
					<div class="icon texto-info alinha-central">
						<p>Consultas</p>
					</div>
				</div>
			</header>
			<!--<div class="apaga-consulta opacity0">
				<div class="txt-cabecalho alinha-central">
					<p>Tem certeza que deseja apagar está consulta?</p>
				</div>
				<div class="txt-mensagem-apagar alinha-central">
					<p>Depois de apagar, você não poderá desfazer esta ação.</p>
				</div>
				<div class="txt-apagar">
					<div class="btnManter btnContainer alinha-central"><p class="manterTbm">Manter consulta</p></div>
                                        <div class="btnApagar btnContainer alinha-central"><p><a href="deletarConsulta.php?id=<?php echo $linha['id_consulta'] ?>">Apagar consulta</a></p></div>
				</div>
			</div> !-->
                        
			<div class="area-consulta-dados">
				<header class="area-consulta-header  header-cadastro">
					<p></p>
				</header>
				<table id="tabela1" class="display tabelaMedico tabelaConsulta	tabelaMaior" style="width:100%">
					<thead>
				 		<tr>
				 			<th>Paciente</th>
				 			<th>Médico(a)</th>
				 			<th>Especialidade</th>
				 			<th>Data</th>
				 			<th>Turno</th>
				 			<th>Status</th>
				 			<th>Editar consulta</th>
				 			<th>Apagar consulta</th>
				 		</tr>
				 	</thead>
				 	<tbody>
                                            <?php 
                                                    if ($total){do {
                                            ?>
					 	<tr>
					 		<td><?php echo$linha['nomePaciente'] ?></td>
					 		<td><?php echo$linha['nome'] ?></td>
					 		<td><?php echo$linha['descricao'] ?></td>
					 		<td><?php echo$linha['data'] ?></td>
					 		<td><?php echo$linha['turno'] ?></td>
					 		<td class="status"><?php echo$linha['status'] ?></td>
					 		<td><a href="atendente-editarConsulta.php?id=<?php echo$linha['id_consulta']?>"><i class="fas fa-edit"></i></a></td>
					 		<td>
                                                            <a href="carregarConsulta.php?id=<?php echo $linha['id_consulta'] ?>&&paciente=<?php echo $linha['nomePaciente']?>&&procedimento=<?php echo $linha['descricao']?>&&data=<?php echo $linha['data']?>&&turno=<?php echo $linha['turno']?>&&status=<?php echo $linha['status']?>">
                                                              <i class="close op-close fas fa-trash-alt">
                                                                
                                                                
                                                              </i> </a></td>
					 	</tr>
                                                
                                                 <?php
                                                      } while($linha = mysqli_fetch_assoc($dados));
	
                                         mysqli_free_result($dados);
                                   }
                                                             
                          mysqli_close($mysqllink);
                                                         ?>
					</tbody>
				 </table>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="js/apagarConsultaListagem.js"></script>
	<script type="text/javascript" src="js/mudaStatusConsulta.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {
		    $('#tabela1').DataTable({
		    	"language": {
		            "lengthMenu": "Mostrando _MENU_ registros por página",
		            "zeroRecords": "Nenhum registro encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "Nenhum registro disponível",
		            "infoFiltered": "(filtrado de _MAX_ registros no total)"
		        }});
		} );
	</script>
</body>
</html>