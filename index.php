<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
		<center><article>
			<form name="form_pesquisa" id="form_pesquisa" method="post" action="">
				<div id="login-box">
					<H2>Login</H2>
					Entre com seus dados corretamente para acessar o sistema.
					<br/>
					<br/>
					<div id="login-box-name">Email:</div>
					<div id="login-box-field">
						<input name="email" class="form-login" title="Username" value="" size="30" />
					</div>
					<div id="login-box-name">Senha:</div>
					<div id="login-box-field">
						<input name="pass" type="password" class="form-login" title="Password" value="" size="30"/>
					</div>
					<br/>

					<input type="submit" value="" class="bt-enviar"/>
					<input type="hidden" name="acao" value="logar"/>
				</div>
			</form>
		</article>
</center>
</body>
</html>
<?php
$action = isset($_POST['acao']) ? trim($_POST['acao']) : '';
	if(isset($action) && $action != ""){ 
		
		switch($action){
			case 'logar':
				//requerimos nossa classe de autentica��o passando os valores dos inputs como par�metros
				require_once('class/Autentica.class.php');
				//instancio a classse para podermos usar o m�todo nela contida
				$Autentica = new Autentica();
				//setamos 
				$Autentica->email	= $_POST['email'];
				$Autentica->pass	= $_POST['pass'];
				//chamamos nosso m�todo						
				if($Autentica->Validar_Usuario()){
				   echo  "<script type='text/javascript'>
							location.href='logado.php'
						</script>";
				  }else{
				   echo  "<script type='text/javascript'>
							alert('ATEN\u00c7\u00c4O, Login ou Senha inv\u00e1lidos...');location.href='index.php'
						</script>";
				  }
			break;
		}	
	}
?>