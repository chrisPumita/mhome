<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/effects.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>MATHEWS HOME</title>
  </head>
  <body>
    <header id="header">
      <div class="contHeader colorSemiDegradado">
        <div class="contMenus">
          <div id="navbar">
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
              MATHEWS dedicada ala fabricación de blancos en general, desde 1990 tenemos 27 años de experiencia en el mercado brindando la máxima calidad en productos para el área de blancos como son sábanas, fundas, almohadas, protectores de colchón, colchas, toallas, etc.
              <br><br>
              Siendo fabricantes y distribuidores, proveemos nuestro servicio a prestigiosos hoteles, hospitales y restaurantes, cubriendo así una demanda de nuestros productos a más de 500 clientes tanto en la República Mexicana como en el extranjero.
              <br><br>
              Nos hemos distinguido por ofrecer al cliente calidad, precio y atención en todos los productos y servicios que ofrecemos, lo que nos ha colocado como una de las empresas de productos textiles para hotelería, restaurantera y hogar.
            </p>
          </div>
          <div class="valoresAbout">
            <div class="boxValor">
              <div class="txtValor1">
                Ser una empresa de clase mundial que compita en términos de calidad y eficiencia con cualquier otra empresa del mundo.
                <br><br>
                Se utilizan todos los instrumentos modernos de administración, tecnología y procesos, que cumple adecuadamente los requisitos de calidad.
              </div>
              <div class="txtValor2">
                <h2>VISION</h2>
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
    			  <button class="fbtn" onclick="filterSelection('comercial')">ROPA DE BAÑO</button>
    			  <button class="fbtn" onclick="filterSelection('residencial')">MESA / MANTELERIA</button>
    			  <button class="fbtn" onclick="filterSelection('ligera')">ROPA DE CAMA</button>
    			  <button class="fbtn" onclick="filterSelection('decoracion')">DECORACIÓN</button>
    			</div>

    			<div class="container"><!--INICIA CONTENEDOR-->
    				<div class="filterDiv ligera"><!--INICIA TITULO PRODUCTO-->
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
    				<div class="filterDiv ligera"><!--INICIA PRODUCTO-->
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
            <div class="filterDiv ligera"><!--INICIA PRODUCTO-->
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
            <div class="filterDiv ligera"><!--INICIA PRODUCTO-->
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
            <div class="filterDiv ligera"><!--INICIA PRODUCTO-->
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
            <div class="filterDiv ligera"><!--INICIA PRODUCTO-->
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
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> BANCOS </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> CENTRO COMERCIALES </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> ESCUELAS </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> ESTADIOS </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> HOSPITALES </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> HOTELES </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> IGLESIAS </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> OFICINAS </div>
    				  </div>
    				</div>
    				<div class="filterDiv comercial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> UNIVERSIDADES </div>
    				  </div>
    				</div>
    				<div class="filterDiv residencial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> CASAS </div>
    				  </div>
    				</div>
    				<div class="filterDiv residencial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> DEPARTAMENTOS </div>
    				  </div>
    				</div>
    				<div class="filterDiv residencial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> LOFTS </div>
    				  </div>
    				</div>
    				<div class="filterDiv residencial">
    				  <div class="card">
    				    <div class="imgBx bProd"> <img class="imagenAjustada" src="images/productos/ropaCama2.jpg"> </div>
    				    <div class="details"> RESIDENCIAS </div>
    				  </div>
    				</div>
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
        <div class="ContMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d324.8730301736425!2d-99.23004359686047!3d19.528655621245807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d2be199a943%3A0x80373bc2258b1ebe!2sMecanismo+Creativo+MX+S.A.+de+C.V.!5e0!3m2!1ses-419!2smx!4v1532994026054" width="99%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contForm">
          
        </div>
      </div>
    </section>
    <footer>
      <div class="footer">

      </div>
    </footer>
    <!-- 	Script Bootstrap JS Ref Navegator -->
  <script>
  $(document).ready(function(){$('body').scrollspy({target: ".navbar", offset: 50});$("#header a").on('click', function(event) {if (this.hash !== "") {event.preventDefault();
         var hash = this.hash;$('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }  // End if
    });
  });

  </script>
  <script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "showFil");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "showFil");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

  // Add active class to the current button (highlight it)
  var btnContainerF = document.getElementById("myBtnFilContainer");
  var btns = btnContainerF.getElementsByClassName("fbtn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var currentF = document.getElementsByClassName("active");
      currentF[0].className = currentF[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
  </body>
</html>
