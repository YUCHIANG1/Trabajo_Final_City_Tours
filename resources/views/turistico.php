<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<a href="welcome.blade.php"class="entrar"><center>VOLVER AL INICIO DE SESION</center></a></p>
Click aqui para volver a iniciar sesion :

	<header>
		<nav>
			<a href="https://www.youtube.com/">Inicio</a>
			<a href="https://www.facebook.com/">Sobre mí</a>
			<a href="https://www.facebook.com/HuanucoPlaza/">Destinos</a>
			<a href="https://www.tripadvisor.com.pe/Restaurants-g1391902-Huanuco_Huanuco_Region.html">Gastronomía</a>
		</nav>
	</header>

	<div class="encabezado-img">
		<p>Lugares turisticos Huanuco</p>
		<h1>HUANUCO</h1>
		<p>Recorriendo la ciudad de Huanuco</p>
	</div>

    <div class="right">
                <div class="popular">
                    Popular
                </div>
                <div class="contenedor-fotos">
                    <img src="img/f1.jpg" alt="">
                    <img src="img/f2.jpg" alt="">
                    <img src="img/f3.jpg" alt="">
                    <img src="img/f6.jpg" alt="">
                    <img src="img/f7.jpg" alt="">
                </div>
            </div>
        </div>
        
        <center><img src="img/fondo3.jpg" alt=""></center>
	    
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');
    .right {
            text-align: center; /* Alinea el contenido al centro */
        }
        
        .popular {
            font-weight: bold;
        }
        
        .contenedor-fotos {
            display: flex; /* Utiliza un contenedor flexible */
        }
        
        .contenedor-fotos img {
            width: 300px; /* Establece el ancho deseado para todas las imágenes */
            height: auto; /* Mantiene la proporción original de la imagen */
            margin: 5px; /* Agrega un pequeño margen entre las imágenes */
        }

    .entrar{
    display: inline-block;
    background-color:red;
    color:aliceblue;
    text-decoration: nome;
    padding: 12px 30px;
    font-weight: 300;
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body{
	font-family: 'Open Sans';
}

header{
	background-color: #f2f2f2;
	text-align: center;
	padding: 25px;
}
nav a{
	display: inline-block;
	text-decoration: none;
	color: #696969;
	margin: 0 30px;
	padding: 10px 20px;
	border-radius: 30px;
}
nav a:hover {
	background-color: #000;
	color: #fff;
}
.encabezado-img{
	background-image: url(img/fondo.jpg);
	background-size: cover;
	height: 700px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	color: #fff;
}
.encabezado-img p{
	font-size: 18px;
}
.encabezado-img h1{
	font-size: 50px;
	padding: 15px 0;

}




</style>