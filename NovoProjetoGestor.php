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
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
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
				<title>Blue School - Novo Projeto</title>		
	<!-- Container Blue School logo-->
	<div class="container-fluid pt-3" id="Blue-logo">
		<h1 id="Blue-text-logo" onclick="window.location.href='index.php';">Blue School<br>Gestão Escolar 
		<img src="./imagens/BlueIcon.png"  width="30pt" height="30pt" id="Blue-icon-logo"/>
		</h1>		
	</div>
		<!-- Fim container Blue School logo -->			
</head>
<!-- Fim cabeçalho Blue School -->
<body oncontextmenu="return false" onload="myFunction()" style="margin:0;">
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
		<div class="container" id="blue-text-separador">Novo Projeto</div>	
	<br>
	<div class="container" id="blue-table-cdst">
		<form class="needs-validation" method="POST" action="CreateProjetoGestor.php" novalidate>
				<table class="table table-bordered" id="blue-table-input">
				<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Nome</div><br>
					<div class="form-group">
					<input type="text" id="blue-input-cdst"name="nome" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Descrição</div><br>
					<div class="form-group">
					<input type="text" id="blue-input-cdst"name="descricao" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>

					<td>
					<div id="blue-title-table-cdst">Departamento</div><br>
					<div class="form-group">
					<input type="text" id="blue-input-cdst"name="departamento" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					</tr>			
				</thead>
				</table>
		
				<table class="table table-bordered" id="blue-table-input">
				<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Unidade</div><br>
					<div class="form-group">
					<input type="text" id="blue-input-cdst"name="unidade" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Solicitante</div><br>
					<div class="form-group">
					<input type="text" id="blue-input-cdst"name="solicitante" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>

					<td>
					<div id="blue-title-table-cdst">Data atual</div><br>
					<div class="form-group">
					<input type="date" id="blue-input-cdst"name="data" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					</tr>			
				</thead>
				</table>

				<table>
				<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Justificativas</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-one" name="justificativas" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Objetivo</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-one" name="objetivo" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Beneficios</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-one" name="beneficios" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Restrições</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-two" name="restricoes" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Requisitos</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-two" name="requisitos" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Entregáveis</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-two" name="entregaveis" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>	
					</tr>	
				</thead>
				</table>
				<br>
				
				<table>
				<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Riscos</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-two" name="riscos" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Responsáveis</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-three" name="responsaveis" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Equipe</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-three" name="equipe" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Parcerias</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-three" name="parcerias" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Prazos</div><br>
					<p id="blue-title-canvas">Quando ?</p>
					<div class="form-group">
					<textarea id="blue-textarea-four" name="prazo" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Custos</div><br>
					<div class="form-group">
					<p id="blue-title-canvas">Quanto ?</p>
					<textarea id="blue-textarea-four" name="custos" required maxlength="3000"></textarea>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>	
				</tr>	
		</thead>
		</table>
		<br>
		<button type="submit" id="blue-btn-cdst">Cadastrar Projeto</button>
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