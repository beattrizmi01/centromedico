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
        require_once('buscaMedicoHorario.php');
         $total = mysqli_num_rows($dados);
	var_dump($total);
        
        if($total<1){
           echo $id;
            header("Location:deletarMedicoSemHorario.php?id='$id'");
        
    
        }
    
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
			<button class="btn btn-dark alinha-central">Sair</button>
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
						<p>Editar médico</p>
					</div>
				</div>
			</header>
			<div class="card-cadastro cadastroPaciente">
				 <header class="header-cadastro">
				 	<div class="">
				 		<p></p>
				 	</div>
				 </header>
                            <form class="area-form" action="editarHorarioMedico.php">
				 	<div class="input-area">
                                      
                                              <p>Codigo do medico</p>
                                               <input required=""  type="text" name="id_medico" value="<?php echo $linhaPM['id_medico'] ?>" readonly="true">
				 	
                                
                                             <p>Nome Completo</p>
                                                <input required="" type="text" name="nome" value="<?php echo $linhaPM['nome'] ?>" >
                                                
                                              <p>Codigo da Agenda do Medico</p>
                                                <input required="" type="text" name="id_agenda" value="<?php echo $linhaPM['id_horario'] ?>" >  
                                                
				 	</div>
                                     
                                     
                                     
                                     <table class="tabelaMedico tabelaEspaço">
				 		<tr>
				 			
				 			<th>Dia</th>
				 			<th>Manhã</th>
				 			<th>Tarde</th>
				 			<th>Noite</th>
                                                  
				 		</tr>
                                               <?php 
                                                                if ($total){do {
                                                               ?>
				 		<tr>
				 			
                                                        <td> <?php echo ($linhaPM["dia"])?></td>    
                                                            
                                                        <td> <?php echo ($linhaPM["m"])?> </td>  
                                                        
                                                        <td> <?php echo ($linhaPM["t"])?> </td>    
                                                        
                                                         <td> <?php echo ($linhaPM["n"])?> </td>  
                                                        
                                                         
                                
                                                         
                                                        
                                                  
				 		</tr>
                                                
                                                <?php
                                                          } while($linha = mysqli_fetch_assoc($dados));
	
                                                                        mysqli_free_result($dados);
                                                             }
                                                             
                                                            mysqli_close($mysqllink);
                                                         ?>
                                                
				 	</table>
                                     
                                     
                                     
                   <br/>
				 	
				 	<div class="disponibildade-container">
				 		<p>Disponibilidade por semana</p>
				 		<div class="disponibilidade">
				 			<p class="disponibilidadeTexto">Segunda-feira</p>
				 			<input id="manhã" type="radio" name="sm" value="x" >
				 			<label class="label">Manhã</label>

				 			<input id="tarde" type="radio" name="st" value="x">
				 			<label class="label">Tarde</label>

				 			<input id="noite" type="radio" name="sn" value="x">
				 			<label class="label">Noite</label>
				 		</div>
				 		<div class="disponibilidade">
				 			<p class="disponibilidadeTexto">Terça-feira</p>
                                                        <input id="manhã" type="radio" name="tm" value="x">
				 			<label class="label">Manhã</label>

				 			<input id="tarde" type="radio" name="tt" value="x">
				 			<label class="label">Tarde</label>

				 			<input id="noite" type="radio" name="tn" value="x">
				 			<label class="label">Noite</label>
				 		</div>
				 		<div class="disponibilidade">
				 			<p class="disponibilidadeTexto">Quarta-feira</p>
				 			<input id="manhã" type="radio" name="qm" value="x">
				 			<label class="label">Manhã</label>

				 			<input id="tarde" type="radio" name="qt" value="x">
				 			<label class="label">Tarde</label>

				 			<input id="noite" type="radio" name="qn" value="x">
				 			<label class="label">Noite</label>
				 		</div>
				 		<div class="disponibilidade">
				 			<p class="disponibilidadeTexto">Quinta-feira</p>
				 			<input id="manhã" type="radio" name="quim" value="x">
				 			<label class="label">Manhã</label>

				 			<input id="tarde" type="radio" name="quit" value="x">
				 			<label class="label">Tarde</label>

				 			<input id="noite" type="radio" name="quin" value="x">
				 			<label class="label">Noite</label>
				 		</div>
				 		<div class="disponibilidade">
				 			<p class="disponibilidadeTexto">Sexta-feira</p>
				 			<input id="manhã" type="radio" name="sxm" value="x">
				 			<label class="label">Manhã</label>

				 			<input id="tarde" type="radio" name="sxt" value="x">
				 			<label class="label">Tarde</label>

				 			<input id="noite" type="radio" name="sxn" value="x">
				 			<label class="label">Noite</label>
				 		</div>
				 	</div>
				 	<div class="area-btn alinha-central">
                                            <button type="submit" class="btn btn-blue">Editar</button>
				 		<a href="pesquisaMedico.php"><div  class="btn btn-gray">Cancelar</div></a>
				 	</div>
				 </form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/open-close-option.js"></script>
</body>
</html>