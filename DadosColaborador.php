<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("blue-animate").style.display = "block";
}
</script>
<script>
document.oncontextmenu = function(){return false;}
</script> 
<!DOCTYPE html>
<!-- Inicio documento HTML/CSS/PHP -->
<html lang="PT-BR">
<!-- Inicio cabeçalho Blue School -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=TW+Cen+MT+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Relação Colaboradores</title>		
	<!-- Container Blue School logo-->
	<div class="container-fluid pt-3" id="Blue-logo">
		<h1 id="Blue-text-logo" onclick="window.location.href='index.php';">Blue School<br>Gestão Escolar 
		<img src="./imagens/BlueIcon.png"  width="30pt" height="30pt" id="Blue-icon-logo"/>
		</h1>		
	</div>
		<!-- Fim container Blue School logo -->		
</head>
<!-- Fim cabeçalho Blue School -->
	<!-- Inicio corpo HTML/CSS/PHP -->
<body  oncontextmenu="return false" onload="myFunction()" style="margin:0;">
	<!-- Container loading -->
	<div id="loader"></div>
	<!-- Fim container loading -->
	  <br>
	  <!-- Inicio container loading animação -->
	<div style="display:none;" id="blue-animate" class="animate-bottom">
	  <!-- Inicio container que armazena os dados cadastrados -->	
	<div class="container" id="blue-container-dados">
	<br>
	<!-- Inicio container variavel sessão -->
	<?php
		session_start();
		echo '<div class="container" id="text-session">Gestor:  ' . $_SESSION['usuarioNome'];
	?>
	
	<br>
	
	<a id="text-exit" href="ExitBlue.php">Sair</a>
	</div>
	<br>
	<!-- Fim container variavel sessão -->
	<div class="container" id="blue-text-separador">Relação de Colaboradores</div><br>

	<div class="container" id="blue-search">
	<form class="example"  method="POST" action="SearchColaborador.php">
		<input type="text" name="search">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
	</div> 
	<br><br>
	<?php 
	include('ConnectionBlue.php'); 
	$consulta = "SELECT * FROM Colaborador ORDER BY NOME";
	$con = mysqli_query($conn,$consulta) or die (mysqli_error);
	?> 
		<!-- Inicio container 3 colunas -->
		<div class="row" id="blue-box-colunas">
		<!-- Inicio box do container 3 colunas	-->
		
		<?php while($dado = $con->fetch_array()) { ?> 
		<div class="col">
		
		<!-- Inicio container flip-card -->
		<div class="flip-card">
		
		<!-- Inicio container que armazena flip-card-front e flip-card-back -->		
		<div class="flip-card-inner">
		
		<!-- Inicio flip-card-front -->	
		<div class="flip-card-front">
		<div id="blue-title-front-card">Colaborador
		</div><br>
		<p id="blue-text-flip-card">Nome: <?php echo $dado['NOME']; ?></p>
		<p id="blue-text-flip-card">Departamento: <?php echo $dado['DEPARTAMENTO']; ?></p>
		<p id="blue-text-flip-card">Cargo: <?php echo $dado['CARGO'];?></p>
		</div>
		<!-- Fim flip-card-front -->
	
		<!-- Inicio flip-card-back -->
		<div class="flip-card-back">
		<br><br>
		<p id="blue-text-flip-card">Email: <?php echo $dado['EMAIL']; ?> </p> 
		<p id="blue-text-flip-card">Estado: <?php echo $dado['ESTADO']; ?></p>
		<p id="blue-text-flip-card">Cidade: <?php echo $dado['CIDADE']; ?></p> 
		</div>
		<!-- Fim flip-card-back -->
		
		</div>
		<div id="blue-optios-config-dados" onclick="window.location.href='ConfigurarColaborador.php?id=<?php echo $dado['ID'];?>';">Configurar
		<img src="./imagens/engrenagenstwo.png" width="15pt" height="15pt">
		</div>
		<br>
		<!-- Fim container que armazena flip-card-front e flip-card-back -->
		</div><br><br><br>
		<!-- Fim container flip card -->
		</div>
		<!-- Fim box do container 3 colunas -->	
		<?php } ?>	
		</div>
		<!-- Fim container 3 colunas -->
		<br>
		</div>
		<!-- Fim container que armazena os dados cadastrados -->
		<br><br><br>

	<!-- Inicio container rodapé -->
	<div class="container-fluid pt-3" id="Blue-logo-bottom">
		<div class="row">
				
			<div class="col" id="Blue-link-bottom">
			Gestor<br>
			<img src="./imagens/Blueicon.png"  width="25pt" height="25pt"/>	
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Configurações<br>
			<img src="./imagens/engrenagens.png"  width="25pt" height="25pt"/>
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Suporte<br>
			<img src="./imagens/consultando-servicos.png"  width="25pt" height="25pt"/>		
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Ajuda<br>
			<img src="./imagens/questao.png"  width="25pt" height="25pt"/>
			</div>
			
		</div>
		<br>
	</div>
	<!-- Fim container rodapé -->
	</div>
	<!-- Fim container loading animação -->








</body>
<!-- Fim corpo HTML/CSS/PHP -->
</html>