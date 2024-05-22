<header>
    <div class="content flex_space"><!-- flex_space significa que los elementos se distribuyen de manera uniforme en el contenedor -->
      <div class="logo">
        <img src="images/logo.png" alt=""> <!-- alt es un atributo que se usa para describir la imagen -->
      </div>
      <div class="navlinks"><!-- navlinks es un contenedor que contiene los elementos de navegación -->
        <ul id="menulist">
          <li><a href="#home">inicio</a> </li>
          <li><a href="#about">sobre nosotros</a> </li>
          <li><a href="#rooms">habitaciones</a> </li>
          <li><a href="#contact">contactanos</a> </li>
          <li> <i class="fa fa-search"></i> </li>
          <li> <button class="primary-btn">Iniciar Sesión</button> </li>
          <a href="views/registro.php"><button class="primary-btn">Registrarse</button></a><!-- primary-btn es una clase que se usa para dar estilo a los botones -->
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span> <!-- fa fa-bars es una clase que se usa para mostrar el icon de las barras -->
      </div>
    </div>
</header>
 


