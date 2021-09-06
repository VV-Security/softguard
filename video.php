<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>V&V Security</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<!-- #################################  navbar   ######################################### -->
<?php
 include 'assets/navbar.php';
 ?>


<!-- #################################  Header   ######################################### -->
<div class="row">
    <div class="container">
        <div class="card-panel">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="img/videoVigi/web_cam_etc.jpg" class="responsive-img"> <!-- random image -->
                        <div class="caption right-align blue-text">
                            <h3 class="white-text"><strong>VIDEO VIGILANCIA</strong></h3>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="card-panel">
            <div class="row">
                <div class="video-container responsive-img">
                    <iframe width="950" height="550" src="video/DSSVideoControl.mp4" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <div class="card-panel">
            <div class="row">
                <div class="col s12">
                    <h4 class="center-align">¿Qué funciones cumple el módulo de video SoftGuard?</h4>
                </div>
                <div class="row">
                    <div class="col s12 valign-wrapper">
                        <div class="col s1"><i class="material-icons small valign-wrapper">videocam</i></div>
                        <div class="col s11">
                            <p>
                                Administra el acceso a los operadores del sistema a visualizar, permite solo recibir
                                imagen en caso
                                de
                                eventos o
                                ingresar desde la central para realizar rutinas de verificación periódica, entre
                                otros.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 valign-wrapper">
                        <div class="col s1"><i class="material-icons small valign-wrapper">videocam</i></div>
                        <div class="col s11">
                            <p>
                                Administra la relación entre cuentas y equipos de video más cámaras instaladas en el
                                sitio protegido.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 valign-wrapper">
                        <div class="col s1"><i class="material-icons small valign-wrapper">videocam</i></div>
                        <div class="col s11">
                            <p>
                                Relaciona los clips de video históricos de cada alarma por cada abonado a las base
                                de datos de cuentas de monitoreo.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 valign-wrapper">
                        <div class="col s1"><i class="material-icons small valign-wrapper">videocam</i></div>
                        <div class="col s11">
                            <p>
                                Genera un detallado log de operaciones de acceso a video por cada operador de la
                                central.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-panel">
            <div class="row">
                <div class="col s12">
                    <img src="img/App Desktop/VideoControlDesktop.jpg" class="responsive-img  materialboxed hoverable">
                </div>
                <h4 class="center-align">Características</h4>
                <div class="col s12">
                    El módulo de video verificación es compatible con la mayoría de los dispositivos de CCTV del
                    mercado: DVR, web cams, cámaras ip, video-server, que tengan la facultad de transmitir las
                    imágenes por internet y donde no se requiera de una aplicación adicional para
                    poder visualizar las imágenes, es decir, que al colocar la dirección de ip del dispositivo en un
                    web browser se accede a visualizar directamente las imágenes.
                    <p>Su implementación es muy sencilla. Recomendamos consulte con un asesor comercial los
                        requerimientos de PC u ordenador para su montaje.

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #################################  Footer   ######################################### -->
<?php
 include 'assets/footer.php';
 ?>