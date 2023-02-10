<?php

$perguntas = [
	"populares" => [""],
	"facil" => [""],
	"criancas" => [""],
	"loucos" => [""],
	"dificeis" => [""],
	"festa" => [""],
	"picantes" => [""],
	"misto" => [""]
];

?>

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$_SERVER['REQUEST_URI']?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content">
		<div class="language">
			<a href="">Português</a>
			<a href="">Inglês</a>
			<a href="">Espanhol</a>
		</div>

		<p><?=$perguntas[$_GET['tipo']][rand(0, count($perguntas["populares"])-1)]?></p>

		<a href="<?=$_SERVER['REQUEST_URI']?>">Próxima Pergunta ></a>
	</div>

	<div class="qrcode">
		<h3>Eu nunca</h3>
		<h2>Obtenha o aplicativo agora</h2>
		<img src="img/qrcode/qrcode.png" alt="">
		<p>Para iPhone e Android</p>
	</div>
</body>
</html>