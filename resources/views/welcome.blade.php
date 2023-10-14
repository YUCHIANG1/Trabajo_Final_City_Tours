<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formu.css">
</head>
<body>
    <form class="confunto">
        <h2 class="titulo"> <center><u>FORMULARIO INICIA SESION YUCHIANG</u></center></h2>
        <p clas="comentario"><b>¿Aun no tienes una cuenta?</b> <a href="#"class="link">Entra aqui</a></p>

        <div class="completar">
            <div class="formulario">
                <input type="text"  id="name" class="digitar" placeholder="n o m b r e s">
                <label for="name" class="realizar"><b>NOMBRE:</b></label>
                
            </div>
            <div class="formulario">
                <input type="text"  id="user" class="digitar" placeholder="u s u a r i o">
                <label for="user" class="realizar"><b>USUARIO</b></label>
               
            </div>
            <div class="formulario">
                <input type="text"  id="password" class="digitar" placeholder="c o n t r a s e ñ a">
                <label for="password" class="realizar"><b>CONTRASEÑA:</b></label>
                
            </div>

            <!--<input type="submit" class="entrar" value="ENTRAR">-->
            <a href="turistico.php"class="entrar"><center>ENTRAR</center></a></p>
            
        </div>
    </form>
    
    
</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    border: none;
}
body{
    display: flex;
    min-height: 100vh;
}
.confunto{
    margin: auto;
    width: 90%;
    max-width: 300px;
    padding: 4.5em 3em;
    border-radius: 10px;
    box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%);
    
}
.titulo{
    font-size: 2rem;
    margin-bottom: .5em;
    color: red;
    
}
.comentario{
    font-weight: 300;
    
}
.link{
    font-weight: 400;
    color:blue;
}
.completar{
    margin-top: 3em;
    display: grid;
    gap: 2.5em;
}
.formulario{
    position: relative;
    color:brown;
}
.digitar{
    width: 100%;
    background: none;
    font-size: 1rem;
    padding: .6em .3em;
    border: none;
   
}

.entrar{
    display: inline-block;
    background-color:rgb(0, 140, 255);
    color:aliceblue;
    text-decoration: nome;
    padding: 12px 30px;
    font-weight: 300;
}

@media (max-widcht:425px){
    .titulo{
        font-size: 1.8rem;
    }
}
  /*background-color:springgreen;*/
</style>