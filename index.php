<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MATHEWS HOME</title>
  </head>
  <a href="#">
    <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
  </a>
  <body id="mhome"data-spy="scroll" data-target=".navbar" data-offset="60">
    <header id="header">
      <div class="contHeader colorSemiDegradado">
        <div class="contMenus">
          <div id="navbar1">
            <a href="#">INICIO</a>
            <a href="#nosotros">¿QUIÉNES SOMOS?</a>
            <div class="contLogo">
              <div class=" circulo"></div>
              <img class="logoHeader" src="images/Logo_mathews.png" alt="Logo de Mathews Home">
            </div>
            <a href="#PRODUCTS">PRODUCTOS</a>
            <a href="#contact">CONTACTO</a>
          </div>
        </div>
        <h1 class="titleHome">TU TRANQUILIDAD</h1>
        <h2 class="SubTitleHome">es nuestro compromiso</h2>
        <button class="btnHome">CONTACTO</button>
      </div>
    </header>
    <section id="section">
      <div class="about">
        <div class="contAbout"></div>
        <div class="boxAbout">
          <div id="nosotros" class="txtAbout">
            <h3 class="txtDer">¿QUIÈNES SOMOS?</h3>
            <p>
              MATHEWS dedicada a la fabricación de blancos en general, desde 1990 tenemos 27 años de experiencia en el mercado brindando la máxima calidad en productos para el área de blancos como son sábanas, fundas, almohadas, protectores de colchón, colchas, toallas, etc.
              <br><br>
              Siendo fabricantes y distribuidores, proveemos nuestro servicio a prestigiosos hoteles, hospitales y restaurantes, cubriendo así una demanda de nuestros productos a más de 500 clientes tanto en la República Mexicana como en el extranjero.
              <br><br>
              Nos hemos distinguido por ofrecer al cliente calidad, precio y atención en todos los productos y servicios que ofrecemos, lo que nos ha colocado como una de las empresas de productos textiles para hotelería, restaurantera y hogar.
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

              <!--
              <div class="txtValor1">
                Ser una empresa de clase mundial que compita en términos de calidad y eficiencia con cualquier otra empresa del mundo.
                <br><br>
                Se utilizan todos los instrumentos modernos de administración, tecnología y procesos, que cumple adecuadamente los requisitos de calidad.
              </div>
              <div class="txtValor2">
                <h2>VISION</h2>
              </div>
            -->

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
    			  <button class="fbtn" onclick="filterSelection('rBanio')">ROPA DE BAÑO</button>
    			  <button class="fbtn" onclick="filterSelection('rMesa')">MESA / MANTELERIA</button>
    			  <button class="fbtn" onclick="filterSelection('rCama')">ROPA DE CAMA</button>
    			  <button class="fbtn" onclick="filterSelection('rDecora')">DECORACIÓN</button>
    			</div>

    			<div class="container"><!--INICIA CONTENEDOR-->
    				<div class="filterDiv rCama"><!--INICIA TITULO PRODUCTO-->
    				  <div class="card">
    				    <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/ropaCama2.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">ROPA DE CAMA</h1>
                      <p class="txtTProd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
    				    <div class="details opcT"><h1 class="txtTPRo">ROPA DE CAMA</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
    				  </div>
    				</div><!--TERMINA TITITULO PRODUCTO-->
    				<div class="filterDiv rCama"><!--INICIA PRODUCTO-->
    				  <div class="card">
    				    <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/almohada.jpg">
                  <h1 class="txtPRODUCTO">ALMOHADAS</h1>
                </div>
    				    <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/almohada.jpg">
                  </div>
                </div>
    				  </div>
    				</div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/sabana.jpg">
                  <h1 class="txtPRODUCTO">SABANAS</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/sabana.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA PRODUCTO-->
    				  <div class="card">
    				    <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/fundas.jpg">
                  <h1 class="txtPRODUCTO">FUNDAS</h1>
                </div>
    				    <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/fundas.jpg">
                  </div>
                </div>
    				  </div>
    				</div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/protector.jpg">
                  <h1 class="txtPRODUCTO">PROTECTOR DE COLCHÓN</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/protector.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA PRODUCTO-->
    				  <div class="card">
    				    <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/cobertores.jpg">
                  <h1 class="txtPRODUCTO">COBERTORES</h1>
                </div>
    				    <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/cobertores.jpg">
                  </div>
                </div>
    				  </div>
    				</div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rCama"><!--INICIA PRODUCTO-->
    				  <div class="card">
    				    <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/edredones.jpg">
                  <h1 class="txtPRODUCTO">EDREDONES</h1>
                </div>
    				    <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/edredones.jpg">
                  </div>
                </div>
    				  </div>
    				</div><!--TERMINA PRODUCTO-->
            <!--TERMINA SECCION DE ROPA DE CAMA-->
            <div class="filterDiv rBanio"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/ropaBanio.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">ROPA DE BAÑO</h1>
                      <p class="txtTProd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">ROPA DE BAÑO</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rBanio"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/toalla.jpg">
                  <h1 class="txtPRODUCTO">TOALLAS</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/toalla.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rBanio"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/bata1.jpg">
                  <h1 class="txtPRODUCTO">BATA DE BAÑO</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/bata1.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
