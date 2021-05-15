<?php  
	$peso = $_POST['peso'];
	$altura = $_POST['altura']/100;
	$imc = $peso/($altura*$altura);
	$mensaje='normal';
	if($imc<16){
		$mensaje='Delgadez severa';
	}
	else if($imc>=16 && $imc<17){
		$mensaje='Delgadez moderada';
	}
	else if($imc>=17 && $imc<18.5){
		$mensaje='Delgadez leve';
	}
	else if($imc>=25 && $imc<30){
		$mensaje='Sobrepeso';
	}
	else if($imc>=30 && $imc<35){
		$mensaje='Obesidad leve';
	}
	else if($imc>=35 && $imc<40){
		$mensaje='Obesidad media';
	}
	else if($imc>=40){
		$mensaje='Obesidad mórbida';	
	}
	
	//$oMysql = new mysqli("localhost", "root", "", "pw_gymregister"); // "gym" = "pw_gymregister"
	//$Query= "INSERT INTO IMC (id_usuario, altura, peso, edad, imc, fecha) VALUES ('".$_SESSION["datos"][0][1]."','".$_POST["altura"]."','".$_POST["peso"]."','".$_POST["edad"]."','".$imc."','(SELECT CURDATE())')";             
	// INSERT INTO IMC(id_imc, id_usuario, altura, peso, edad, imc, fecha) VALUES (?, ?, ?, ?, ?, ?, ?);
  ?>

<section>
	<div class="section">
		<form action="" method="post">
			<div style="background-color: rgb(241, 194, 50); border: 1px solid black; width: 70%; margin-left: 15%; margin-top: 2.5%;">
				<br>
				<img src="img/resultado.png">
				<h1>Su resultado:</h1>
				<p>Usted tiene un IMC de: <strong><?php echo $imc;?></strong></p>
				<p>Su clasificación es <strong><?php echo $mensaje;?></strong></p>
				<input class="aceptar" type="submit" name="aceptar" value="Aceptar" style="color: white; background-color: rgb(120, 63, 4); width: 125px; height: 35px; box-shadow: 3px 3px black; cursor: pointer;">
				<br><br>
			</div>
		</form>
	</div>
</section>
