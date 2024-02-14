<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="estilos_personalizados.css">
    <style>
        .content_facebook{
            height:100vh;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .btn_facebook{
            background-color:#477bd4;
            color:#ffff;
            font-size:18px;
            border:0px;
            border-radius: 10px;
            padding:10px;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .content_form{
            position:fixed;
            inset:0px;
            display:flex;
            align-items:center;
            justify-content:center;
            scale:0;
            transition:scale 0.5s ease;
        }

        .form{
            padding:20px;
        }


    </style>
</head>
<body>
 <?php
    include("./functions/conexion.php");
 ?>

 <div class="content_facebook">
    <button type="submit" class="btn_facebook"><span class="logo">f</span> Facebook</button>
 </div>

 <div class="content_form">
    <!-- INPUT PARA PUBLICACION -->
 <form method="POST" action="index.php" class="contenedor_escribe_publicacion bloque_contenedor form">
    <div class="contenedor_usuario_escribe">
        <div class="imagen_usuario">
            <img src="img/usuarios/usuario1.png" alt="usuario" class="img_imagen_usuario">
        </div>
    <div class="contenedor_inputs">
        <input class="input_post_usuario" placeholder="What´s your mind. Misael?" name="text">
        <button class="btn_enviar" name="btn_enviar" type="submit"><span class="material-symbols-outlined">send</span></button>
    </div>                        
    </div>
        <ul class="barra_icons_post">
            <li><span class="material-symbols-outlined green">imagesmode</span>Live</li>
            <li><span class="material-symbols-outlined blue">group</span>Photo/Video</li>
            <li><span class="material-symbols-outlined amarillo">add_reaction</span>feeling/Activity</li>
        </ul>
    </form>
 </div>

 <script>
    document.querySelector(".btn_facebook").addEventListener("click", ()=>{
        document.querySelector(".content_form").style.scale = "1"
    })
 </script>
</body>
</html>