<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../css/sobreNosotros.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Hotel Paraíso - Medellín</title>
</head>

<!--llamar headerHome.php-->

<section>

<?php include 'headerHome.php'; ?>


</section>




<body>
    <header>
        <h1>Hotel Paraíso</h1>
        <p>Un oasis de confort y hospitalidad en Medellín</p>
    </header>
    <main>
        <section class="seccion-vision">
            <img src="../images/logo.png" alt="Imagen de la visión del hotel">
            <h2>Visión</h2>
            <p>Ser el hotel de referencia en Medellín, reconocido por su excelencia en el servicio, la comodidad de sus instalaciones y su compromiso con la sostenibilidad. Un oasis de paz y confort donde cada huésped se sienta como en casa, creando recuerdos inolvidables.</p>
        </section>
        <section class="seccion-mision">
            <img src="../images/blog-1.png" alt="Imagen de la misión del hotel">
            <h2>Misión</h2>
            <p>Brindar a nuestros huéspedes una experiencia única e inigualable, superando sus expectativas a través de un servicio personalizado, instalaciones de primera categoría y un compromiso con la comunidad y el medio ambiente.</p>
        </section>
        <section class="seccion-valores">
            <img src="../images/blog-2.png" alt="Imagen de los valores del hotel">
            <h2>Valores</h2>
            <ul class="grid-list">
                <li><strong>Excelencia:</strong> Buscamos la perfección en todo lo que hacemos, desde la atención al cliente hasta la gestión de nuestras instalaciones.</li>
                <li><strong>Compromiso:</strong> Nos dedicamos con pasión a brindar un servicio de calidad y a satisfacer las necesidades de nuestros huéspedes.</li>
                <li><strong>Respeto:</strong> Valoramos a nuestros huéspedes, empleados, proveedores y a la comunidad en la que nos encontramos.</li>
                <li><strong>Sostenibilidad:</strong> Nos comprometemos a minimizar nuestro impacto ambiental y a promover prácticas responsables.</li>
                <li><strong>Integridad:</strong> Actuamos con honestidad y transparencia en todas nuestras relaciones.</li>
                <li><strong>Trabajo en equipo:</strong> Colaboramos de manera efectiva para alcanzar objetivos comunes y crear un ambiente de trabajo positivo.</li>
            </ul>
        </section>
    </main>
    
    <!--llamar footer.php-->

    <?php include '../views/footerHome.php'; ?>

</body>
</html>