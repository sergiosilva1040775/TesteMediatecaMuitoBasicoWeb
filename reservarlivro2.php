<html>
	 <head> 
		 <meta charset="utf-8"> 
     <title>Palavras Levam nas o vento - Merdiateca</title>
        <link href = "recursos/style/style.css" rel ="stylesheet" type="text/css">

        <meta http-equiv="refresh" content ="500;url=login2.php">
</head> 
<body> 
<title>Palavras Levam nas o vento - Merdiateca</title>
<h1>Reserva de livro</h1>
	<?php 
            include 'includes/valida.php';
                //estabelece a conexão à base de dados
                include 'includes/liga_bd.php';
                $today = date("Y-m-d");  

                $secondDate =  new DateTime( $today) ;
                $firstDate = new DateTime($_POST['data_final']);
                $intvl = $firstDate->diff($secondDate);
                $numerodias = $intvl->days;
               // echo  $numerodias. " days ";


                $sql_preco_semana ="SELECT preco_semana FROM t_livro WHERE isbn='".$_POST['isbn']."';";
            // echo  $sql_preco_semana;                            
                $res_preco_semana =mysqli_query($ligacao, $sql_preco_semana) or die(mysqli_error($ligacao));
                $linha_preco_semana = mysqli_fetch_assoc($res_preco_semana);

              //  echo  $linha_preco_semana['preco_semana'];
             // echo $linha_preco_semana['preco_semana'];
              $resStr = str_replace('.', ',', $linha_preco_semana['preco_semana']);
                $preco_semana  =  (float)$resStr ;
                $valorApagar = round($numerodias * ($preco_semana /7), 2);                
              //  echo  round($valorApagar, 2);

               $sql ="INSERT INTO t_aluguer (id_socio, isbn, data_incio, data_fim, valor) VALUES 
               ('$_POST[id]','$_POST[isbn]','$today','$_POST[data_final]', '$valorApagar');";  
               //   echo $sql;
 	 if (mysqli_query($ligacao, $sql)){
	    echo "<h1>Livro reservado com sucesso</hl>";    
 }        
mysqli_close($ligacao); 
 ?>
  <br/><h4>Aguarde que vai ser redirecionado </h4>
  <a href="index.html" target="_self">Volta ao Menu</a> 
  </body> 
  </html> 