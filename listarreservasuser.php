<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
        </head>
        <body>
        <h1>Palavras Levam nas o vento - Merdiateca</h1>
                <?php
                include 'includes/valida.php';
                //estabelece a conexão à base de dados
                include 'includes/liga_bd.php';
       
        
                ?>
       
       <h2>Listar reservas</h2>
                <table>
                        <tr>
                           
                                <td>Título Livro</td>
                                <td>data_inicio</td>
                                <td>data_fim</td>                                
                                <td>valor</td>
                                
                        </tr>
                        <?php
                   
                                $sql ="SELECT * FROM t_aluguer  WHERE id_socio=".$_SESSION['id']; ;
                       
                        //a variavel resultado vai guardar todos os dados de todos os clientes
                        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
                        //a vriavel para contar os registos
                        //enquanto conseguir ler dados do array resultado imprime
                        while($linha = mysqli_fetch_assoc($resultado)){
                            $sql_titulo ="SELECT titulo FROM t_livro WHERE isbn='".$linha['isbn']."'";
                          //  echo  $sql_titulo;                            
                            $res_titulo =mysqli_query($ligacao, $sql_titulo) or die(mysqli_error($ligacao));
                            $linha_titulo = mysqli_fetch_assoc($res_titulo);

                            $sql_socio ="SELECT nome FROM t_socio WHERE id=".$linha['id_socio'];
                             //     echo  $sql_socio;                            
                            $res_socio =mysqli_query($ligacao, $sql_socio) or die(mysqli_error($ligacao));
                            $linha_socio = mysqli_fetch_assoc($res_socio);


                                echo "<tr><td>". $linha_titulo['titulo']."</td><td>".$linha['data_incio']."</td>";
                                echo "<td>".$linha['data_fim']."</td><td>".$linha['valor']."</td>";                         
                    
                        }
                        ?>
                        </table>
                </body>
                </html>
