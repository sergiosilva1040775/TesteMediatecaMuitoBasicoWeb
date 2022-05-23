<html>
    <head>
        <meta charset="utf-8">
        <title>Palavras Levam nas o vento - Merdiateca</title>
<link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">
    </head>
    <body>
    <h1>Area de gestao pessoal</h1>

           <?php
               include 'includes/valida.php';
               include 'includes/liga_bd.php';
              echo "<h2>Bem vindo ".$_SESSION['nick']."</h2>";
           ?>  
            <input type="button" value="Editar Perfil" onclick="window.open('perfil.php','_self')"><br/><br/>

     <input type="button" value="Listar autores/Nacionalidades" onclick="window.open('listar_autor.php','_self')"><br/><br/>
            <input type="button" value="Listar livros" onclick="window.open('listar_livros.php','_self')"><br/><br/>



            <input type="button" value="Reservar Livro" onclick="window.open('reservarlivro.php','_self')"><br/><br/>

            <input type="button" value="Listar minhas reservas" onclick="window.open('listarreservasuser.php','_self')"><br/><br/>

            <input type="button" value="Logout" onclick="window.open('logout.php','_self')">  <br/><br/>

            <?php
                if(strcmp($_SESSION['nick'],"admin")==0){
            ?>
            <br><br><h2>Área Administração</h2> 
       
            <input type="button" value="Inserir autores" onclick="window.open('registarautor.html','_self')"><br/><br/>

<input type="button" value="Inserir livros" onclick="window.open('registarlivros.php','_self')"><br/><br/>

<input type="button" value="Listar todas as Reservas" onclick="window.open('listarreservas.php','_self')"><br/><br/>

            <?php } ?>      
    </body>
</html>


