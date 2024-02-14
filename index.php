<?php
include("functions/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook POST</title>
    <link rel="stylesheet" href="estilos_personalizados.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="contenedor_facebook">
        <!-- BARRA SUPERIOR -->
        <div class="barra_superior">
            <div class="bloque">
                <div class="logo">f</div>
                <div class="busqueda"><input type="text" placeholder="Search Facebook"></div>
            </div>
            <div class="bloque">
                <ul class="secciones">
                    <li class="menu"><span class="material-symbols-outlined">home</span></li>
                    <li class="videos"><span class="material-symbols-outlined">live_tv</span></li>
                    <li class="compras"><span class="material-symbols-outlined">storefront</span></li>
                    <li class="grupos"><span class="material-symbols-outlined">groups</span></li>
                    <li class="herramientas"><span class="material-symbols-outlined">settings</span></li>
                </ul>
            </div>
            <div class="bloque">
                <div class="user">
                    <img src="img/usuarios/usuario1.png" alt="usuario_img">
                    <span class="nombre_perfil_usuario">Misael AM</span>
                </div>
                <ul class="secciones">
                    <li class="plus"><span class="material-symbols-outlined">add_circle</span></li>
                    <li class="chat"><span class="material-symbols-outlined">chat</span></li>
                    <li class="notificacion"><span class="material-symbols-outlined">notifications</span></li>
                    <li class="flecha_abajo"><span class="material-symbols-outlined">arrow_drop_down</span></li>
                </ul>
            </div>
        </div>
        <!-- FIN BARRA SUPERIOR -->
        
        <div class="contenedor_columnas">
            <!-- BARRA IZQUIERDA -->
            <div class="barra_izquiera">
                <ul class="accesos_rapidos">
                    <li class="user">
                        <div class="img_user"><img src="./img/usuarios/usuario1.png" alt="usuario_yo"></div>
                        <span class="nombre_user nombre_perfil_usuario">Misael AM</span>
                    </li>
                    <li class="watch"><span class="material-symbols-outlined">live_tv</span>Watch</li>
                    <li class="events"><span class="material-symbols-outlined">rewarded_ads</span> Events</li>
                    <li class="friends"><span class="material-symbols-outlined">group_add</span> Friends</li>
                    <li class="picture"><span class="material-symbols-outlined">imagesmode</span> Memories</li>
                    <button>View more...</button>
                    
                </ul>
                <ul class="accesos_rapidos">
                    <Strong>Groups</Strong>
                    <li><img src="" alt="" class="grupos_icons"> Programacion con C++</li>
                    <li><img src="" alt=""> Programacion JavaScript</li>
                    <li><img src="" alt=""> Diseñadores UX/UI</li>
                    <button>View more...</button>
                </ul>
            </div>

            <!-- BARRA CENTRAL -->
            <div class="barra_central">
                <div class="contenedor_historias">
                    <ul>
                        <li class="usuarios_amigos">
                            <img src="./img/historias/historia1.jfif" alt="historia">
                            <span class="nombre_historia">Alavarin CV</span>
                        </li>
                        <li class="usuarios_amigos">
                            <img src="./img/historias/historia4.jpeg" alt="historia">
                            <span class="nombre_historia">Chuyin..</span>
                        </li>
                        <li class="usuarios_amigos">
                            <img src="./img/historias/historia2.jpg" alt="historia">
                            <span class="nombre_historia">Jesus Lalo</span>
                        </li>
                        <li class="usuarios_amigos">
                            <img src="./img/historias/historia5.jpg" alt="historia">
                            <span class="nombre_historia">Emmanuel Gag</span>
                        </li>
                        <li class="usuarios_amigos">
                            <img src="./img/historias/historia6.jpeg" alt="historia">
                            <span class="nombre_historia">Ricardo Soto</span>
                        </li>
                    </ul>
                </div>

                <!-- INPUT PARA PUBLICACION -->
                <form method="POST" action="index.php" class="contenedor_escribe_publicacion bloque_contenedor">
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

                <?php
                    if (isset($_POST["btn_enviar"])) {
                        $text = $_POST["text"];
                        $sql = "INSERT INTO `post`(`texto`) VALUES ('$text')";
                        $envio =  mysqli_query($con, $sql);
                    }
            ?>
                <!-- CONTENEDOR POSTS -->
                <div class="contenedor_post bloque_contenedor">

                <?php
                      $post = "SELECT texto FROM post";
                      $resPost = mysqli_query($con, $post);
                        while ($row = mysqli_fetch_assoc($resPost)) {
                ?>
                    <div class="post">
                        <div class="barra_superior_post">
                            <div class="imagen_icon_user_post">
                                <img src="./img/usuarios/usuario3.jpg" alt="usuario_post">
                            </div>
                            <div class="datos_usuario_post">
                                <div class="nombre_usuario_post">Misael AM</div>
                                <span class="tiempo_post">5m</span>
                            </div>
                        </div>
                        <div class="texto_post"><?php echo $row["texto"]; ?></div>
                        <div class="contenedor_iconos_acciones">
                            <div class="reactions option"><span class="material-symbols-outlined">thumb_up</span>Me gusta</div>
                            <div class="comments option"><span class="material-symbols-outlined">comment</span>Comentar</div>
                            <div class="shared option"><span class="material-symbols-outlined">share</span>Compartir</div>
                        </div>
                    </div>

                    <?php
              }
                    ?>

                </div>
            </div>


            <div class="contenedor_usuarios_amigos">
                <ul>
                    <h3>Contactos</h3>
                    <li>
                        <img src="img/usuarios/usuario2.jfif" alt="img_amigo_burbuja">
                        <div class="nombre_amigo_burbuja">Reynaldo Garza</div>
                    </li>
                    <li>
                        <img src="img/usuarios/usuario3.jpg" alt="img_amigo_burbuja">
                        <div class="nombre_amigo_burbuja">Alvaro Castro</div>
                    </li>
                    <li>
                        <img src="img/usuarios/usuario4.jfif" alt="img_amigo_burbuja">
                        <div class="nombre_amigo_burbuja">Ricardo Pardo</div>
                    </li>
                    <li>
                        <img src="img/usuarios/usuario5.jpeg" alt="img_amigo_burbuja">
                        <div class="nombre_amigo_burbuja">Jesus Eduardo</div>
                    </li>
                    <li>
                        <img src="img/usuarios/usuario6.jpeg" alt="img_amigo_burbuja">
                        <div class="nombre_amigo_burbuja">Jesus Vera</div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <script src="main.js"></script>
</body>
</html>