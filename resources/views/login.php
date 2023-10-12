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
        <h2 class="titulo"> <center><u>FORMULARIO INICIA SESION</u></center></h2>
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
            <a href="welcome.blade.php"class="entrar"><center>ENTRAR</center></a></p>
        </div>
    </form>
    
    
</body>
</html>