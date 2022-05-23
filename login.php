
<html>
	<head>
		<meta charset="utf-8">
		<title>Palavras Levam nas o vento - Merdiateca</title>
<link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
 </head>
 <body>
<h1>Validação de socios</h1>
<?php

include 'includes/liga_bd.php';

if(empty($_POST['nick'])  ||  empty($_POST['pass'])) {
	header('Location:erro.html');
}else{

if(session_status() !== PHP_SESSION_ACTIVE){

	$sql ="SELECT * FROM  t_socio WHERE nick='$_POST[nick]'";
	echo $sql;
	$resultado = mysqli_query($ligacao, $sql);	
	$linha=mysqli_fetch_assoc($resultado);
	if($linha==NULL)
		header('Location: erro.html');	
	if(password_verify($_POST['pass'], $linha['senha'])){
	//	if($linha["apagado"]==1){
	//		echo "<h1>A sua conta encontra-se loqueada pelo administrador</h1>";			?>
	//		<include type="button" value="voltar ao menu" onclick="window.open('index.html','_self')">
	//		<?php
	//				}
	//	else{
			echo "<h1>Login com sucesso</h1>";
			echo "<h1>Bem vindo ".$linha['nome']."</h1>";
			session_start();    
			$_SESSION['id']=$linha['id'];
			$_SESSION['nick']=$linha['nick'];
			header('Location: login2.php');
	//	}	
	}
	else{
			header('Location: erro.html');
	}
}
mysqli_close($ligacao); echo "<br/>";
}
?>
</body>
</html>