<!DOCTYPE html>
<html>
<head>
	<title>Calculo imc</title>
	<meta charset="utf-8">

	   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
    		body{
    			margin: 0;
    			padding: 0;
    			background-color: #FAFAFA;
    		}

			.box-index {
				background-color: #0101DF;
				border: 1px solid #0101DF;
				border-radius: 10px;
				margin-top: 100px;
				width: 700px;
				padding: 20px;
				}

			h2 {
				color: white;
				margin-top: 10px;
				text-align: center;
			}

			p {
				color: white;
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

				<form class="box-index" action="calculo.php" method="post">
					<h2>Calculo de IMC</h2>
					<p class="text-center">(Indice de massa corporal)</p>

					<div class="form-group mt-5">
						<p>Digite seu nome:</p>
						<input class="form-control" type="text" name="nome" placeholder="Ex: José">
					</div>

					<div class="form-group">
						<p>Digite sua altura:</p>
						<input class="form-control" type="text" name="altura" placeholder="Ex: 1,80">
					</div>

					<div class="form-group">
						<p>Digite seu peso:</p>
						<input class="form-control" type="text" name="peso" placeholder="Ex: 80,500">
					</div>

					<div>
						<button class="btn btn-primary btn-block mt-4 botao">CALCULAR IMC</button>
						<?php 
							if(isset($_GET['valor']) == 'erro') { ?>
								<p class="text-danger">Digite os dados</p>
						 <?php } ?>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
