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
				<title>Blue School - Cadastra Colaborador</title>		
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
	require_once 'ConnectionBlue.php';
	
	$nome = @$_POST['nome'] ?? "";
	
	$genero = @$_POST['genero'] ?? "";
	
	$nascimento = @$_POST['nascimento'] ?? "";
	
	$cpf = @$_POST['cpf'] ?? "";
	
	$rg = @$_POST['rg'] ?? "";
	
	$estado = @$_POST['estado'] ?? "";
	
	$cidade = @$_POST['cidade'] ?? "";
	
	$endereco = @$_POST['endereco'] ?? "";
	
	$cep = @$_POST['cep'] ?? "";
	
	$departamento = @$_POST['departamento'] ?? "";
	
	$cargo = @$_POST['cargo'] ?? "";
	
	$jornada = @$_POST['jornada'] ?? "";
	
	$salario = @$_POST['salario'] ?? "";
	
	$email = @$_POST['email'] ?? "";
	
	$senha = @$_POST['senha'] ?? "";
	
	$telefone = @$_POST['telefone'] ?? "";
	
	$situacao = @$_POST['situacao'] ?? "";
	
	$nivel = @$_POST['nivel'] ?? "";


		$sql = 
			  "INSERT INTO Colaborador(
									  ID,
									  NOME,
									  GENERO,
									  NASCIMENTO,
									  CPF,
									  RG,
									  ESTADO,
									  CIDADE,
									  ENDERECO,
									  CEP,
									  DEPARTAMENTO,
									  CARGO,
									  JORNADA,
									  SALARIO,
									  EMAIL,
									  SENHA,
									  TELEFONE,
									  SITUACAO,
									  NIVEL)";
		$sql.= "VALUES(
					   NULL,
					   '$nome',
					   '$genero',
					   '$nascimento',
					   '$cpf',
					   '$rg',
					   '$estado',
					   '$cidade',
					   '$endereco',
					   '$cep',
					   '$departamento',
					   '$cargo',
					   '$jornada',
					   '$salario',
					   '$email',
					   '$senha',
					   '$telefone',
					   '$situacao',
					   '$nivel')";  
	?>	
	
	<?php 	if(mysqli_query($conn, $sql)){ 
			echo "<div class='container' id='cdst-sucess'>Colaborador Cadastrado!<br>";
			echo "<img src='./imagens/verifica.png' width='20pt' height='20pt'/>";
			echo "<br>";
			echo "</div>";
			echo "<div class='container' style='text-align:center;margin-top:1%;'>";
			echo "<a id='blue-link-return'href='CadastroColaborador.php'/>Novo colaborador";
			echo "<br>";
			echo "<a id='blue-link-return'href='PainelGestor.php'/>Retornar ao painel Gestor";
			echo "</div>";				
			}else{
			echo "<div class='container' id='cdst-sucess'>Não foi possível cadastrar!<br>";
			echo "<img src='./imagens/verifica.png' width='20pt' height='20pt'/>";
			echo "<br>";
			echo "</div>";
			echo "<div class='container' style='text-align:center;margin-top:1%;'>";
			echo "<a id='blue-link-return'href='PainelGestor.php'/>Retornar ao painel Gestor";
			echo "</div>";		
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

	
</body>	
</html>	