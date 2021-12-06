<?php
	session_start();	
	include_once("ConnectionBlue.php");	
	if((isset($_POST['senha']))){
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		
		$result_usuario = "SELECT * FROM  Financeirosenha WHERE senha_financeiro = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado)){
			$_SESSION['usuarioSenhaFinanceiro'] = $resultado['SENHA_FINANCEIRO'];
			if($_SESSION['usuarioSenhaFinanceiro'] == $resultado['SENHA_FINANCEIRO']){
				header("Location:PainelFinanceiro.php");
				}
			}
		}else{	
			$_SESSION['loginErro'] = "Credenciais inválidas!";
			header("Location: LoginColaborador.php");
			}