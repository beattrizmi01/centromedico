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

             $paciente = filter_input(INPUT_GET,'id');
             
          
            $id_exame = filter_input(INPUT_GET, "id_exame");
     
           
               
            
           
            
             
    
             
              if($paciente!= null){
      
          echo $paciente;
         require_once('buscarPaciente.php');
           $total = mysqli_num_rows($dados);
	var_dump($total);
         }else {
             header("Location: cadastrarMedico.php");
            
             
       
      
      
             
         }
             
             
             
             
    
    require_once('buscarExameEspecialidade.php');
      $totalE = mysqli_num_rows($dadosE);
	var_dump($totalE);
        $codigoExame = $linhaE['id_tipo_exame'];
       
         
       
            $idExame= filter_input(INPUT_GET, 'idExame');
            if($idExame!= null){
                  echo $idExame;
                require_once('examePorEspecialidade.php');
                 $totalP = mysqli_num_rows($dadosP);
                        var_dump($totalP);
            
                 
        
            }else {
                
                $idExame= 1;
     require_once('buscarMedicoEspecialidade.php');
      require_once('examePorEspecialidade.php');
                 $totalP = mysqli_num_rows($dadosP);
                        var_dump($totalP);
                        
                  
       
          
            }
    
            
            
     
         
           echo $id_exame;
                require_once('./ListaExameMarcar.php');
                
                 $totalLE = mysqli_num_rows($dadosLE);
                        var_dump($totalLE);
            
      
        
          
                
    
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
		<aside style="padding-top: 23px" class="menu-opcoes">
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
		<div style="padding-top: 23px;" class="area-geral">
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
				 		<p>Cadastrar novo exame</p>
				 	</div>
				 </header>
                                    <form class="area-form padding-top" action="novoExame.php">
				 	<div class="info-input alinha-central">
				 		<ul>
                                                  
				 			<li><?php echo $linha['nomePaciente'] ?> </li>
				 			<li><?php echo $linha['dataNascimento']?></li>
                                                       
				 		</ul>
				 	</div>
                                     <div class="input-area">
				 		<p>Código do Paciente:</p>
                                                <input required="" class="" value="<?php  echo $paciente ?>" type="text" name="idPaciente" readonly="true">
				 	</div>
                                     
                                
				 	
				 	<div class="input-area select">
				 		<p>Exame a ser feito</p>
                                           
                                                <select class="input-maior campoSelect" name="especialidade" onchange="location = this.value">
                                                     <option value= "">Selecione uma Especialidade</option>
                                                         <?php 
                                                                if ($totalE){do {
                                                               ?>
				 			
                                                    <option value="atendente-novoExame.php?id= <?php echo $linhaE['id_tipo_exame']?> && id=<?php echo $paciente ?> && id_exame=<?php echo $linhaE['id_tipo_exame']?>"> <?php echo $linhaE['descricao_tipo_exame'] ?> </option>
                                                        
                                                        
                                                        <?php
                                                     
                                                          } while($linhaE = mysqli_fetch_assoc($dadosE));
	
                                                                        mysqli_free_result($dadosE);
                                                             }
                                                             
                                                            mysqli_close($mysqllinkE);
                                                         ?>
				 		</select>
				 	</div>
                                        
                                        <table>
                                            <tr>
                                                <th> Codigo </th>
                                                <th> Exame</th>
                                                <th>Valor</th>
                                            </tr>
                                      
			       
                                             <tr>
                                                 <td><?php echo $linhaLE['id_tipo_exame'] ?> </td>
                                                <td> <?php echo $linhaLE['descricao_tipo_exame'] ?></td>
                                                <td><?php echo $linhaLE['valor_exame'] ?></td>
                                             </tr> 
                                   
                                        </table>
                                        
				 	
                                        
                                        <div class="input-area">
				 		<p>Código do Exame:</p>
				 		<input required="" class="" type="number" name="especialidade" >
				 	</div>
                                        
                                        
                                        <div class="input-area select">
				 		<p>Tipo de convênio</p>
                                                <select class="input-maior campoSelect" name="convenio">
				 			<option value="Prefeitura">Prefeitura</option>
				 			<option value="Particular">Particular</option>
                                                      
				 		</select>
				 	</div>
<<<<<<< HEAD
                                        
				 	
=======
				 	<div class="input-area select">
				 		<p>Tipo de convênio</p>
                                                <select class="input-maior campoSelect" name="convenio">
				 			<option value="Prefeitura">Prefeitura</option>
				 			<option value="Particular">Particular</option>
                                                      
				 		</select>
				 	</div>
>>>>>>> e292450be816a4f12331beb564a050dd777622e0
				 	<div class="input-area">
				 		<p>Data da exame:</p>
				 		<input required="" class="input-maior"  type="date" name="data" placeholder="CPF">
				 	</div>
				 	<div class="input-area">
				 		<p>Turno da exame:</p>
                                                <select class="input-maior campoSelect" name="turno">
				 			<option >Manhã</option>
				 			<option >Tarde</option>
				 			<option >Noite</option>
				 		</select>
				 	</div>
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