<!--TERMINA SECCION DE ROPA DE BAÑO-->
            <div class="filterDiv rMesa"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/rMesa.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">MESA Y MANTELERIA</h1>
                      <p class="txtTProd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">MESA Y MANTELERIA</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rMesa"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/mantel.jpg">
                  <h1 class="txtPRODUCTO">MANTELERIA</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/mantel.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <!--TERMINA SECCION DE MESA UTILERIA-->
            <div class="filterDiv rDecora"><!--INICIA TITULO PRODUCTO-->
              <div class="card">
                <div class="imgBx">
                  <img class="imagenAjustada" src="images/productos/rDecora.jpg" height="181" width="335">
                  <div class="tittleProducto">
                      <h1 class="txtTPRo">DECORACION</h1>
                      <p class="txtTProd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="details opcT"><h1 class="txtTPRo">DECORACION</h1>
                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
              </div>
            </div><!--TERMINA TITITULO PRODUCTO-->
            <div class="filterDiv rDecora"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/cojin.jpg">
                  <h1 class="txtPRODUCTO">COJINES</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/cojin.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->
            <div class="filterDiv rDecora"><!--INICIA PRODUCTO-->
              <div class="card">
                <div class="imgBx bProd">
                  <img class="imagenAjustada" src="images/productos/cortinas.jpg">
                  <h1 class="txtPRODUCTO">CORTINAS</h1>
                </div>
                <div class="details">
                  <div class="imgProdcutoBOX">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="cuadroDetails">

                      </div>
                  </div>
                  <div class="imgBoxProducto">
                    <img class="imagenAjustada" src="images/productos/cortinas.jpg">
                  </div>
                </div>
              </div>
            </div><!--TERMINA PRODUCTO-->

    			</div> <!--TERMINA CONTENEDOR-->
    		</div>
        <div class="lineDivisor">
          <img class="" src="images/line.png">
        </div>
      </div>
      <div class="cuentas">
        <img class="" src="images/cuentas.png">
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
            <img class="logoFooter" src="images/Logo_mathews.png" alt="Logo de Mathews Home">
          </div>
          <div class="logosRedes">
            <img class="logoRed" src="images/facebook.png" alt="Logo de facebook">
            <img class="logoRed" src="images/twitter.png" alt="Logo de facebook">
            <img class="logoRed" src="images/whatsapp.png" alt="Logo de facebook">
          </div>
          <div class="ContPrivacidad">
            <p class="txtP">Políticas de Privacidad</p>
            <p class="txtP">© 2018 Mathews Home. Derechos Reservados.</p>
          </div>

        </div>

      </div>
    </footer>
    <!-- 	 -->
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>

    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/effects.js" charset="utf-8"></script>
  </body>
</html>
