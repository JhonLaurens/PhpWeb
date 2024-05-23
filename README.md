**Proyecto: Hotel Paradise**

Este es un sitio web para el **Hotel Paradise**. El sitio web está construido utilizando **HTML, CSS y JavaScript**.

**Archivos:**

- **index.html:** Este es el archivo principal del sitio web. Contiene el código HTML para todo el **Hotel Paradise**.
- **style.css:** Este archivo contiene el código CSS para el sitio web del **Hotel Paradise**.
- **header.php:** Este archivo se incluye en el archivo **index.html** y contiene el código HTML para el encabezado del sitio web del **Hotel Paradise**.
- **images/* :** Esta carpeta contiene las imágenes utilizadas en el sitio web del **Hotel Paradise**.
- **owl.carousel.css:** Este archivo es una biblioteca CSS utilizada para crear carruseles en el **Hotel Paradise**.
- **owl.carousel.js:** Este archivo es una biblioteca JavaScript utilizada para crear carruseles en el **Hotel Paradise**.

**Características:**

- **Carrusel de banner:** El sitio web tiene un carrusel de banner en la página de inicio que muestra las ofertas del **Hotel Paradise**.
- **Formulario de reserva:** El sitio web tiene un formulario de reserva que permite a los usuarios reservar una habitación en el **Hotel Paradise**.
- **Sección Acerca de:** El sitio web tiene una sección Acerca de que proporciona información sobre el **Hotel Paradise**.
- **Sección de habitaciones:** El sitio web tiene una sección de habitaciones que muestra los diferentes tipos de habitaciones disponibles en el **Hotel Paradise**.
- **Sección de galería:** El sitio web tiene una sección de galería que muestra fotos del **Hotel Paradise**.
- **Sección de servicios:** El sitio web tiene una sección de servicios que proporciona información sobre los servicios que ofrece el **Hotel Paradise**.
- **Sección de testimonios:** El sitio web tiene una sección de testimonios que muestra testimonios de huéspedes anteriores del **Hotel Paradise**.

**Notas adicionales:**

- El sitio web es **responsivo**, lo que significa que se verá bien en todos los dispositivos, incluidos computadoras de escritorio, tabletas y teléfonos inteligentes.
- El sitio web utiliza **Font Awesome** para los iconos.
- El sitio web utiliza **Owl Carousel** para crear carruseles en el **Hotel Paradise**.



codigo SQL con el cual se crea la Base de Datos "hotel"

CREATE DATABASE hotel;
USE hotel;

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT,
  nombre VARCHAR(50),
  email VARCHAR(100) UNIQUE,
  contraseña VARCHAR(255),
  tipo_usuario ENUM('admin', 'usuario'),
  PRIMARY KEY (id_usuario)
);

CREATE TABLE habitaciones (
  id_habitacion INT AUTO_INCREMENT,
  nombre_habitacion VARCHAR(50),
  precio DECIMAL(10, 2),
  estado ENUM('disponible', 'ocupada'),
  PRIMARY KEY (id_habitacion)
);

CREATE TABLE reservas (
  id_reserva INT AUTO_INCREMENT,
  id_usuario INT,
  id_habitacion INT,
  fecha_entrada DATE,
  fecha_salida DATE,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
  FOREIGN KEY (id_habitacion) REFERENCES habitaciones(id_habitacion)
);

CREATE TABLE contactenos (
  id_contacto INT AUTO_INCREMENT,
  nombre VARCHAR(50),
  email VARCHAR(100),
  telefono VARCHAR(20),
  mensaje TEXT,
  PRIMARY KEY (id_contacto)
);

prueba