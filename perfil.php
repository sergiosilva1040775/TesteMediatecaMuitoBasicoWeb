<html> 
<head> 
<meta charset="utf-8">
<title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
</head> 
<body> 
<h1>Palavras Levam nas o vento - Merdiateca</h1>
<h1>Alterar dados pessoais</h1>
	<?php 
include "includes/liga_bd.php";
include "includes/valida.php";
	    //trio a instruck sql para selecionar todos os registos 
		$sql ="SELECT * FROM t_socio WHERE id=".$_SESSION['id']; 
		// a variavel resultado vai guardar todos os dados de todos os clientes
		 $resultado= mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
		  //enquanto conseguir ler dados do array resultado imprime 
		  $linha = mysqli_fetch_assoc($resultado); 
		  ?>
<!-- o metodo post envia os dados de uma pagina para a outra de forma escondida o metodo get envia os dados para a pagina seguinte pela barra de endereco--> 
<form action=" perfil2.php" method="post" enctype="multipart/form-data">
			<p><input type="hidden" name="id" size="100" readonly value="<?php echo $linha['id'];?>"></p> 
			<p>Nick:<input type="text" name="nick" size="20" maxlength="20" readonly required value="<?php echo $linha['nick'];?>"> </p>
            <p>Nome:<input type="text" name="nome" size="100" maxlength="100" required value="<?php echo $linha['nome'];?>"> </p>
            <p>Email:<input type="text" name="email" size="50" maxlength="50" required value="<?php echo $linha['email'];?>"> </p>
           <p>Senha:<input type="password" name="senha" size="20" maxlength="20"required > </p>
			 <br>Foto:<br><img src="pics/<?php echo $linha['fotografia'];?>" height="100"><br/>
<input name ="nome_foto" value ="<?php echo $linha['fotografia'];?>">
<br> <br> Nova Foto:<input type="file" name ="ficheiro"><br> <br>
<input type="submit" value ="Alterar"> 
	 <br><br> 
	 <a href="index.html" target="_self">Voltar ao menu</a> 
	</form> 
<?php mysqli_close($ligacao); 
?>
</body> 
</html>
