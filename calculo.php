<?php 

	if(!empty($_POST['nome']) && !empty($_POST['altura']) && !empty($_POST['peso'])) {

		$altura = str_replace(',', '.', $_POST['altura']);
		$peso = str_replace(',', '.', $_POST['peso']);
		$nome = $_POST['nome'];

		$imc = $peso / ($altura * $altura);

		 if($imc < 18.5) {
		 	$indice = 'Magreza';
		 } else if($imc >= 18.5 && $imc < 24.9) {
		 	$indice = 'Normal';
		 } else if($imc >= 25 && $imc < 29.9) {
		 	$indice = 'Sobrepeso';
		 } else if($imc >=30 && $imc < 39.9) {
		 	$indice = 'Obesidade 1';
		 } else if($imc >= 40) {
		 	$indice = 'Obesidade grave';
		 }

	} else {
		header('Location: index.php?valor=erro');
	}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Calculo imc</title>
	<meta charset="utf-8">

	   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style type="text/css">
    		body{
    			margin: 0;
    			padding: 0;
    			background-color: #FAFAFA;
    		}

			.box-index {
				background-color: #0101DF;
				border: 1px solid #4B088A;
				border-radius: 10px;
				margin-top: 100px;
				width: 700px;
				padding: 20px;
			}

			.botao{
				color: white
			}	

    </style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col d-flex justify-content-center">

				<div class="box-index">
					<h4 class="text-white">Nome: <?= ucfirst($nome) ?></h4>
					<h4 class="text-white">Altura(m): <?= str_replace('.', ',', $altura) ?></h4>
					<h4 class="text-white">Peso(kg): <?= str_replace('.', ',', $peso) ?></h4>
					<h4 class="text-white">Imc: <?= str_replace('.', ',', number_format($imc,2)) ?> Situação -  <?= $indice ?> </h4><br>
					<hr>
					<a href="index.php">
						<button class="btn btn-primary">Retornar</button>
					</a>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
