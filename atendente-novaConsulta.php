<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
       //permissão

    if (!isset($_SESSION)) {
	session_start();
        }

    $acesso = $_SESSION['acesso'] ;
    
    
    //VERIFICAR LOGIN
    if($acesso== null){

               header('Location:login.html');

        }

    
    $id = filter_input(INPUT_GET, 'id');
    $idEspecialidade = filter_input(INPUT_GET, "idEspecialidade");
    $des= null;
    $valor = null;
 if($idEspecialidade != null){
     echo $idEspecialidade;
     
      require_once('buscarMedicoEspecialidade.php');
      $totalM = mysqli_num_rows($dadosM);
	var_dump($totalM);
        
         $des = $linhaM['descricao'];
         $valor = $linhaM['valor'];
        
 }else {
     $idEspecialidade = 1;
     require_once('buscarMedicoEspecialidade.php');
      $totalM = mysqli_num_rows($dadosM);
	var_dump($totalM);
        
        $des = $linhaM['descricao'];
            $valor = $linhaM['valor'];
     
 }
 
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
                                    <?php } ?>
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
							<a href="atendente-novaConsulta.php?id=<?php echo $id ?>">
								<button class="btn btn-dark marginBtn">Consulta</button>
							</a>
							<a href="atendente-novoExame.php?id=<?php echo $id ?>">
								<button class="btn btn-dark marginBtn">Exame</button>
							</a>

							<a href="<?php echo "atendente-editarPaciente.php?id=" . $linha["id_paciente"] ?>">

							<a href="atendente-editarPaciente.php?id=<?php echo $id ?>">

								<button class="btn btn-gray marginBtn">voltar</button>
							</a>
						</div>
					</div>
				</div>
			</header>
			<div class="alinha-central">
				<div class="card-cadastro cadastroRaioX">
				 <header>
				 	<div class="area-texto">
				 		<p>Cadastrar nova consulta</p>
				 	</div>
				 </header>
                                    <form class="area-form padding-top" action="agendarConsulta.php">
				 	<div class="info-input alinha-central">
				 		<ul>
				 			<li><?php echo$linha['nomePaciente'] ?> </li>
				 			<li><?php echo$linha['dataNascimento'] ?></li>
				 		</ul>
				 	</div>
                                     
                                     
                                     <?php
                                     require_once('listarProcedimento.php');
                                     	
                                     ?>
				 	<div class="input-area select">
				 		<p>Especialidade</p>
				 		<div class="flex">
                                                    <select class="input-menor campoSelect" name="tipo" onchange="location = this.value">
                                                             <option value= "">Selecione uma Especialidade</option>
                                                            <?php 
                                                                if ($total){do {
                                                               ?>
				 			 <option value="atendente-novaConsulta.php?idEspecialidade=<?php echo $linha['id_especialidade']?> && id=<?php echo $id ?> "><?php echo $linha['descricao'] ?></option>
				 			
                                                        <?php
                                                          } while($linha = mysqli_fetch_assoc($dados));
	
                                                                        mysqli_free_result($dados);
                                                             }
                                                             
                                                            mysqli_close($mysqllink);
                                                         ?>
				 		</select>
                                                    
				 		</div>
				 	</div>
				 	<table class="tabelaMedico tabelaEspaço">
				 		<tr>
				 			<th>CodMe</th>
				 			<th>Nome</th>
				 			<th>Dia</th>
				 			<th>Manhã</th>
				 			<th>Tarde</th>
				 			<th>Noite</th>
                                                  
				 		</tr>
                                               <?php 
                                                                if ($totalM){do {
                                                               ?>
				 		<tr>
				 			<td><?php echo $linhaM['id_medico'] ?> </td>
				 			<td><?php echo $linhaM['nome']?></td>
                                      
                                                        <td> <?php echo ($linhaM["dia"])?></td>    
                                                            
                                                        <td> <?php echo ($linhaM["m"])?> </td>  
                                                        
                                                        <td> <?php echo ($linhaM["t"])?> </td>    
                                                        
                                                         <td> <?php echo ($linhaM["n"])?> </td>  
                                                        
                                                         
                                
                                                         
                                                        
                                                  
				 		</tr>
                                                
                                                <?php
                                                          } while($linhaM = mysqli_fetch_assoc($dadosM));
	
                                                                        mysqli_free_result($dadosM);
                                                             }
                                                             
                                                            mysqli_close($mysqllinkM);
                                                         ?>
                                                
				 	</table>
                                     
                                     
                                     
                                     
                                     
                                     	<div class="input-area">
				 		<p>Código do Paciente:</p>
                                                <input required="" class="" value="<?php  echo $id ?>" type="text" name="idPaciente" readonly="true">
				 	</div>
                                     
                                     
				 	<div class="input-area">
				 		<p>Código do médico do consulta:</p>
				 		<input required="" class="" type="number" name="idMedico" >
				 	</div>
				 	<div class="input-area">
				 		<p>Data da consulta:</p>
				 		<input required="" class=""  type="date" name="dataConsulta" placeholder="CPF">
				 	</div>
				 	<div class="input-area">
				 		<p>Turno da consulta:</p>
                                                <select class="input-maior campoSelect" name="turno">
				 			<option >Manhã</option>
				 			<option >Tarde</option>
				 			<option >Noite</option>
				 		</select>
				 	</div>
                                        
                                        
                                        
				 	<table class="tabelaMedico">
				 		<tr>
				 			<th>Consulta</th>
				 			<th>Preço</th>
				 		</tr>
                                                 
				 		<tr>
				 			<td><?php echo $des ?></td>
				 			<td><?php echo $valor ?></td>
				 		</tr>
                                                
                                                                      
                                            
                                                
				 	</table>
				 	<div class="area-btn alinha-central">
                                            <button type="submit" class="btn btn-blue">Cadastrar</button>
											<a href="atendente-editarPaciente.php?id=<?php echo $id ?>"><div  class="btn btn-gray">Cancelar</div></a>
				 	</div>
				 </form>
			</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
        
     
        
</body>
</html>