<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de Letras</title>
</head>
<body>
    <h1>Sopa de Letrinhas</h1>
<form action=""method="get">
<input type="text" name="nome" id="nome">
<input type="submit" value="Gerar">
</form>
<?php
$nome = $_GET["nome"];
$meio = substr($nome,1,-1);
$inicio = substr($nome,0,1);
$fim = substr($nome,-1);
echo $fim . $meio . $inicio;
?>
</body>
</html>