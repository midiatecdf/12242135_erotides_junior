<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Loja de Doces</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
<header id="Header">
	
	<table width="100%" border="0">
  <tbody>
    <tr>
      <td><img src="images/logo-1.png" width="198" height="86" alt=""/></td>
      <td><center><a href="index.php">Home</a></center></td>
      <td><center><a href="index.php?pagina=pages/quem-somos.php">Quem Somos</a></center></td>
      <td><center><a href="index.php?pagina=pages/contatos.php">Contatos</a></center></td>
      
    </tr>
  </tbody>
</table>

	
	</header>
	
<main id="Main">
	
	<?php
    if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
        $pagina = $_GET["pagina"];
        include ($pagina);
    } else {
         include ("pages/produtos.php");
         //echo "Principal";
    }
    ?>
	</main>
	
<footer id="Footer">
	<table width="100%" border="0">
  <tbody>
    <tr>
      <td><center>RA: 1224213-5</center></td>
      <td><center>Erotides Caetano Júnior</center></td>
      <td><center>Superior de Tecnologia em Sistemas de Internet</center></td>
    </tr>
  </tbody>
</table>

	</footer>
</body>
</html>