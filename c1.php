<!DOCTYPE html>
<html lang="pt-br">
<head >
    
    <?php
    $id = filter_input(INPUT_GET, 'id');
    echo $id;
      require_once('./comprovanteConsulta.php');
         $total = mysqli_num_rows($dados);
	var_dump($total);
        

 
?>
	<meta charset="utf-8">
       
	<title>Sucesso no procedimento</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard/estrutura.css">
	<link rel="stylesheet" type="text/css" href="css/components/components.css">
	<link rel="stylesheet" type="text/css" href="css/resultado.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.3.1-web/css/all.css">
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
			
		</aside>
		<div class="area-geral">
			<div class="card-info">
				<h1 class="title">Comprovante de Pagamento Consulta</h1>
                                </br>
                                <p1> Paciente: <?php echo $linha['nomePaciente'] ?></p1>
                                <p1> Data Nascimento: <?php echo $linha['dataNascimento'] ?></p1>
                                <p1> Procedimeto: <?php echo $linha['descricao'] ?></p1>
                                <p1> Medico: <?php echo $linha['nome'] ?></p1>
                                
                                <p1> Data da Consulta: <?php echo $linha['data'] ?></p1>
                                <p1> Valor Pago: <?php echo $linha['valor'] ?></p1>
                           
                                <p1> Fone: <?php echo $linha['telefone'] ?></p1>
                              
                                
			</div>
		</div>
	</main>
</body>
</html>