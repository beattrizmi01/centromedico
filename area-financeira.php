<!DOCTYPE html>
<html lang="pt-br">
<head>
      <?php
      
      
      
          
      
//permissão ***********************************
     if (!isset($_SESSION)) {
	session_start();
}

    $acesso = $_SESSION['acesso'] ;
    
  
    
    
    //VERIFICAR LOGIN
    if($acesso== null){

               header('Location:login.html');

        }

    
    //********************************************
    
    
    
    
   
    if($acesso==1 || $acesso ==2){
       header('Location:semAcesso.php ');
         //    require_once ('./semAcesso.php');
        
        
    }
    
    
    
    
    
    
//permissão ***********************************   
  
      
      
      
    $totalReceita = 0;
    $transacao = 0;
   
     require_once('./ListarTodosMedicos.php');
         $total = mysqli_num_rows($dados);
	var_dump($total);
        
   
      
        
        
         
        if ($p7 != null){
            
          $falgDados=1;
            
         $total7 = mysqli_num_rows($dados7);
	var_dump($total7);
            
                  
            
        
     
        }
        
    ?>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard/estrutura.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="css/components/components.css">
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	
</head>
<body onload="apagarCampo()">
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
				<div class="opcoes alinha-central active">
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
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="texto-info alinha-central">
						<p>Finanças das consultas</p>
					</div>
				</div>
			</header>
			<div class="apaga-consulta opacity0">
				<div class="txt-cabecalho alinha-central">
					<p>Tem certeza que deseja apagar está receita?</p>
				</div>
				<div class="txt-mensagem-apagar alinha-central">
					<p>Depois de apagar, você não poderá desfazer esta ação.</p>
				</div>
				<div class="txt-apagar">
					<div class="btnManter btnContainer alinha-central"><p class="manterTbm">Manter receita</p></div>
					<div class="btnApagar btnContainer alinha-central"><p>Apagar receita</p></div>
				</div>
			</div>
			<div class="area-consulta-dados">
				<header class="area-consulta-header alinha-central">
					<p>Extrato</p>
				</header>
				<div class="navegação-container">
					<p class="titulo">Navegação</p>
                                        <form class="formulario-busca-finaceiro" action="RelatorioFinaceiro01.php">
						<div class="containerDataFinanceiro alinha-central">
							<div class="input-container positionBusca alinha-central FinanData">
								<label>Data:</label>
                                                                <select name="periodo">
									<option>--</option>
                                                                        <option value="Hoje">Hoje</option>
                                                                        <option value="Semana">Está semana</option>
                                                                        <option value="Mes">Este mês</option>
                                                                        <option value="Ano">Este ano</option>
								</select>
							</div>
							<div class="input-container displayNone positionBusca alinha-central FinanPeri">
								<label for="data1">De:</label>
								<input type="date" id="data1" name="dataInicio">
								<label for="data2">Até:</label>
								<input type="date" id="data2" name="dataFim">
							</div>
							<button class="btnFinanceiro selecionado btnData">Data</button>
							<button class="btnFinanceiro  btnPeri">Período</button>
						</div>
						<div class="input-container marginTopMaior alinha-central">
							<label>Médico:</label>
                                                        
                                                       
                                                        <select class="selectMedico" name="medico">
                                                            
                                                            <option value="Todos">Todos</option>
                                                               
                                                                 <?php 
                                                                     if ($total){do {
                                                                 ?>
                                                            <option value="<?php echo $linha['id_medico']?>"><?php echo $linha['nome'] ?></option>
                                                                     			
                                                         <?php
                                                               } while($linha = mysqli_fetch_assoc($dados));
	
                                                            mysqli_free_result($dados);
                                                             }
                                                             
                                                             mysqli_close($mysqllink);
                                                         ?>
					
							</select>
                                                        
                                                   
						</div>
						<div class="input-container alinha-central">
							<button class="btnFinanceiro btn btn-blue">Pesquisar</button>
						</div>
						
					</form>
				</div>
                           
                            <?php        if ($p7 != null){ ?>
				<div class="containerTabela">
					<table id="tabela1" class="display tabelaMedico tabelaConsulta	tabelaMaior" style="width:100%">
						<thead>
					 		<tr>
					 			<th>Data</th>
					 			<th>Médico</th>
					 			<th>Procedimento</th>
					 			<th>Paciente</th>
					 			<th>Valor</th>
                                                                <th>Estorno</th>
                                                                <th>Dado Baixa por</th>
                                                                
					 		</tr>
					 	</thead>
					 	<tbody>
                                                        
                                                      <?php 
                                                
                                                   
                                                                     if ($total7){do {
                                                                 ?>
						 	<tr>
						 		<td><?php echo $linha7['data']?></td>
						 		<td><?php echo $linha7['nome']?></td>
						 		<td><?php echo $linha7['descricao']?></td>
					 			<td><?php echo $linha7['nomePaciente']?></td>
                                                            
					 			<td><?php echo $linha7['valor']?></td>
                                                                    <?php  if($linha7['estorno']== "F"){
                                                                    $totalReceita = $totalReceita + $linha7['valor'];
                                                                    
                                                                    }?>
                                                                 <?php $transacao =  $total7;?>
                                                                
                                                                <td> 
                                                                <?php 
                                                                if($linha7['estorno']== "F"){
                                                                    
                                                            
                                                                ?>
                                                                    <a href="estornoconsulta.php?id=<?php echo $linha7['id_pagamento']?>">ESTORNAR</a>
                                                                    <?php
                                                                        }else {
                                                                    ?>
                                                                    <p>Consulta estornada</p>
                                                                    
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                
                                                                </td>
                                                                
                                                                <td>
                                                                    <?php
                                                                    if($linha7['nome_atendente_consulta'] == null){
                                                                        
                                                                        ?>
                                                                    
                                                                    <p> EM ABERTO</p> 
                                                                    
                                                                    <?php
                                                                    }else{ ?>
                                                                        
                                                                      <a href="detalhesPagamento.php?f=<?php echo $linha7['nome_atendente_consulta'] ?> && p=<?php echo $linha7['tipo_pagamento'] ?> && d=<?php echo $linha7['data_pagamento']?> && t=Consulta"><p><?php  echo $linha7['nome_atendente_consulta']  ?>  </p> </a>
                                                                        
                                                                  <?php  } ?>
                                                                        
                                                                    
                                                                    
                                                                </td>
						 	</tr>
                                                        
                                                        <?php
                                                               } while($linha7 = mysqli_fetch_assoc($dados7));
	
                                                            mysqli_free_result($dados7);
                                                             }
                                                             
                                                             mysqli_close($mysqllink7);
                                                      
                                                         ?>
					
						</tbody>
					</table>
				</div>
                            
                            
                            
                           <?php } ?>
				 <div class="container-infoExtrato">
				 		<div class="total alinha-central">
				 			<div class="tot-txt">
				 				<p>Total de transações do período:</p>
				 			</div>
				 			<div class="tot-valor">
				 				<p class="printAumenta"><?php echo $transacao?></p>
				 			</div>
				 		</div>
				 		<div class="total totalValor alinha-central">
				 			<div class="receita-txt">
				 				<p>Total de receitas do período:</p>
				 			</div>
				 			<div class="receita-valor">
				 				<p class="printAumenta">R$ <?php echo $totalReceita ?></p>
				 			</div>
				 		</div>
				 	</div>
				 	<div class="print" onClick="window.print()">
				 		<a href="#"><img src="img/print.png" width="40" height="40"></a>
				 	</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

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
	<script type="text/javascript" src="js/somePesquisa.js"></script>
	<script type="text/javascript" src="js/apagarConsultaListagem.js"></script>
	<script type="text/javascript" src="js/mudaTipoPesquisa.js"></script>

</body>
</html>