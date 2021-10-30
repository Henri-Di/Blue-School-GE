<!DOCTYPE html>
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
<!-- Inicio documento HTML/CSS/PHP -->
<html lang="PT-BR">
<!-- Inicio cabeçalho Blue School -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Encaminhar mensagem</title>		
	<!-- Container Blue School logo-->
	<div class="container-fluid pt-3" id="Blue-logo">
		<h1 id="Blue-text-logo" onclick="window.location.href='index.php';">Blue School<br>Gestão Escolar 
		<img src="./imagens/BlueIcon.png"  width="30pt" height="30pt" id="Blue-icon-logo"/>
		</h1>		
	</div>
		<!-- Fim container Blue School logo -->			
</head>
<!-- Fim cabeçalho Blue School -->
<body  oncontextmenu="return false" onload="myFunction()" style="margin:0;">
	<br>
	<!-- Container loading -->
	<div id="loader"></div>
	<!-- Fim container loading -->
	<!-- Inicio container loading animação -->
	<div style="display:none;" id="blue-animate" class="animate-bottom">
	<!-- Inicio painel gestor -->
	<div class="container" id="painel-restrito">	
	
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
		<div class="container" id="blue-text-separador">Encaminha mensagem</div>	
	<br>
	<div class="container" id="blue-table-cdst">
		<form class="needs-validation" method="POST" action="CreateColaborador.php" novalidate >
		<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
				<td>
				<div id="blue-title-table-cdst">De</div><br>
				<input type="text" id="blue-input-cdst"name="email" value="<?php echo $_SESSION['usuarioEmail'];?>" autocomplete="off" required />
				</td>
					
					<td>
					<?php 
					include('ConnectionBlue.php'); 
					$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
					$consulta = "SELECT * FROM Colaborador WHERE id='$id'";
					$con = mysqli_query($conn,$consulta) or die (mysqli_error);
					?> 
					<?php while($dado = $con->fetch_array()) { ?> 
					<div id="blue-title-table-cdst">Para</div><br>
					<input type="text" id="blue-input-cdst"name="nome-planejamento" value="<?php echo $dado['EMAIL'];?>" autocomplete="off" required />
					<?php } ?>
					</td>
		
					<td>
					<div id="blue-title-table-cdst">Assunto</div><br>
					<input type="text" id="blue-input-cdst"name="nome-planejamento" value="" autocomplete="off" required />
					</td>
					
				</tr>	
		</thead>
		</table>
		<table class="table table-bordered" id="blue-table-input">
		<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Mensagem</div><br>
					<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
					<textarea id="blue-textarea" name="mensagem"></textarea>
						<script>
                        CKEDITOR.replace( 'mensagem' );
					</script>
					</td>	
				</tr>	
		</thead>
		</table>
		<button type="submit" id="blue-btn-cdst">Encaminhar mensagem</button>
		</form>
	</div>
	</div>	
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
	</div>

	
</body>	
</html>	