<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	Perfil do Parceiro

<?php

include ("dados.php");

foreach ($dado as $value) {
?>
    <p>
    <a href="index.php?pagina=parceiro.php&id=<?=$value["id"];?>"><?=$value[
	"nome"];?></a>
    </p>
<?php
}
</body>
</html>