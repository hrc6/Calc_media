<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Calculo da Média - Faculdade AGES</title>
</head>
<body id="body1">
<div id="div1">
    <?php
	   $p50 = isset($_GET["prova50"])?$_GET["prova50"]:0;
	   $p100 = isset($_GET["prova100"])?$_GET["prova100"]:0;
	   $ficha = isset($_GET["fichamento"])?$_GET["fichamento"]:0;
	   $port = isset($_GET["portfolio"])?$_GET["portfolio"]:0;
	   $pu = isset($_GET["punica"])?$_GET["punica"]:-2;
	   
	   
	   if (($ficha == 0) or ($port == 0)){
		   $pu = ($pu / 2);
		   }
		   
	   if (($ficha == 0) and ($port == 0)){
		   $pu = 0;
		   }
	  /*caculo quando 50 for maior*/
	  if ($p50 > $p100) {
		  $resultado = ($p50 + $p100 / 2 * 0.8) + $ficha + $port + $pu;  
	  }
	  /*caculo quando 50 for menor ou igual*/
	  elseif ($p50 < $p100 or $p50 == $p100 ){
		  $resultado = ($p100 * 0.8) + $ficha + $port + $pu; 
		   
	  }
	  echo "<p>Sua média final foi: $resultado</p>";
	   
	  	if ($resultado >= 7) {
			echo "<p>Aprovado</p></br>";
		}
		else {
			echo "<p>Prova Final</p></br>";
			}
		
	  
    ?>
    
    <a href="javascript:history.go(-1)" class="botao" style="text-decoration:none; margin-left:20px; font-size:25px;">Voltar</a>
</div>
</body>
</html>
 