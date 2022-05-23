<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
        </head>
        <body>
        <h1>Listar livros por autores</h1>
                <?php
                include 'includes/valida.php';
                //estabelece a conexão à base de dados
                include 'includes/liga_bd.php';	
	
		  ?>
<!-- o metodo post envia os dados de uma pagina para a outra de forma escondida o metodo get envia os dados para a pagina seguinte pela barra de endereco--> 
<form action="reservarlivro2.php" method="post">
			<p><input type="hidden" name="id" size="100" readonly value="<?php echo $_SESSION['id'];?>"></p> 
			Livro: <select name="isbn">
                <?php
				include 'includes/liga_bd.php';
                    $sql="SELECT * FROM t_livro";		
                    $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
                    while ($linha = mysqli_fetch_assoc($resultado))
                    {
                       echo"<option value='".$linha['isbn']."'>".$linha['titulo']."</option>";
                       }
             ?>
             </select>	
             <p>Data de final do aluguer:<input type="date" name="data_final" required value=""> </p>
                         <input type="submit" value="Reverva-me"> 
	 <br><br> 
	 <a href="login2.php" target="_self">Voltar ao menu</a> 
	</form> 
<?php mysqli_close($ligacao); 
?>
</body> 
</html>
