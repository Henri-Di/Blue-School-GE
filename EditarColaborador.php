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
	<div class="container" id="blue-text-separador">Editar Colaborador</div>
	<br>
	<?php 
	include('ConnectionBlue.php'); 
	$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
	$consulta = "SELECT * FROM Colaborador WHERE id='$id'";
	$con = mysqli_query($conn,$consulta) or die (mysqli_error);
	?> 
	<div class="container" id="blue-table-cdst">
		<?php while($dado = $con->fetch_array()) { ?> 
		<form method="POST" action="UpdateColaborador.php" novalidate>
		<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Matricula</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="id" value="<?php echo $dado['ID']; ?>" readonly="true" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Nome Completo</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="nome" value="<?php echo $dado['NOME']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Genêro</div>
					<div class="form-group">
					<br>
					<select name="genero" id="blue-select">
					<option value="<?php echo $dado['GENERO'];?>"><?php echo $dado['GENERO'];?></option>
					<?php if($dado['GENERO'] == 'Feminino'){ ?>
					<option value="Masculino">Masculino</option>
					<option value="Transgênero">Transgênero</option>
					<option value="Não-binário">Não-binario</option>
					<option value="Neutro">Neutro</option>
					<?php }else if($dado['GENERO'] == 'Masculino'){ ?>
					<option value="Feminino">Feminino</option>
					<option value="Transgênero">Transgênero</option>
					<option value="Não-binário">Não-binario</option>
					<option value="Neutro">Neutro</option>
					<?php }else if($dado['GENERO'] == 'Transgênero'){?>
					<option value="Feminino">Feminino</option>
					<option value="Masculino">Masculino</option>
					<option value="Não-binário">Não-binario</option>
					<option value="Neutro">Neutro</option>
					<?php }else if($dado['GENERO'] == 'Não-binario'){?>
					<option value="Feminino">Feminino</option>
					<option value="Masculino">Masculino</option>
					<option value="Transgênero">Transgênero</option>
					<option value="Neutro">Neutro</option>
					<?php }else if($dado['GENERO'] == 'Neutro'){?>
					<option value="Feminino">Feminino</option>
					<option value="Masculino">Masculino</option>
					<option value="Não-binário">Transgênero</option>
					<option value="Neutro">Não-binario</option>
					<?php }?>
					</select>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
							<div id="blue-title-table-cdst">Data de nascimento</div>
					<div class="form-group">
					<br>
					<input type="date" id="blue-input-cdst" name="nascimento" value="<?php echo $dado['NASCIMENTO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">CPF</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cpf" value="<?php echo $dado['CPF']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">RG</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="rg" value="<?php echo $dado['RG']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Estado</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="estado" value="<?php echo $dado['ESTADO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Cidade</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cidade" value="<?php echo $dado['CIDADE']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Endereço residencial</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="endereco" value="<?php echo $dado['ENDERECO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">CEP residencial</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="cep" value="<?php echo $dado['CEP']; ?>" autocomplete="off" required />
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
					
					<td>
					<div id="blue-title-table-cdst">Cargo</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cargo" value="<?php echo $dado['CARGO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Carga horária</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="jornada" value="<?php echo $dado['JORNADA']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Salario</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="salario" value="<?php echo $dado['SALARIO']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Email institucional</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="email" value="<?php echo $dado['EMAIL']; ?>" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Contato</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="telefone" value="<?php echo $dado['TELEFONE']; ?>" autocomplete="off" required />
					</div>	
					</td>
					
					<td></td>
					
					<td></td>
				</tr>
			</thead>
		</table>
		<button type="submit" id="blue-btn-cdst">Editar colaborador</button>
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