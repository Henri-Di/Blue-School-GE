<?php session_start();?>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Painel Secretaria</title>		
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
			<div class="container">
				<table class="table table-bordered" id="blue-table-input">
				<thead>
					<tr>
					
					<td>
					<div id="blue-title-table-cdst">Matricula</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $_SESSION['usuarioId'];?> </p>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Colaborador</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $_SESSION['usuarioNome'];?> 
					</p>
					</div>	
					</td>
					</tr>
				</thead>
				<thead>
				<tr>
				<td>
				<div class="container">
					<div class="row">
					<div class="col" id="text-sub-menu-painel" onclick="window.location.href='ExitBlue.php';">Meu perfil</div>
					<div class="col" id="text-sub-menu-painel-two" onclick="window.location.href='ExitBlue.php';">Listagens</div>
					<div class="col" id="text-sub-menu-painel-three" onclick="window.location.href='';">Minhas anotações</div>
					</div>
					</div>
				</td>
				<td>
					<div class="container">
					<div class="row">
					<div class="col" id="text-sub-menu-painel-four" onclick="window.location.href='ExitBlue.php';">Minha agenda</div>
					<div class="col" id="text-sub-menu-painel-five" onclick="window.location.href='ExitBlue.php';">Encaminhar mensagem</div>
					<div class="col" id="text-exit" onclick="window.location.href='ExitBlue.php';">Sair</div>
					</div>
					</div>
				</td>
				</tr>
				</thead>
				</table>
			</div>
	<!-- Fim container variavel sessão -->
	
	<!-- Inicio container painel financeiro -->
	<div class="row" id="blue-painel-restrito">
		<div class="container" id="blue-text-separador">Módulo Secretaria</div>
		<div class="col" id="blue-box-restrito" onclick="window.location.href='CadastroAcadêmico.php';">Relátorio de departamentos<br>
			<img src="./imagens/cadastro.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito" onclick="window.location.href='CeSGestor.php';">Relátorio de turmas<br>
			<img src="./imagens/classe-energetica.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito" onclick="window.location.href='CadastroColaborador.php';">Relátorio de acadêmicos<br>
			<img src="./imagens/aluna.png" width="25pt" height="25pt"/>
		</div>
	</div>
	<!-- Fim container painel financeiro -->
	

	<!-- Inicio container painel financeiro -->
	<div class="row" id="blue-painel-restrito">
		
		<div class="col" id="blue-box-restrito" onclick="window.location.href='DadosColaborador.php';">Relátorio de colaboradores<br>
			<img src="./imagens/perda-de-dinheiro.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito">Declaração escolar<br>
			<img src="./imagens/cronograma.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito">Declaração de passe estudantil<br>
			<img src="./imagens/evento.png" width="25pt" height="25pt"/>
		</div>
	</div>
	<!-- Fim container painel financeiro -->
	
	<!-- Inicio container painel financeiro -->
	<div class="row" id="blue-painel-restrito">
		
		<div class="col" id="blue-box-restrito" onclick="window.location.href='DadosColaborador.php';">Historico escolar<br>
			<img src="./imagens/calendario.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito">Diário de classe<br>
			<img src="./imagens/contrato.png" width="25pt" height="25pt"/>
		</div>
	
		<div class="col" id="blue-box-restrito">Aproveitamento de turmas<br>
			<img src="./imagens/excel.png" width="30pt" height="30pt"/>
		</div>
	</div>
	<!-- Fim container painel financeiro -->
</div>	
	
<br><br>
<br><br>
<br><br>
	<!-- Inicio container rodapé -->
	<div class="container-fluid pt-3" id="Blue-logo-bottom">
		<div class="row">
				
			<div class="col" id="Blue-link-bottom">
			Secretaria<br>
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
</html>