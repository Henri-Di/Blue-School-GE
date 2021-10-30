 
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
				<title>Blue School - Editar Colaborador</title>		
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
	<div class="container" id="blue-text-separador">Editar Projeto</div>
	<br>
	<?php 
	include('ConnectionBlue.php'); 
	$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
	$consulta = "SELECT * FROM Projeto WHERE id='$id'";
	$con = mysqli_query($conn,$consulta) or die (mysqli_error);
	?> 
	<div class="container" id="blue-table-cdst">
		<?php while($dado = $con->fetch_array()) { ?> 
		<form method="POST" action="UpdateProjetoGestor.php" novalidate>
			<table class="table table-bordered" id="blue-table-input">
			<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Nome</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="nome" value="<?php echo $dado['NOME']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Descrição</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="descricao" value="<?php echo $dado['DESCRICAO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Departamento</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="departamento" value="<?php echo $dado['DEPARTAMENTO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
				</tr>				
		</table>

			<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Unidade</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="unidade" value="<?php echo $dado['UNIDADE']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Solicitante</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="solicitante" value="<?php echo $dado['SOLICITANTE']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Data</div>
					<div class="form-group">
					<br>
					<input type="date" id="blue-input-cdst" name="data" value="<?php echo $dado['DIA']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					</td>
					</tr>				
				</table>
				
				
				<table>
				<thead>
					<tr>
					<td>
					<div id="blue-title-table-cdst">Justificativas</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<textarea id="blue-textarea-one" name="justificativas" required maxlength="3000" value=""><?php echo $dado['JUSTIFICATIVAS'] ;?></textarea>
					</div>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Objetivo</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<textarea id="blue-textarea-one" name="objetivo" required maxlength="3000" value=""><?php echo $dado['OBJETIVO'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Beneficios</div><br>
					<p id="blue-title-canvas">Porque ?</p>
					<textarea id="blue-textarea-one" name="beneficios" required maxlength="3000" value=""><?php echo $dado['BENEFICIOS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Restrições</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<textarea id="blue-textarea-two" name="restricoes" required maxlength="3000" value="<?php echo $dado['RESTRICOES'] ;?>"><?php echo $dado['RESTRICOES'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Requisitos</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<textarea id="blue-textarea-two" name="requisitos" required maxlength="3000" value=""><?php echo $dado['REQUISITOS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Entregáveis</div><br>
					<p id="blue-title-canvas">Oque ?</p>
					<textarea id="blue-textarea-two" name="entregaveis" required maxlength="3000" value=""><?php echo $dado['ENTREGAVEIS'] ;?></textarea>
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
					<textarea id="blue-textarea-two" name="riscos" required maxlength="3000" value=""<?php echo $dado['RISCOS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Responsáveis</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<textarea id="blue-textarea-three" name="responsaveis" required maxlength="3000" value=""><?php echo $dado['RESPONSAVEIS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Equipe</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<textarea id="blue-textarea-three" name="equipe" required maxlength="3000" value=""><?php echo $dado['EQUIPE'] ;?></textarea> 
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Parcerias</div><br>
					<p id="blue-title-canvas">Quem ?</p>
					<textarea id="blue-textarea-three" name="parcerias" required maxlength="3000" value=""><?php echo $dado['PARCERIAS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Prazos</div><br>
					<p id="blue-title-canvas">Quando ?</p>
					<textarea id="blue-textarea-four" name="prazos" required maxlength="3000" value=""><?php echo $dado['PRAZOS'] ;?></textarea>
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Custos</div><br>
					<p id="blue-title-canvas">Quanto ?</p>
					<textarea id="blue-textarea-four" name="custos" required maxlength="3000" value=""><?php echo $dado['CUSTOS'] ;?></textarea>
					</td>	
				</tr>	
		</thead>
		</table>
		<br>
		<button type="submit" id="blue-btn-cdst">Editar projeto</button>
		</form>
		<?php } ?>
	</div>
	</div>
	<br><br>
	<br><br>
	<br><br>
	<!-- Container rodapé Blue School -->
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
	
		</div>
	
</body>
</div>	