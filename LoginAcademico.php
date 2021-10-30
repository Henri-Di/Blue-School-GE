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
<!DOCTYPE html>
<!-- Inicio documento HTML/CSS/PHP -->
<html lang="PT-BR">
<?php session_start();?>
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
				<title>Blue School - Login Acadêmico</title>		
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
	
	<div class="container" id="blue-text-separador">Acesso Acadêmico</div>
	<br>
	<div class="container" id="blue-table-cdst">
		
		<form class="needs-validation" method="POST" action="AcessaGestor.php" novalidate />
		<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Email</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="email" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Senha</div>
					<div class="form-group">
					<br>
					<input type="password" id="blue-input-cdst" name="senha" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				
				</tr>
			</thead>
		</table>
		<button type="submit" id="blue-btn-cdst">Acessar</button>
		</form>
	</div>
	<br>
	<!-- Inicio código PHP -->
		<p  id="blue-alert-login">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		
		<p id="blue-alert-login">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
		<!-- Fim código PHP -->
		<br>
	</div>
	<!-- Fim container login -->
	<!-- Container rodapé Blue School -->
	<div class="container-fluid pt-3" id="Blue-logo-bottom">		
		
		<div class="row">
				
			<div class="col" id="Blue-link-bottom">
			Bluestore<br>
			<img src="./imagens/BlueIcon.png"  width="23pt" height="23pt"/>	
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Serviços<br>
			<img src="./imagens/ferramentas-de-reparacao.png"  width="23pt" height="23pt"/>
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Parcerias<br>
			<img src="./imagens/parceria.png"  width="23pt" height="23pt"/>		
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Contato<br>
			<img src="./imagens/o-email.png"  width="23pt" height="23pt"/>
			</div>
			
		</div>
		<br>
	</div>
	<!-- Fim container rodapé Blue School -->
	</div>
		
</body>
</div>	