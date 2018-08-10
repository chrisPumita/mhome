<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MATHEWS HOME</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style media="screen">
.open {
  left: 10px;
  position: relative;
  top: 10px;
width: 50px;
height: 50px;
display: block;
cursor: pointer;
transition: opacity 0.2s linear;
}
.open:hover {
opacity: 0.8;
}
.open span {
display: block;
float: left;
clear: both;
height: 4px;
width: 40px;
border-radius: 40px;
background-color: #fff;
position: absolute;
right: 3px;
top: 3px;
overflow: hidden;
transition: all 0.4s ease;
}
.open span:nth-child(1) {
margin-top: 10px;
z-index: 9;
}
.open span:nth-child(2) {
margin-top: 25px;
}
.open span:nth-child(3) {
margin-top: 40px;
}

.sub-menu {
transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
height: 0;
width: 0;
right: 0;
top: 0;
position: absolute;
background-color: rgba(38, 84, 133, 0.54);
border-radius: 50%;
z-index: 18;
overflow: hidden;
}
.sub-menu li {
display: block;
float: right;
clear: both;
height: auto;
margin-right: -160px;
transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.sub-menu li:first-child {
margin-top: 180px;
}
.sub-menu li:nth-child(1) {
-webkit-transition-delay: 0.05s;
}
.sub-menu li:nth-child(2) {
-webkit-transition-delay: 0.10s;
}
.sub-menu li:nth-child(3) {
-webkit-transition-delay: 0.15s;
}
.sub-menu li:nth-child(4) {
-webkit-transition-delay: 0.20s;
}
.sub-menu li:nth-child(5) {
-webkit-transition-delay: 0.25s;
}
.sub-menu li a {
color: #fff;
font-family: 'Lato', Arial, Helvetica, sans-serif;
font-size: 16px;
width: 100%;
display: block;
float: left;
line-height: 40px;
}

.oppenned .sub-menu {
opacity: 1;
height: 400px;
width: 400px;
}
.oppenned span:nth-child(2) {
overflow: visible;
}
.oppenned span:nth-child(1), .oppenned span:nth-child(3) {
z-index: 100;
-webkit-transform: rotate(45deg);
        transform: rotate(45deg);
}
.oppenned span:nth-child(1) {
-webkit-transform: rotate(45deg) translateY(12px) translateX(12px);
        transform: rotate(45deg) translateY(12px) translateX(12px);
}
.oppenned span:nth-child(2) {
  height: 395px;
  width: 400px;
  left: -100px;
  top: -160px;
border-radius: 50%;
background-color: rgba(38, 84, 133, 0.54);
}
.oppenned span:nth-child(3) {
-webkit-transform: rotate(-45deg) translateY(-10px) translateX(10px);
        transform: rotate(-45deg) translateY(-10px) translateX(10px);
}
.oppenned li {
margin-right: 100px;
}

.button {
display: block;
float: left;
clear: both;
padding: 20px 40px;
background: #fff;
border-radius: 3px;
border: 2px solid #10a1ea;
overflow: hidden;
position: relative;
}
.button:after {
transition: -webkit-transform 0.3s ease;
transition: transform 0.3s ease;
transition: transform 0.3s ease, -webkit-transform 0.3s ease;
content: "";
position: absolute;
height: 200px;
width: 400px;
-webkit-transform: rotate(45deg) translateX(-540px) translateY(-100px);
        transform: rotate(45deg) translateX(-540px) translateY(-100px);
background: #10a1ea;
z-index: 1;
}
.button:before {
transition: -webkit-transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55), -webkit-transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
content: attr(title);
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
color: #fff;
z-index: 2;
text-align: center;
padding: 20px 40px;
-webkit-transform: translateY(200px);
        transform: translateY(200px);
}
.button:hover {
text-decoration: none;
}
.button:hover:after {
-webkit-transform: translateX(-300px) translateY(-100px);
        transform: translateX(-300px) translateY(-100px);
}
.button:hover:before {
-webkit-transform: translateY(0);
        transform: translateY(0);
}

