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
             $autor=$_POST['id_autor'];
        
                ?>
       
                <h2>Livros da nossa base de dados</h2>
                <table>
                        <tr>
                                <td>ISBN</td>
                                <td>Título</td>
                                <td>Descrição</td>
                                <td>Número de páginas</td>
                                <td>Preço semanal</td>
                                <td>Capa</td>
                                <td>Aluga-me</td>
                        </tr>
                        <?php
                   
                                $sql ="SELECT * FROM t_livro WHERE  autor=".$autor;
                       
                        //a variavel resultado vai guardar todos os dados de todos os clientes
                        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
                        //a vriavel para contar os registos
                        //enquanto conseguir ler dados do array resultado imprime
                        while($linha = mysqli_fetch_assoc($resultado)){
                                echo "<tr><td>".$linha['isbn']."</td><td>".$linha['titulo']."</td><td>".$linha['descricao']."</td>";
                                echo "<td>".$linha['n_pag']."</td><td>".$linha['preco_semana']."</td>";
                                echo "<td><img src='capas/".$linha['capa']."' width='100'></td><td>";
                                ?>
                           <form action="reservarlivro2.php"  method="post">
        <input type="hidden" size="20" name="id" value="<?php echo $_SESSION['id'];?>">
        <input type="hidden" size="20" name="isbn" value="<?php echo $linha['isbn'];?>">
        <p>Data de final do aluguer:<input type="date" name="data_final" required value=""> </p>
        <input type="submit" value="Reverva-me"> 
</form>
                        </td></tr>
                        <?php
                        }
                        ?>
                        </table>
                </body>
                </html>
