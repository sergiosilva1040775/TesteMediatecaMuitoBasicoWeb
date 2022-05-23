<html>
	 <head> 
		 <meta charset="utf-8"> 
     <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">

        <meta http-equiv="refresh" content ="5;url=login2.php">
</head> 
<body> 
<title>Palavras Levam nas o vento - Merdiateca</title>
<h1>Alterar dados pessoais</h1>
	<?php 
include "includes/liga_bd.php";
$tmp= password_hash($_POST['senha'],PASSWORD_DEFAULT);
//trio a instrucao sqi para inserir um novo registo
if (empty($_FILES['ficheiro']['name'][0]))
{
   $sql ="UPDATE t_socio SET
  nick='$_POST[nick]',
  nome='$_POST[nome]' , 
  email='$_POST[email]', 
  senha= '".$tmp."'   WHERE id=$_POST[id]"; 
// caso consiga executar a acAo mostra a mensagem de sucesso 
if (mysqli_query($ligacao, $sql)) 
echo "<h3>dados pessoais alterados com sucesso!</h3>";


}else{
  include "includes/valida_foto.php";
if($uploadOk==1){
move_uploaded_file($_FILES["ficheiro"]["tmp_name"],$target_file);
unlink('pics/'.$_POST['nome_foto']);
$sql ="UPDATE t_user SET
nick='$_POST[nick]',
nome='$_POST[nome]' , 
email='$_POST[email]',
senha= '".$tmp."',  foto= '".$foto."'  WHERE id=$_POST[id]"; 
// caso consiga executar a acAo mostra a mensagem de sucesso 
if (mysqli_query($ligacao, $sql)) 
echo "<h3>dados pessoais alterados com sucesso!</h3>";

}
}
mysqli_close($ligacao); echo "<br/>";
 ?>
  <br/><h4>Aguarde que vai ser redirecionado </h4>
  <a href="index.html" target="_self">Volta ao Menu</a> 
  </body> 
  </html> 