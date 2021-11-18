<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>      
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery-2.1.3.min.js" type="text/javascript"></script>  
    </head>
    <body>
        <header>
            <div class="sobreimgcabe">
                <div class="botonescabe">
                    <ul class="listaheader">
                        <li>PROYECTOS</li>
                        <li>¿PORQUÉ KIBO?</li>
                        <li>CONTACTA</li>
                        <li><img src="images/menu-mail.png" alt=""/></li>
                        <li><img src="images/menu-phone.png" alt=""/></li> 
                    </ul>
                </div>
                <div class="logo" >
                    <img class="logoimg" src="images/logo.png" alt="logo"/>
                    <div class="contenedorcubo">
                        <div class="transformar">
                            <div class="hijo1"><p><img class="logoimgcubo" src="images/logo.png" alt="logo"/></p></div>
                            <div class="hijo2"><p><img class="logoimgcubo" src="images/logo.png" alt="logo"/></p></div>
                            <div class="hijo3"><p><img class="logoimgcubo" src="images/logo.png" alt="logo"/></p></div>
                            <div class="hijo4"><p><img class="logoimgcubo" src="images/logo.png" alt="logo"/></p></div>
                        </div>
                    </div>
                </div>
                <div class="textcabe">
                    <p class="pgrandecabe">No se trata de un logo,</p>
                    <p class="pgrandecabe">es <span class="headerbold">tu marca</span></p>
                    <div class="espaciocabe"></div>
                    <p class="ppeqcabe">Si te conformases con cualquier cosa no estarias aqui</p>
                    <p class="ppeqcabe">Bienvenido a KIBO, <span>¿empezamos a diseñar?</span></p>
                </div>
            </div>
            <div id="cabecera">
                <div class="difuminado"></div>
                <img class="imgcabe" src="../images/header-bg.jpg" alt="imagen cabecera;"/>
                
            </div>
        </header>
        
        <nav>
            <ul>
                <li class="navbutizq"><button type="button" class="boton1" >CONTACTA</button></li>
                <li class="navbutder"><button type="button" class="boton2" >PROYECTOS</button></li>
            </ul>
        </nav>
        
        <section>
            <div class="letrasecgr">
                <p>La esencia de nuestros diseños</p>
                <p>está en <span>los detalles</span></p>
            </div>
            <div class="letrasmay">
                <span>───</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CASOS DE ESTUDIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>───</span>
            </div>
            <div class="letrasparrafo">
                <p>
                    <span  class="spanrup1">Eres inconformista y nos gusta. Quieres un trabajo original y nos apasiona.</span>
                    <span  class="spanrup2"> Tras ocho años de experiencia seguimos con la lusión del primer día. Todos nuestros </span>
                    <span  class="spanrup3">proyectos tienen algo denuestra esencia. Te mostramos alguno delos mas recientes.</span>
                    <span  class="spanrup4"></span>
                    <span  class="spanrup5"></span>
                    <span  class="spanrup6"></span>
                </p>
            </div>
            
            <script>//este jquery mantiene la relacion de aspecto en toda la imagen altas de 6fotos
                $(document).on("ready", function() {
                var altura = ($('.columna').width()) * 0.88;
                var anchura = ($('.columna').width());

                        $('.sobreimgseisancho').height(altura + "px").css({});
                        $('.efectoancho').height(altura + "px").css({});
                        $('.sobreimgseisancho').width(anchura + "px").css({});
                });
                $(window).on("resize", function() {
                var altura = ($('.columna').width()) * 0.88;
                var anchura = ($('.columna').width());
                        $('.sobreimgseisancho').height(altura + "px").css({});
                        $('.efectoancho').height(altura + "px").css({});
                        $('.sobreimgseisancho').width(anchura + "px").css({});
                });
            </script>
            <script>//este jquery mantiene la relacion de aspecto en toda la imagen altas de 6fotos
                $(document).on("ready", function() {
                    var altura = ($('.columna').width()) * 1.413;
                    var anchura = ($('.columna').width());
                            $('.sobreimgseisalto').height(altura + "px").css({});
                            $('.efectoalto').height(altura + "px").css({});
                            $('.sobreimgseisalto').width(anchura + "px").css({});
                });
                $(window).on("resize", function() {
                    var altura = ($('.columna').width()) * 1.413;
                    var anchura = ($('.columna').width());
                            $('.sobreimgseisalto').height(altura + "px").css({});
                            $('.efectoalto').height(altura + "px").css({});
                            $('.sobreimgseisalto').width(anchura + "px").css({});
                });
            </script>
            <script>//este script cambia floats para que el texto y los botones dentro de imegenes con nombres largos
                $(document).on("ready", function() {
                    var anchopro = $('.columna').width();
                    console.log("altura promotion: " + anchopro);
                    if (anchopro < 270) {                       
                        $('#promoico, #radicalico, #leytonico, #merchantico').css({"clear": "both", "float": "left", "top": "10px"});
                        $('#promotext, #radicaltext, #leytontext, #merchanttext').css("clear", "both");

                    } else {
                        $('#promoico, #radicalico, #leytonico, #merchantico')
                            .css({"clear": "initial", "float": "right", "top": "10px"});
                        $('#promotext, #radicaltext, #leytontext, #merchanttext')
                            .css({"clear": "initial", "float": "none"});
                    }
                });
                $(window).on("resize", function() {
                    var anchopro = $('.columna').width();
                    if (anchopro < 270) {                       
                        $('#promoico, #radicalico, #leytonico, #merchantico')
                            .css({"clear": "both", "float": "left", "top": "10px"});
                        $('#promotext, #radicaltext, #leytontext, #merchanttext')
                            .css("clear", "both");
                    } else {
                        $('#promoico, #radicalico, #leytonico, #merchantico')
                            .css({"clear": "initial", "float": "right", "top": "10px"});
                        $('#promotext, #radicaltext, #leytontext, #merchanttext')
                            .css({"clear": "initial", "float": "none"});
                    }
                });
            </script>
            
            <div id="seisfotos" class="nuevopadding" >
                <div class="row" >
                    <div class="col-sm-4" >
                        <div class="columna"><!--imagen#1/6-->
                            <div id="contpromotion" class="sobreimgseisancho" >
                                <div id="promotion">
                                    <div id="promoico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="promotext" class="piefototext"><p>PROMOTION CAMP</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/promotion.jpg" alt="imagen promotion;"/>
                            </div>
                        </div>
                        <div class="columna"><!--imagen#2/6-->
                            <div id="contradical" class="sobreimgseisalto" >
                                <div id="radical">
                                    <div id="radicalico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="radicaltext" class="piefototext"><p>RADICAL RENT</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/radical.jpg" alt="imagen radical;"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" id="margincentro">
                        <div class="columna"><!--imagen#3/6-->
                            <div id="contdupli" class="sobreimgseisalto" >
                                <div id="dupli">
                                    <div id="dupliico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="duplitext" class="piefototext"><p>DUPLI</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/dupli.jpg" alt="imagen dupli;"/>
                            </div>
                        </div>
                        <div class="columna"><!--imagen#4/6-->
                            <div id="contleyton" class="sobreimgseisancho" >
                                <div id="leyton">
                                    <div id="leytonico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="leytontext" class="piefototext"><p>LEYTON ABOGADOS</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/leyton.jpg" alt="imagen leiton abogados;"/>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-4" >
                        <div class="columna"><!--imagen#5-->
                            <div id="contepg" class="sobreimgseisancho" >
                                <div id="epg">
                                    <div id="epgico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="epgtext" class="piefototext"><p>EPG</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/epg.jpg" alt="imagen epg;"/>
                            </div>
                        </div>
                        <div class="columna"><!--imagen#6-->
                            <div id="contmerchant" class="sobreimgseisalto" >
                                <div id="merchant">
                                    <div id="merchantico" class="piefotoico">
                                        <a href="#"><img class="go-proyect" src="images/icons/go-proyect.svg"/></a>
                                        <a href="#"><img class="icon-contact" src="images/icons/icon-contact.svg"/></a>
                                    </div>
                                    <div id="merchanttext" class="piefototext"><p>MERCHANT CIGARS</p></div>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="efectoancho"></div>
                                <img class="imgseis" src="images/proyects/cigars.jpg" alt="imagen merchant cigars;"/>
                            </div>
                        </div>
                    </div>
                    <!--<button type="button" class="boton3" >CONTACTA</button>-->
                    <div id="contBoton3">
			<span class="sombras" id="texto1"><p>CONTACTA</p></span>
			<span id="capa1" ></span>
			<span class="sombras" id="capa2"><img src="images/form-phone.png" alt=""/></span>
                    </div>
                </div>           
            </div>

            <div id="locos">
                <div class="letrasecgr">Un equipo de locos por</div>
                <div class="letrasecgr"><span>el diseño</span></div>
                <div class="letrasmay">
                <span>───</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUESTROS VALORES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>───</span>
                </div>
                <p class="letrasparrafo"><span class="spanruplocos">Tu proyecto se convertirá en parte de KIBO desde el primer día.</span>
                    <span class="spanruplocos">Por eso tienes que conocernos</span></p>
                
                <div id="iconsvg">
                        <div class="lineacentral"></div>
                        <div class="iconazules">
                            <div id="titletaza" class="titleizq">NADA ES IMPOSIBLE</div>
                            <div id="textotaza" class="textoder">No creemos en dos soluciones iguales. apartir de
                                tu idea, trabajaremos en crear una identidad única para potenciar
                                tu proyecto.
                            </div>
                            <img src="images/icons/imposible-icon.svg" class="imgSVG" alt="imagen SVG" title="imagen SVG" />
                        </div>
                        <div class="lineacentral"></div>
                        <div class="iconazules">
                            <div id="titlenodo" class="titleder">360º DE DISEÑO</div>
                            <div id="textonodo" class="textoizq">Imagen corporativa, Diseño web, Aplicaciones móviles,
                                Diseño Editorial, Publicidad Online-offline y mucho más. 
                                Si no nos crees capaces... ¡Nos encantan los retos.
                            </div>
                            <img src="images/icons/diseno-icon.svg" class="imgSVG" alt="imagen SVG" title="imagen SVG" />
                        </div>
                        <div class="lineacentral"></div>
                        <div class="iconazules">
                            <div id="titlecabeza" class="titleizq">APASIONADOS POR EL DISEÑO</div>
                            <div id="textocabeza" class="textoder">No creemos en equipos multidisciplinares. Somos 
                                diseñadores especializados en el sector, capaces de 
                                conseguir lo que nos propongas.</div>
                            <img src="images/icons/apasionados-icon.svg" class="imgSVG" alt="imagen SVG" title="imagen SVG" />
                        </div>
                        <div class="lineacentral"></div>
                        <div class="iconazules">
                            <div id="titlebadge" class="titleder">UNA ESTANTERÍA POR COMPLETA</div>
                            <div id="textobadge" class="textoizq">Nos avalan los siguientes reconocimientos:
                            Andalucía emprende, Trayectoria empresarial: Ave 
                            Málaga, Vodafone Accesibilidad.</div>
                            <img src="images/icons/completar-icon.svg" class="imgSVG" alt="imagen SVG" title="imagen SVG" />
                        </div>
                        <div class="lineacentral"></div>
                        <div class="iconazules" class=iconkibo">
                            <img src="images/icons/kibo-blue.svg" class="imgSVG" alt="imagen SVG" title="imagen SVG" />
                        </div>
                </div>
            </div>
        </section>
        <script>//este jquery mantiene la relacion de aspecto en toda la imagen azul del foot
            $(document).on("ready", function() {
                var altura = ($('.sobreimgfoot').width()) * 0.36;
                $('#difuminadoabajo').height(altura + "px").css({});
            });
            $(window).on("resize", function() {
                var altura = ($('.sobreimgfoot').width()) * 0.36;
                $('#difuminadoabajo').height(altura + "px").css({});
            });
        </script>
        <script>//este jquery regula la separacion entre letras iconos y boton de footer
            $(document).on("ready", function() {
                var altura0; var altura1; var altura2; var altura3;
                var ancho = $(window).width();
                console.log("ancho win:" + ancho);
                if (ancho > 1151) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.055;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0.03;
                    altura3 = ($('.sobreimgfoot').width()) * 0.03;
                } else if ((ancho < 1450)&&(ancho > 1300)) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.04;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0.02;
                    altura3 = ($('.sobreimgfoot').width()) * 0.02;
                } else if ((ancho < 1300)&&(ancho > 700)) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.04;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0.02;
                    altura3 = ($('.sobreimgfoot').width()) * 0.02;
                } else if (ancho < 700){
                    altura0 = 0; altura1 = 0; altura2 = 0; altura3 = 0;
                } else {
                    
                }
                $('#separfoot0').height(altura0 + "px").css({});
                $('#separfoot1').height(altura1 + "px").css({});
                $('#separfoot2').height(altura2 + "px").css({});
                $('#separfoot3').height(altura3 + "px").css({});
            });
            $(window).on("resize", function() {
                var altura0; var altura1; var altura2; var altura3;
                var ancho = $(window).width();
                console.log("ancho win:" + ancho);
                if (ancho > 1451) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.055;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0.03;
                    altura3 = ($('.sobreimgfoot').width()) * 0.03;
                } else if ((ancho < 1450)&&(ancho > 1250)) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.03;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0.02;
                    altura3 = ($('.sobreimgfoot').width()) * 0.02;
                } else if ((ancho < 1250)&&(ancho > 1050)) {
                    altura0 = ($('.sobreimgfoot').width()) * 0.02;
                    altura1 = ($('.sobreimgfoot').width()) * 0.004;
                    altura2 = ($('.sobreimgfoot').width()) * 0;
                    altura3 = ($('.sobreimgfoot').width()) * 0;
                } else if (ancho < 1050){
                    altura0 = ($('.sobreimgfoot').width()) * 0.02;
                    altura1 = 0; altura2 = 0; altura3 = 0;
                }
                $('#separfoot0').height(altura0 + "px").css({});
                $('#separfoot1').height(altura1 + "px").css({});
                $('#separfoot2').height(altura2 + "px").css({});
                $('#separfoot3').height(altura3 + "px").css({});
            });
        </script>
        <footer>
            <div class="sobreimgfoot">
                
                <div class="textfoot">   
                    <div id="separfoot0"></div>                    
                    <p class="letrasfootgr">Contacta con nosotros</p>                   
                    <div id="separfoot1"></div>                   
                    <p class="letrasfootpq">queremos conocer tu proyecto y trabajar</p>
                    <p class="letrasfootpq">codo con codo contigo</p>
                </div>
                
                <div id="separfoot2"></div>
                
                <div id="tresdatos" >
                    <div class="row" >
                        <div class="col-sm-4">
                            <img class="locico" src="images/icons/marker.svg"/>
                            <p class="ciudadmail">MADRID</p>
                            <p class="dirtlf">Plaza de Crónos 28037</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="locico" src="images/icons/customer-icon.svg"/>
                            <p class="ciudadmail">info@kibostudios.com</p>
                            <p class="dirtlf">951239363</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="locico" src="images/icons/marker.svg"/>
                            <p class="ciudadmail">MARBELLA</p>
                            <p class="dirtlf">C/ Antonio Herrero 8 1ºB/C 29601</p>
                        </div>
                    </div>
                    
                    <div id="separfoot3"></div>
                    
                    <!--<button type="button" class="boton4" >CONTACTA</button>-->
                    <div id="contBoton4">
			<span class="sombras" id="texto1"><p>CONTACTA</p></span>
			<span id="capa1" ></span>
			<span class="sombras" id="capa2"><img src="images/form-phone.png" alt=""/></span>
                    </div>
                </div>
            </div>
            <div id="pie">
                <div class="transup"></div>
                <div class="transdown">
                    <div id="copyright">Copyright © 2007-2016 KIBO. Todos los derechos
                        reservados. Política de Privacidad. Política de cookies y Aviso 
                        Legal. Sitemap.
                    </div>
                    <div id="redsocial">
                        <div id="facebook"><img src="images/facebook.png" alt=""/></div>
                        <div id="twitter"><img src="images/twitter.png" alt=""/></div>
                        <div id="dribbble"><img src="images/dribbble.png" alt=""/></div>
                    </div>
                </div>
                <img class="imgfoot" src="images/contact-bg.jpg" alt="imagen cabecera" />
            </div>
        </footer>
    </body>
</html>    
    

