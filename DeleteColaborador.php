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
				<title>Blue School - Remover Colaborador</title>		
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
	<br><br><br>	
	
	<?php
	
			require_once("ConnectionBlue.php");
			$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
			if(!empty($id)){
			$result_usuario = "DELETE FROM Colaborador WHERE id='$id'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			if(mysqli_affected_rows($conn)){
			echo "<div class='container' id='cdst-sucess'>Colaborador Removido!<br>";
			echo "<img src='./imagens/verifica.png' width='20pt' height='20pt'/>";
			echo "<br>";
			echo "</div>";	
			echo "<div class='container' style='text-align:center;margin-top:1%;'>";
			echo "<a id='blue-link-return'href='DadosColaborador.php'/>Relação de dados";
			echo "<br>";
			echo "<a id='blue-link-return'href='PainelGestor.php'/>Retornar ao painel Gestor";
			echo "</div>";		
			}
				}
	?>
	
	</div>
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