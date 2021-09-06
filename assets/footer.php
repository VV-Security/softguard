<!-- #################################  Footer   ######################################### -->

<footer class="page-footer blue darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Compañia V&V Security</h5>
                <p class="grey-text text-lighten-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Somos una empresa con una amplia gama de servicios, dirigidos a
                    satisfacer
                    los requerimientos de protección mediante el uso de servicios informáticos, físicos y servicios
                    especiales.
                    V & V Security, en
                    Chile, esta dirigido por profesionales chilenos, de vasta trayectoria empresarial y con una gran
                    experiencia
                    en el campo
                    de la seguridad, con una alta responsabilidad en el compromiso con nuestro clientes.
                </p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Sucursales</h5>
                <ul>
                    <li><i class="material-icons left">location_on</i><strong>Los Ángeles</strong><br><a
                            class="white-text hoverable"
                            href="https://www.google.com/maps/place/Av.+Almte.+Latorre+780,+Los+Angeles,+Los+%C3%81ngeles,+B%C3%ADo+B%C3%ADo/@-37.4591129,-72.3606408,17z/data=!3m1!4b1!4m8!1m2!2m1!1sAv.+Almirante+La+Torre+%230780!3m4!1s0x966bdd1587aaa897:0xcd20d6850c5bf714!8m2!3d-37.4591172!4d-72.3584521">
                            </i> Av. Almirante Latorre 0780</a></li>
                    <br>
                    <li><i class="material-icons left">location_on</i><strong>Las Condes, Santiago</strong><br><a
                            class="white-text hoverable"
                            href="https://www.google.com/maps/place/Av+Vitacura+2939,+Of.+301,+Las+Condes,+Regi%C3%B3n+Metropolitana/@-33.4149536,-70.6112746,13.6z/data=!4m5!3m4!1s0x9662cf414aadee35:0xd9d74041ccb7eb1a!8m2!3d-33.4111622!4d-70.6022691">
                            Vitacura 2939 Of. 301</a></li>
                    <br>
                    <li><i class="material-icons left">location_on</i><strong>Valdivia</strong><br><a
                            class="white-text hoverable"
                            href="https://www.google.com/maps/place/Los+Carpinteros+505,+Valdivia,+Los+R%C3%ADos/@-39.8479501,-73.2471283,17z/data=!3m1!4b1!4m5!3m4!1s0x9615ee4c25be568d:0xdd902628de27194a!8m2!3d-39.8479542!4d-73.2449396">
                            Los Carpinteros 505</a></li>
                    <br>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contactanos</h5>
                <ul>
                    <li><a class="white-text valign-wrapper hoverable" href="https://www.vvsecurity.cl/contacto/"><i
                                class="material-icons left tiny">contact_mail</i>Formulario de Contacto</a></li>
                    <br>
                    <li><a class="white-text valign-wrapper "><i class="material-icons left tiny">phone</i>
                            <strong>+56 2 27261164</strong></a></li>
                    <br>
                    <li><a class="white-text valign-wrapper "><i class="material-icons left tiny">call</i>
                            <strong>+56 2 27261168</strong></a></li>
                    <br>
                    <li><a class="white-text valign-wrapper"><i
                                class="material-icons left tiny">mail</i>tecnologia@vvsecurity.cl</a></li>
                    <br>
                    <li><a class="white-text valign-wrapper hoverable"
                            href="https://www.vvsecurity.cl/trabaja-con-nosotros/"><i
                                class="material-icons left tiny">inbox</i>Trabaja con nosotros</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        </div>
    </div>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
var elem = document.querySelector('.carousel');
var instance = M.Carousel.init(elem, {
    indicators: true,
    duration: 850,
    fullWidth: true
});

setInterval(() => {
    console.log(instance.pressed);
    if (!instance.pressed) {
        instance.next();
    }
}, 7500);
$(document).ready(function() {
    $('.slider').slider({
        indicators: true,
        transition: 4500,
        interval: 5500,
        height: 800

    });
});
</script>
</body>

</html>