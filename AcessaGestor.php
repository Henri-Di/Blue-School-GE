<?php
	session_start();	
	include_once("ConnectionBlue.php");	
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); 
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		
		$result_usuario = "SELECT * FROM  Gestor WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['ID'];
			$_SESSION['usuarioNome'] = $resultado['NOME'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['NIVEL_DE_ACESSO'];
			$_SESSION['usuarioEmail'] = $resultado['EMAIL'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: PainelGestor.php");
			}
		}else{	
			$_SESSION['loginErro'] = "Credenciais inválidas!";
			header("Location: LoginGestor.php");
		}
		
	}else{
		$_SESSION['loginErro'] = "Credenciais Inválidas!";
		header("Location: LoginGestor.php");
	}
?>