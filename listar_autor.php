<html>
	<head>
		<meta charset="utf-8">
		<title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
 </head>
 <body>
 <title>Palavras Levam nas o vento - Merdiateca</title>
<h1>Listar autores/Nacionalidade</h1>
<?php

include "includes/liga_bd.php";
include "includes/valida.php";
$sql ="SELECT * FROM t_autor";
$resultado=mysqli_query($ligacao, $sql) or die (mysqli_error(Sligacao)); 
$numreg = 0;

while($linha = mysqli_fetch_assoc($resultado))
{
echo "<b>Nome: " . $linha['nome']."<br>"; 
echo "<b>Nacionalidade:</b> " . $linha['nacionalidade']."<br>"; 

?>
<form action="listarlivrosautor.php" method="post">
		<input type="Hidden" size="20" name="id_autor" value="<?php echo $linha['id'];?>">
		<input type="submit" value="Ver livros deste autor">
</form>
<?php


echo "<hr>";
$numreg = $numreg + 1;
}
mysqli_close($ligacao);
echo "Numero de autores  disponiveis: " . $numreg;


?>
 <br><br> 
  <input type="button" value="Voltar area pessoal" onclick="javascript:window.history.go(-1)">
</body>
</html> 