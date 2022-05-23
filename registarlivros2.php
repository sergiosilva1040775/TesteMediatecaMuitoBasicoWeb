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
include 'includes/valida_fotoa.php';

if($uploadOk==0){
	echo "<h1>Erro na imagem - escolha um ficheiro válido</hl>"; 
}else{
	if($uploadOk==1){
		move_uploaded_file($_FILES["ficheiro"]["tmp_name"],$target_file);


//echo $bd;
 	$sql ="INSERT INTO t_livro (isbn, titulo, descricao, autor, n_pag, preco_semana, capa)	 VALUES ('$_POST[isbn]', '$_POST[titulo]', '$_POST[descricao]', '$_POST[autor]', '$_POST[npag]','$_POST[precosemana]','".$foto."');"; 
	 

	 echo $sql;
 	if (mysqli_query($ligacao, $sql))
	 echo "<h1>livro inserido com sucesso</hl>"; 
	}
}	
mysqli_close($ligacao); ?>	
		<h2>"Aguarde que vai ser redirecionado"</h2>
 </body> 
</html> 