</style>

<script type="text/javascript">
$(document).ready(function() {
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.cls', 'click', function(event){
			$('.open').removeClass('oppenned');
			event.stopPropagation();
		});
	});
</script>

  </head>
  <a href="#">
    <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
  </a>
  <body id="mhome"data-spy="scroll" data-target=".navbar" data-offset="60">
    <header id="header">
      <div class="contHeader colorSemiDegradado">
        <!--MENU MOBILE-->
<div class="">
  <div class="open">
    <span class="cls"></span>
    <span>
  		<ul class="sub-menu ">
  			<li>
    			<p class="pMenu">MENU</p>
  			</li>
  			<li>
  			  <a href="#nosotros">¿QUIÉNES SOMOS?</a>
  			</li>
  			<li>
  				  <a href="#PRODUCTS">PRODUCTOS</a>
  			</li>
  			<li>
  			  <a href="#contact">CONTACTO</a>
  			</li>
  		</ul>
  	</span>
    <span class="cls"></span>
  </div>
</div>
        <!--MENU MOBILE-->
      <div class="contMenus desktop">
        <div id="navbar1">
          <div class="contLogo">
            <img class="logoHeader animatedLogo zoomInDown" src="images/Logo_mathews.png" alt="Logo de Mathews Home">
          </div>
          <p class="pMenu">MENU</p>
          <a href="#nosotros">¿QUIÉNES SOMOS?</a>
          <a href="#PRODUCTS">PRODUCTOS</a>
          <a href="#contact">CONTACTO</a>
        </div>
        <div class=" circulo"></div>
      </div>

        <h1 class="titleHome">CALIDAD Y CONFIANZA</h1>
        <h2 class="SubTitleHome">es nuestro compromiso</h2>
        <a class="btnContactar" href="#contact"><button class="btnHome">CONTACTO</button></a>
      </div>
    </header>
    <section id="section">
      <div class="about">
        <div class="contAbout"></div>
        <div class="boxAbout">
          <div id="nosotros" class="txtAbout">
            <h3 class="txtDer">¿QUIÈNES SOMOS?</h3>
            <p>
              MATHEWS HOME dedicada a la fabricación de blancos en general, desde 1990 tenemos experiencia en el
              mercado brindando la máxima calidad en productos para el área HOTELERA, RESTAURANTERA, HOSPIATLARIA
              Y DEL HOGAR, TIENDAS DEPARTAMENTALES, CLUBES DEPORTIVOS, ARTICULOS PROMOCIONALES, SPAS y SALAS DE BELLEZA.
              <br><br>
              Contamos con la logística para la fabricación de productos de la más alta calidad, talleres de costura
              con más de 40 máquinas, fábrica de tela para la composición y estampado exclusivos, maquinas capitonadoras,
              telares para toallas y cobertores y máquinas para hacer almohadas.
          </p>
          </div>
          <div class="valoresAbout">
            <div class="boxValor">

              <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="contv">
                  <div class="txtValor1">
                    Ser una empresa de clase mundial que compita en términos de calidad y eficiencia con cualquier otra empresa del mundo.<br>
                    Se utilizan todos los instrumentos modernos de administración, tecnología y procesos, que cumple adecuadamente los requisitos de calidad.
                  </div>
                  <div class="txtValor2">
                    <h2>VISIÓN</h2>
                  </div>
                </div>
              </div>

              <div class="mySlides fade">
                <div class="contv">
                  <div class="txtValor1">
                    Somos un equipo especializado y capacitado para proponer soluciones de alta calidad a las necesidades de la industria hotelera,
                    estableciendo relaciones cordiales de largo plazo, de confianza y de mutuo beneficio.
                  </div>
                  <div class="txtValor2">
                    <h2>MISIÓN</h2>
                  </div>
                </div>
              </div>

              <div class="mySlides fade">
                <div class="contv">
                  <div class="txtValor1">
                    <ul>
                      <li>Honestidad</li>
                      <li>Responsabilidad</li>
                      <li>Compromiso</li>
                    </ul>
                  </div>
                  <div class="txtValor2">
                    <h2>VALORES</h2>
                  </div>
                </div>
              </div>
              </div>
              <br>
              <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="contCatact">
          <div class="contSec">
            <div class="boxDesc gralBox">
              <div class="CCalidad">
                <div class="iconLogoC iconPerfect">
                </div>
              </div>
              <div class="txtDesc">
                <h3>PRODUCTOS DE CALIDAD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="boxDesc gralBox">
              <div class="CCalidad">
                <div class="iconLogoC iconPedidos">
                </div>
              </div>
              <div class="txtDesc">
                <h3>PEDIDOS URGENTES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="contSec">
            <div class="boxDesc gralBox">
              <div class="CCalidad">
                <div class="iconLogoC iconHechos">
                </div>
              </div>
              <div class="txtDesc">
                <h3>PRODUCTOS DE CALIDAD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div class="boxDesc gralBox">
              <div class="CCalidad">
                <div class="iconLogoC iconAtencion">
                </div>
              </div>
              <div class="txtDesc">
                <h3>PRODUCTOS DE CALIDAD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="PRODUCTS" class="productos">
        <div class="contTGralProd">
          <h1 class="tProdGral">PRODUCTOS</h1>
        </div>

        <div id="sectores" class="sectors">
    			<div id="myBtnFilContainer">
    			  <button class="fbtn active" onclick="filterSelection('all')"> VER TODO</button>
            <button class="fbtn" onclick="filterSelection('rCama')">ROPA DE CAMA</button>
    			  <button class="fbtn" onclick="filterSelection('rBanio')">ROPA DE BAÑO</button>
    			  <button class="fbtn" onclick="filterSelection('rMesa')">MESA / MANTELERIA</button>
    			  <button class="fbtn" onclick="filterSelection('rDecora')">DECORACIÓN</button>
    			</div>

    			<div class="container"><!--INICIA CONTENEDOR-->

            <div class="filterDiv rBanio tProIndv"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/ropaBanio.jpg">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">ROPA DE BAÑO</h1>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">ROPA DE BAÑO</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rBanio"><!--INICIA TOALLAS-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">TOALLAS</h1>
                    <div class="cuadroDetails">
                      <p>CONTAMOS CON TOALLAS DE LA MAS ALTA CALIDAD EN 100% ALGODÓN, DE LAS MEDIDAS Y LOS PESOS QUE USTED REQUIERA, ASI COMO LA PERSONALIZACION EN BORDADO O ESTAMPADO.</p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/toalla.jpg">
                </div>
              </div>
            </div><!--TERMINA TOALLAS-->
            <div class="filterDiv rBanio"><!--INICIA BATA DE BAÑO-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">BATA DE BAÑO</h1>
                    <div class="cuadroDetails">
                      <p>MANEJAMOS BATAS PERSONALIZADAS YA ESEA ESTAMPADA O BORDADA UNITALLA Y UNISES.</p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/bata1.jpg">
                </div>
              </div>
            </div><!--TERMINA BATA DE BAÑO-->
            <div class="filterDiv rBanio"><!--INICIA ALFOMBRA DE BAÑO-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">ALFOMBRA DE BAÑO</h1>
                    <div class="cuadroDetails">
                      <p>TAPETE DE BAÑO EN MEDIDAS Y PESOS QUE REQUIDERA 100% ALGODÓN.</p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/alfombra.jpg">
                </div>
              </div>
            </div><!--TERMINA ALFOMBRA DE BAÑO-->
            <!--TERMINA SECCION DE ROPA DE BAÑO-->
            <div class="filterDiv rCama tProIndv"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/ropaCama2.jpg">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">ROPA DE CAMA</h1>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">ROPA DE CAMA</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA ALMOHADAS-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">ALMOHADAS</h1>
                    <div class="cuadroDetails">
                      <p>
                        ALMOHADAS DE HOTELERIA CON RELLENO DE FRIBRAS SILICONIZADAS, 50% POLIESTER Y 50% ALGODÓN,  ALMOHADAS DOWN ALTERNATIVE CON FUNDAAS DE TELA DOWN PROOF ALGODÓN 100%. ALMOHADAS VISCOELASTICAS (TIPO MEMORY FOAM) ESTANDAR, ALMOHADA CERVICAL DE VIAJE Y ORTOPEDICA. ALMOHADA ECONOMICA CON RELLENO DE FIBRA SINTETICA SILICONIZADA, EN TELA MICROFIBRA TACTO ALGODÓN.
                        <br>TODAS NUESTRAS ALMOHADAS SON HIPOALERGENICAS Y ANTIACAROS.
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/almohada.jpg">
                </div>
              </div>
            </div><!--TERMINA ALMOHADAS-->
            <div class="filterDiv rCama"><!--INICIA SABANAS-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">SABANAS</h1>
                    <div class="cuadroDetails">
                    <!--COMIENZA SABANAS ESPECIFICO HILOS-->
                    HACEMOS SABANAS CON BIES, BIES Y PIOLA Y FESTON BORDADO. EN LAS MEDIDAS QUE USTED REQUIERA. PARA LA EPOCA INVERNAL CONTAMOS CON SABANAS DE TELA DE FRANELA Y POLAR FLEECE.
                      <!--TERMINA PRODUCTO ESPECIFICO HILOS-->
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/sabana.jpg">
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <div class="filterDiv accor rCama"><!--INICIA FUNDAS-->
              <div class="details">
                <!--     AGREGAR ACORDION       -->
                <section class="ac-container">
                  <div>
                <!--      <input id="ac-1" name="accordion-1" type="radio" checked="">-->
                      <input id="ac-1" name="accordion-1" type="radio">
                      <label for="ac-1"><h1 class="txtTProducto">SABANAS PLANAS O DE CAJON</h1></label>
                      <article class="ac-small tableP">
                          <table>
                            <tr>
                              <th></th>
                              <th>INDIVIDUAL <br>1.80 X 2.80 MTS</th>
                              <th>MATRIMONIAL <br>2.00 X 2.80 MTS </th>
                              <th>QUEEN SIZE <br>2.00 X 2.80 MTS</th>
                              <th>KING SIZE <br>2.80 X 2.80 MTS </th>
                              <th>KING SIZE <br>3.00 X 2.80 MTS </th>
                              <th>KING SIZE <br>3.200 X 2.80 MTS </th>
                            </tr>
                            <tr>
                              <td>150 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>180 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>200 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>300 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                          </table>
                      </article>
                    </div>
                  <div>
                  <input id="ac-2" name="accordion-1" type="radio">
                  <label for="ac-2"><h1 class="txtTProducto">SABANAS PLANAS O DE CAJON CON BIES Y PIOLA</h1></label>
                  <article class="ac-medium tableP">
                    <table>
                      <tr>
                        <th></th>
                        <th>INDIVIDUAL <br>1.80 X 2.80 MTS</th>
                        <th>MATRIMONIAL <br>2.00 X 2.80 MTS </th>
                        <th>QUEEN SIZE <br>2.00 X 2.80 MTS</th>
                        <th>KING SIZE <br>2.80 X 2.80 MTS </th>
                        <th>KING SIZE <br>3.00 X 2.80 MTS </th>
                        <th>KING SIZE <br>3.200 X 2.80 MTS </th>
                      </tr>
                      <tr>
                        <td>150 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>180 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>200 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>300 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                    </table>
                  </article>
                  </div>
                </section>
                <!--     TERMINA ACORDION       -->
              </div>
            </div><!--TERMINA FUNDAS-->
            <div class="filterDiv rCama"><!--INICIA FUNDAS-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">FUNDAS</h1>
                    <div class="cuadroDetails">
                      <p>
                        CONTAMOS CON VARIEDAD DE TELAS COMO SON 50/50 POLIESTER/ ALGODÓN,
                        100% ALGODÓN Y MICROFIBRA 100% POLIESTER TACTO ALGODÓN ( SE SIENTE COMO ALGODÓN EGIPCIO),
                        ASI COMO DIFERENTES HILAJES QUE VAN DESDE 120 HILOS HASTA 500 HILOS.
                        EN LAS MEDIDAS QUE USTED REQUIERA.
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/fundas.jpg">
                </div>
              </div>
            </div><!--TERMINA FUNDAS-->
            <div class="filterDiv accor rCama"><!--INICIA PROTECTOR DE CAMA-->
              <div class="details">
                <!--     AGREGAR ACORDION       -->
                <section class="ac-container">
                  <div>
                      <input id="ac-21" name="accordion-2" type="radio">
                      <label for="ac-21"><h1 class="txtTProducto">FUNDAS HOTELERAS</h1></label>
                      <article class="ac-small tableP">
                          <table>
                            <tr>
                              <th></th>
                              <th>FUNDA ESTANDAR BLANCA <br> .52 x .80 </th>
                              <th>FUNDA QUEEN SIZE BLANCA <br> .52 x .90 </th>
                              <th>FUNDA KING SIZE BLANCA <br> .52 x 1.10 </th>
                            </tr>
                            <tr>
                              <td>150 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>180 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>200 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                            <tr>
                              <td>300 HILOS</td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                              <td><img src="images/ok.png" alt="Producto Existente"></td>
                            </tr>
                          </table>
                      </article>
                    </div>
                  <div>
                  <input id="ac-22" name="accordion-2" type="radio">
                  <label for="ac-22"><h1 class="txtTProducto">FUNDAS HOTELERAS CON BIES Y PIOLA</h1></label>
                  <article class="ac-medium tableP">
                    <table>
                      <tr>
                        <th></th>
                        <th>FUNDA ESTANDAR BLANCA <br> .52 x .80 </th>
                        <th>FUNDA QUEEN SIZE BLANCA <br> .52 x .90 </th>
                        <th>FUNDA KING SIZE BLANCA <br> .52 x 1.10 </th>
                      </tr>
                      <tr>
                        <td>150 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>180 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>200 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                      <tr>
                        <td>300 HILOS</td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                        <td><img src="images/ok.png" alt="Producto Existente"></td>
                      </tr>
                    </table>
                  </article>
                  </div>
                </section>
                <!--     TERMINA ACORDION       -->
              </div>
            </div><!--TERMINA PROTECTOR DE CAMA-->
            <div class="filterDiv rCama"><!--INICIA PROTECTOR DE CAMA-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">PROTECTOR DE CAMA</h1>
                    <div class="cuadroDetails">
                      <p>PROTECTOR DE COLCHON AHULADO CON TOALLIN Y RESORTE EN COLOR BLANCO. AHULADOS CON TOALLIN O FELPA CON RESORTE EN LAS CUATRO ESQUINAS. </p>
                      <table>
                        <tr>
                          <th>INDIVIDUAL 1.10 X 1.90 </th>
                          <td><img src="images/ok.png" alt="Producto Existente"></td>
                        </tr>
                        <tr>
                          <th>MATRIMONIAL 1.40 X 1.90 </th>
                          <td><img src="images/ok.png" alt="Producto Existente"></td>
                        </tr>
                        <tr>
                          <th>QUEEN SIZE  1.50 X 1.90 </th>
                          <td><img src="images/ok.png" alt="Producto Existente"></td>
                        </tr>
                        <tr>
                          <th>KING SIZE 2 X 1.50</th>
                          <td><img src="images/ok.png" alt="Producto Existente"></td>
                        </tr>
                      </table>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/protector.jpg">
                </div>
              </div>
            </div><!--TERMINA PROTECTOR DE CAMA-->
            <div class="filterDiv rCama"><!--INICIA COBERTORES-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">COBERTORES</h1>
                    <div class="cuadroDetails">
                      <p>
                        TENEMOS COBERTORES TERMICOS DE TELA POLAR FLANNEL ASI COMO DE ACRILAN Y LANA.
                        MANEJAMOS TODAS LAS MEDIDAS Y PESOS QUE DESEE EN VARIOS COLORES.
                         </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/cobertores.jpg">
                </div>
              </div>
            </div><!--TERMINA COBERTORES-->
            <div class="filterDiv rCama"><!--INICIA EDREDONES-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">EDREDONES</h1>
                    <div class="cuadroDetails">
                      <p>
                        HECHOS CON LA MAS ALTA CALIDAD EN TELAS LISAS Y ESTAMPADAS ASI COMO DIFERENTES ESPESORES
                        QUE VAN DESDE 200 GRS. HASTA 400 GRS. CONTAMOS CON VARIEDAD DE TELAS COMO SON 50/50
                        POLIESTER/ALGODÓN, 100% ALGODÓN Y MICROFIBRA 100% POLIESTER TACTO ALGODÓN
                        (SE SIENTE COMO ALGODÓN EGIPCIO), ASI COMO DIFERENTES HILAJES QUE VAN DESDE 120 HILOS
                        HASTA 500 HILOS. EN LAS MEDIDAS QUE USTED REQUIERA.
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/edredones.jpg">
                </div>
              </div>
            </div><!--TERMINA EDREDONES-->
            <!--TERMINA SECCION DE ROPA DE CAMA-->
            <div class="filterDiv rMesa tProIndv tProIndv"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/rMesa.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">MESA Y MANTELERIA</h1>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">MESA Y MANTELERIA</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rMesa"><!--INICIA MANTELERIA-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">MANTELERIA</h1>
                    <div class="cuadroDetails">
                      <p>
                        MANEJAMOS TODAS LAS MEDIDAS EN TELA GRANITA, TAMPA, ALGODONES,EMCAKES U TERGALES CON BORDADOS Y
                        FESTONES A SU GUSTO. ASI COMO SERVILLETAS, CUBREMANTELES, FORROS Y CINTAS PARA SILLA DE LA MISMA CALIDAD.
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/mantel.jpg">
                </div>
              </div>
            </div><!--TERMINA MANTELERIA-->
            <!--TERMINA SECCION DE MESA UTILERIA-->
            <div class="filterDiv rDecora tProIndv"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/rDecora.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">DECORACION</h1>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">DECORACION</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rDecora"><!--INICIA COJINES-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">COJINES</h1>
                    <div class="cuadroDetails">
                      <p>
                        REALIZAMOS TODO TIPO DE COJINES DECORATIVOS EN LAS MEDIDAS Y PESOS QUE USTED
                        REQUIERA EN TELAS LISAS Y ESTAMPADAS, CON RELLENOS DE FIBRA SINTETICA SILICONIZADA,
                        ASI COMO COJINES DE VIAJE DE ESPUMA VISCOELASTICA (TIPO MEMORY FOAM).
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/cojin.jpg">
                </div>
              </div>
            </div><!--TERMINA COJINES-->
            <div class="filterDiv rDecora"><!--INICIA CORTINAS-->
              <div class="details">
                <div class="imgProdcutoBOX">
                  <h1 class="txtTProducto">CORTINAS</h1>
                    <div class="cuadroDetails">
                      <p>
                        CONTAMOS CON CORTINAS PARA BAÑO DE TELA CON REPELENTE.
                        CORTINAS ANTIBACTERIALES PARA HOSPITALES HOETELERAS CON TERMATROL Y TERMALUM(BLACK OUT) TERMICAS IMPIDIENDO EL PASO DE LA LUZ EN 90%.
                      </p>
                    </div>
                </div>
                <div class="imgBoxProducto">
                  <img class="imagenAjustada" src="images/productos/cortinas.jpg">
                </div>
              </div>
            </div><!--TERMINA CORTINAS-->

    			</div> <!--TERMINA CONTENEDOR-->
    		</div>
      </div>
      <div class="cuentas">
        <div class="contTGralProd">
          <h1 class="tProdGral">NUESTROS CLIENTES</h1>
        </div>
        <div class="lineDivisor">
          <img class="" src="images/line.png">
        </div>
        <img class="imgCuentas" src="images/cuentas.png">
      </div>
      <div class="contacto">
        <div id="contact" class="ContMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d324.8730301736425!2d-99.23004359686047!3d19.528655621245807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d2be199a943%3A0x80373bc2258b1ebe!2sMecanismo+Creativo+MX+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1532994026054" width="99%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contForm">
          <!--INICIO DEL FORMULARIO-->
          <div class="cForm">
            <div class="contenedorFormBlue">
    			  	<form action="/action_page.php">
                <div class="txtForm">
                  <div class="contFormCampo">
                    <div class="campoForm">
                    <label class="lblForm" for="name"><b>*Nombre:</b></label>
                        <input class="textField" type="text" placeholder="Escriba su nombre" id="nombre" name="name" required="Please">
                    </div>
                    <div class="campoForm">
                      <label class="lblForm" for="email"><b>*Email:</b></label>
                          <input class="textField" type="email" placeholder="Enter Email" name="email" required="Please">
                    </div>
                    <div class="campoForm">
                      <label class="lblForm" for="tel"><b>*Teléfono:</b></label>
                      <input class="textField" type="tel" placeholder="Ingrese su Teléfono" name="phone" required="Please">
                    </div>
                    <div class="campoForm">
                      <label class="lblForm" for="asunto"><b>Asunto:</b></label>
                        <input class="textField" type="text" placeholder="Asunto del mensaje" name="phone" required="Please">
                    </div>
                      <label class="lblForm" for="tel"><b>*Comentario:</b></label>
                        <textarea class="txtArea txtComent" cols="30" rows="5" name="comentario" placeholder="Escriba su comentario o mensaje" required="Please"></textarea>
                  </div>
                  <div class="protectionInfo">
                    <p class="formLink">*Campo Obligatorio. Sus datos estan protegidos. Porfavor lea nuestro
                    <ins><a href="#"> Aviso de Privacidad</a></ins>.
                    </p>
                    <div>
                      <button class="button" style="vertical-align:middle;"><span>Enviar</span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="cDatos">
            <h1 class="tContacto">CONTACTO</h1>
            <div class="contTel">
              <p class="txtTel">
                TEL: <br>(55)  57 61 29 55<br>(55) 57 09 84 96<br>(55) 53 57 40 89
              </p>
              <p class="txtTel">
                bsdtextiles@yahoo.com.mx<br>ventas@mathewshome.com.mx
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer">
        <div class="contLegales">
          <div class="logoF">
            <img class="logoFooter" src="images/logoMATHEWSHOME_B.png" alt="Logo de Mathews Home">
          </div>
          <div class="logosRedes">
            <img class="logoRed" src="images/facebook.png" alt="Logo de facebook">
            <img class="logoRed" src="images/twitter.png" alt="Logo de twitter">
            <img class="logoRed" src="images/whatsapp.png" alt="Logo de whatsapp">
            <img class="logoRed" src="images/linkedin.png" alt="Logo de linkedin">
          </div>
          <div class="ContPrivacidad">
            <p class="txtP">Aviso de Privacidad</p>
            <p class="txtP">© 2018 Mathews Home. Derechos Reservados.</p>
          </div>

        </div>

      </div>
    </footer>
    <!-- 	 -->
    <script>

</script>

  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/effects.js" charset="utf-8"></script>
  </body>
</html>
