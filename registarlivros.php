<html>
    <head>
        <meta charset="utf-8">
        <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Palavras Levam nas o vento - Merdiateca</h1>
        <h1>Inserção de livros</h1>
        <!-- o metodo post envia os dados de uma página para a outra de forma escondida
            o metodo get envia os dados para a página seguinte pela barra de endereço-->
        <form action="registarlivros2.php" method="post" enctype="multipart/form-data">
            <p>ISBN:<input type="text" name="isbn" size="100" maxlength="100" required></p>
            <p>Título:<input type="text" name="titulo" size="100" maxlength="100" required></p>
            <p>Descrição:<input type="text" name="descricao" size="255" maxlength="255" required></p>       
            Autor: <select name="autor">
                <?php
				include 'includes/liga_bd.php';
                    $sql="SELECT * FROM t_autor";		
                    $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
                    while ($linha = mysqli_fetch_assoc($resultado))
                    {
                       echo"<option value='".$linha['id']."'>".$linha['nome']."</option>";
                       }
             ?>
             </select>

            <p>Número de Páginas:<input type="text" name="npag" size="50" maxlength="50" required></p>   
            <p>Preço semanal:<input type="text" name="precosemana" size="50" maxlength="50" required></p>       
            <p>Capa:<input type="file" name="ficheiro"></p><br><br>
            <input type="submit" value="Inserir">
            <input type="reset" value="limpar">
            <br><br>
            <a href="index.html" target="_self">Voltar ao menu</a>
        </form>

    </body>
</html>