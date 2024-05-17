<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paradise Hotel</title>
  <link rel="icon" href="./images/logo.png">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>

<!--llamar header.php-->
<?php include 'header.php'; ?>

<main>
<script>
    var menulist = document.getElementById('menulist'); // obtenemos el elemento menulist
    menulist.style.maxHeight = "0px";

    function menutoggle() {     // función que se ejecuta cuando se hace click en el icono de las barras
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>


  <section class="home"> <!-- home es una sección que contiene el banner -->
    <div class="content">
      <div class="owl-carousel owl-theme"> <!-- owl-carousel es una clase que se usa para crear un carrusel -->
        <div class="item">
          <img src="images/banner-1.png" alt=""> <!-- alt es un atributo que se usa para describir la imagen -->
          <div class="text">
          <h1>Escápate al Paraíso</h1>
          <p>¡Explora un mundo de lujo y comodidad en nuestro hotel! Reserva ahora y descubre el verdadero significado de la relajación.</p>

            </p>
            <div class="flex">
              <button class="primary-btn">DESCUBRE</button> <!-- primary-btn es una clase que se usa para dar estilo a los botones -->
              <button class="secondary-btn">CONTACTANOS</button> 
            </div>
          </div>
        </div>
        <div class="item"> 
          <img src="images/banner-2.png" alt="">
          <div class="text">
          <h1>Descubre el Lujo</h1>
          <p>¡Sumérgete en el lujo y la elegancia de nuestro hotel! Reserva tu estancia hoy y vive una experiencia inolvidable.</p>

            <div class="flex">
              <button class="primary-btn">DESCUBRE</button>
              <button class="secondary-btn">CONTACTANOS</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-3.png" alt="">
          <div class="text">
          <h1>Relájate y Disfruta</h1>
          <p>¡Haz una pausa en la rutina y déjate mimar en nuestro paraíso! Reserva ahora y vive momentos de pura tranquilidad.</p>

            <div class="flex">
              <button class="primary-btn">DESCUBRE</button>
              <button class="secondary-btn">CONTACTANOS</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script> <!-- script que se usa para crear un carrusel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({ // se usa la clase owl-carousel para crear un carrusel
      loop: true,
      margin: 0,
      nav: true,
      autoplay: true,
      autoplayTimeout: 5000,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"], 
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>   




  <section class="book"> <!-- book es una sección que contiene el formulario de reserva -->
    <div class="container flex_space">
      <div class="text">
        <h1> <span>Book </span> Your Rooms </h1>
      </div>
      <div class="form">
        <form class="grid">
          <input type="date" placeholder="Araival Date">
          <input type="date" placeholder="Departure Date">
          <input type="number" placeholder="Adults">
          <input type="number" placeholder="Childern">
          <input type="submit" value="CHECK AVAILABILITY">
        </form>
      </div>
    </div>
  </section>



  <section class="about top"> <!-- about es una sección que contiene información sobre el hotel -->
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>Bienvenido a</h1>
          <h2>Hotel Paradise</h2>
        </div>
        <p>¡Bienvenido al lugar donde los sueños se hacen realidad y los momentos se convierten en recuerdos eternos! En ParadiseHotel, estamos comprometidos a brindarte una experiencia inolvidable llena de lujo, comodidad y hospitalidad excepcional. Deja que nuestros paisajes impresionantes y nuestro servicio impecable te guíen hacia una escapada rejuvenecedora y llena de alegría. ¡Tu aventura comienza aquí!</p>
        <button class="primary-btn">SOBRE NOSOTROS</button>
      </div>
      <div class="right">
        <img src="images/about.png" alt="">
      </div>
    </div>
</section>


  <section class="counter top"> <!-- counter es una sección que contiene información sobre el hotel -->
    <div class="container grid">
      <div class="box">
        <h1 id="contadorClientes">2500</h1>
        <hr>
        <span>Clientes</span>
      </div>
      <script>
  // Selecciona el elemento por su ID
  var contadorClientes = document.getElementById('contadorClientes');
  
  // Función para incrementar el número de clientes
  function incrementarClientes() {
    var numeroActual = parseInt(contadorClientes.innerText);
    contadorClientes.innerText = numeroActual + 1;
  }
  
  // Establece un temporizador para incrementar el número cada 3 segundos
  setInterval(incrementarClientes, 3000);
</script>
      <div class="box">
        <h1>1250</h1>
        <hr>
        <span>Clientes felices</span>
      </div>
      <div class="box">
        <h1>150</h1>
        <hr>
        <span>Personal Experto</span>
      </div>
            <div class="box">
              <h1 id="contador">2600</h1>
              <hr>
              <span>Recomendaciones</span>
            </div>
          </div>
      <script>
        // Selecciona el elemento por su ID
        var contador = document.getElementById('contador');
        
        // Función para incrementar el número
        function incrementarNumero() {
          var numeroActual = parseInt(contador.innerText);
          contador.innerText = numeroActual + 1;
        }
        
        // Establece un temporizador para incrementar el número cada 2 segundos
        setInterval(incrementarNumero, 5000);
      </script>
  </section>


  <section class="rooms"> <!-- rooms es una sección que contiene información sobre las habitaciones -->
    <div class="container top">
      <div class="heading">
        <h1>EXPLORA</h1>
        <h2>Nuestras Habitaciones</h2>
        <p>¡Bienvenido a tu hogar lejos de casa! Descubre la comodidad y el lujo en cada rincón. Nuestras habitaciones están diseñadas para ofrecerte una experiencia inolvidable. ¡Ven y sumérgete en un mundo de confort y estilo!</p>
      </div>

      <div class="content mtop"> <!-- mtop es una clase que se usa para dar margen superior -->
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="images/room-1.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Matrimonial</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-2.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Ejecutiva</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-3.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Hogar</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i> <!-- fa es una clase que se usa para agregar iconos en estrellas -->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-4.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Campestre</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-5.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Sencilla</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-6.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación VIP</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-7.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Familiar</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-8.png" alt="">
            </div>
            <div class="text">
              <h2>Habitación Tranquilidad</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
              </p>
              <div class="button flex">
                <button class="primary-btn">BOOK NOW</button>
                <h3>$250 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>  // script que se usa para crear un carrusel
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>



  <section class="gallery"> <!-- gallery es una sección que contiene las fotos del hotel -->
      <div class="container top">
        <div class="heading">
          <h1>PHOTOS</h1>
          <h2>Our Gallery</h2>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        </div>
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel2 owl-theme">
          <div class="items">
            <div class="img">
              <img src="images/gallery-1.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-2.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-3.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-4.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-5.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-6.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-4.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-3.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-1.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
          <div class="items">
            <div class="img">
              <img src="images/gallery-6.png" alt="">
            </div>
            <div class="overlay">
              <span class="fa fa-plus"> </span>
              <h3>Photo Title Here.</h3>
            </div>
          </div>
        </div>
      </div>
    </section> 


    <script>
      $('.owl-carousel2').owlCarousel({
        loop: true,
        margin: 0,
        nav: true, // Habilitar la navegación
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        navText: [
          '<i class="fa fa-chevron-left"></i>',
          '<i class="fa fa-chevron-right"></i>'
        ],
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 4,
          },
          1000: {
            items: 6
          }
        }
      })
    </script>

  <section class="services top"> <!-- services es una sección que contiene los servicios del hotel -->
    <div class="container">
      <div class="heading">
        <h1>SERVICES</h1>
        <h2>Our Services</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      </div>


      <div class="content flex_space"> <!-- flex_space significa que los elementos se distribuyen de manera uniforme en el contenedor -->
        <div class="left grid2">
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-champagne-glasses"></i>
              <h3>Delious Food</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-person-biking"></i>
              <h3>Fintness</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-utensils"></i>
              <h3>Inhouse Restaurant</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-spa"></i>
              <h3>Beauty Spa</h3>
            </div>
          </div>
        </div>
        <div class="right">
          <img src="images/service.png" alt="">
        </div>
      </div>
    </div>
  </section>




  <section class="Customer top"> <!-- Customer es una sección que contiene los testimonios de los clientes -->
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Con más de una década de experiencia en desarrollo web y diseño, he dedicado mi carrera a crear experiencias digitales excepcionales. Mi pasión por la programación se refleja en cada línea de código que escribo, asegurando la calidad y el rendimiento de cada proyecto en el que trabajo. Soy Jhon Dayron Jaramillo Laurens, y estoy aquí para hacer realidad tus ideas con creatividad y profesionalismo.</p>
          <h3>Jhon Dayron Jaramillo Laurens</h3>
        </div>

        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>Como desarrollador web con más de diez años de experiencia, he perfeccionado mi arte en la creación de soluciones digitales innovadoras y de alta calidad. Mi compromiso con la excelencia y la atención al detalle se reflejan en cada proyecto que emprendo. Soy Luis Eduardo Quiñonez, y estoy aquí para superar tus expectativas y proporcionarte una experiencia de usuario excepcional en cada sitio web que construyo.</p>
          <h3>Luis Eduardo Quiñonez</h3>
        </div>
        
        </div>
      </div>
    </div>
  </section>
  <script> // script que se usa para crear un carrusel
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1,
        },
        1000: {
          items: 1
        }
      }
    })
  </script>



  

  <section class="newsletter mtop"> <!-- newsletter es una sección que contiene el formulario de suscripción -->
    <div class="container flex_space">
      <h1>Subscribe to Our Newsletter</h1>
      <input type="text" placeholder="Your Email">
      <input type="text" value="Subscribe">
    </div>
  </section>

 
  

</main>



<!--llamar footer.php-->

<?php include 'footer.php'; ?>


</body>
</html>
 


  