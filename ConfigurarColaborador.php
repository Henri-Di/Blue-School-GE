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
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Configurar Colaborador</title>		
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
	<div class="container" id="blue-text-separador">Configurações do Perfil</div><br>
		<div class="container" id="login-blue-school">	
		<!-- Container links para perfis de acesso -->
		<div class="row">
			<?php 
			include('ConnectionBlue.php'); 
			$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
			$consulta = "SELECT * FROM Colaborador WHERE id='$id'";
			$con = mysqli_query($conn,$consulta) or die (mysqli_error);
			?> 
			<?php while($dado = $con->fetch_array()) { ?> 
			<div class="container">
			<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Matricula</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $dado['ID'];?> </p>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Colaborador</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $dado['NOME'];?> </p>
					</div>	
					
					</td>
					
				</tr>
			</thead>
			</table>
			</div>
			
			<div class="col" id="perfil-blue" onclick="window.location.href='EditarColaborador.php?id=<?php echo $dado['ID'];?>';">Editar Colaborador<br>
			<img src="./imagens/editar-arquivo.png" width="25pt" height="25pt">
			</div>
	
			<div class="col" id="perfil-blue" onclick= "window.location.href='DeleteColaborador.php?id=<?php echo $dado['ID'];?>';">Remover Colaborador<br>
			<img src="./imagens/lixo.png" width="25pt" height="25pt">
			</div>
			
			<div class="col" id="perfil-blue" onclick="window.location.href='EncaminharMensagemColaborador.php?id=<?php echo $dado['ID'];?>';">Encaminhar Mensagem<br>
			<img src="./imagens/encaminhamento.png" width="25pt" height="25pt">
			</div>
			
			<div class="col" id="perfil-blue" onclick="">Ocorrências<br>
			<img src="./imagens/problema.png" width="25pt" height="25pt">
			</div>
		
		</div>
			<?php } ?>
		<!-- Fim container links para perfis de acesso -->
	</div>
		</div>
		<!-- Fim container que armazena os dados cadastrados -->
		<br><br>
		<br><br>
		<br><br>
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