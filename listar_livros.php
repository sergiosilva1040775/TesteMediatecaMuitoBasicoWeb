<html>
	<head>
		<meta charset="utf-8">
		<title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
 </head>
 <body>
 <title>Palavras Levam nas o vento - Merdiateca</title>
<h1>Listar livros</h1>
<?php

include "includes/liga_bd.php";
include "includes/valida.php";
$sql ="SELECT * FROM t_livro";
$resultado=mysqli_query($ligacao, $sql) or die (mysqli_error(Sligacao)); 
$numreg = 0;

while($linha = mysqli_fetch_assoc($resultado))
{
echo "<b>Título: " . $linha['titulo']."<br>"; 
echo "<b>Descrição:</b> " . $linha['descricao']."<br>"; 

$sql_autor ="SELECT nome FROM t_autor WHERE id=".$linha['autor'];
// a variavel vai buscar o nick e email do utilizador
$res_autor =mysqli_query($ligacao, $sql_autor) or die(mysqli_error($ligacao));
$linha_autor = mysqli_fetch_assoc($res_autor);

echo "<b>Autor: " . $linha['autor'].""; 
echo "<b> Nome: " . $linha_autor['nome']."<br>"; 
echo "<b>Número de Páginas:</b> " . $linha['n_pag']."<br>"; 
echo "<b>Preço por semana: " . $linha['preco_semana']."<br>"; 
//echo "<b>Capa: " . $linha['capa']."<br>"; 
echo "Capa:<br><img src='capas/". $linha['capa']."'height='100'><br/>";

?>
<form action="reservarlivro2.php"  method="post">
        <input type="hidden" size="20" name="id" value="<?php echo $_SESSION['id'];?>">
        <input type="hidden" size="20" name="isbn" value="<?php echo $linha['isbn'];?>">
        <p>Data de final do aluguer:<input type="date" name="data_final" required value=""> </p>
        <input type="submit" value="Reverva-me"> 
</form>
<?php


echo "<hr>";
$numreg = $numreg + 1;
}
mysqli_close($ligacao);
echo "Numero de livros disponiveis: " . $numreg;


?>
 <br><br> 
  <input type="button" value="Voltar a area pessoal" onclick="javascript:window.history.go(-1)">
</body>
</html> 