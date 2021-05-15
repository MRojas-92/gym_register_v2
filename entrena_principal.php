<!DOCTYPE html>
<html>
<head>
	<title>Entrenar</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_entrenar.css?v=<?php echo time(); ?>">
</head>
<body>
	<header class="titulo">
        <a href="../principal/index.php">
            <img src="img/logo.jfif" alt="logo" width="100px" height="100">
        </a>
        <div>
            <h1>Gym Register</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="alinear">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="7" r="4" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
            <p>Usuario</p>
        </div>
    </header>


	<?php
        session_start();
        if(isset($_SESSION["usuario"])){
          include_once("entrena_contenido.php");
        }
        else
            header("Location: ../Login/index.php");
	?>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <h4 class="copyright">Equipo 9 - Derechos Reservados 2021 &copy;</h4>
        </div>
    </footer>    

</body>
</html>