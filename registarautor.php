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


//echo $bd;
 	$sql ="INSERT INTO t_autor (nome, nacionalidade) VALUES ('$_POST[nome]','$_POST[nacionalidade]');"; 
	 

	 echo $sql;
 	if (mysqli_query($ligacao, $sql))
	 echo "<h1>Autor inserido com sucesso</hl>"; 


mysqli_close($ligacao); ?>	
		<h2>"Aguarde que vai ser redirecionado"</h2>
 </body> 
</html> 
