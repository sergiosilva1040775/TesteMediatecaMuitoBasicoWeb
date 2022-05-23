<html>
	<head>
		 <meta charset="utf-8">
		 <meta http-equiv="refresh" content="20;url=index.html" />
		 <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
 </head>
 <body>
 <?php //liga-se ao servidor con user e pass
include 'includes/liga_bd.php';
include 'includes/valida_foto.php';

if($uploadOk==0){
	echo "<h1>Erro na imagem - escolha um ficheiro válido</hl>"; 
}else{
	if($uploadOk==1){
		move_uploaded_file($_FILES["ficheiro"]["tmp_name"],$target_file);
// intrucao sql pars adicionar
$tmp= password_hash($_POST['pass'],PASSWORD_DEFAULT);
//echo $bd;
 	$sql ="INSERT INTO t_socio (nick, senha, nome, email, fotografia) VALUES ('$_POST[nick]', '$tmp','$_POST[nome]','$_POST[email]','".$foto."');"; 
	 

	 echo $sql;
 	if (mysqli_query($ligacao, $sql))
	 echo "<h1>Sócio inserido com sucesso</hl>"; 
	}
}	
mysqli_close($ligacao); ?>	
		<h2>"Aguarde que vai ser redirecionado"</h2>
 </body> 
</html> 
