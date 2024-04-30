<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Title -->
        <title>Document</title>

        <!-- Stylesheet -->
        <link rel="stylesheet" href="./estilos.css">
    </head>
    <body>
        <!-- Background div -->
        <div id="fondo">
            <!-- Form div -->
            <div class="formulario">
                <!-- Form title -->
                <h1>Calculadora</h1>

                <!-- Form -->
                <form action="calcular.php" method="post">
                    <!-- Number inputs -->
                    <input type="text" name="num1" placeholder="Ingrese un número">
                    <input type="text" name="num2" placeholder="Ingrese un número">

                    <!-- Operation selection -->
                    <select name="operacion">
                        <option value="sumar">Sumar</option>
                        <option value="restar">Restar</option>
                        <option value="multiplicar">Multiplicar</option>
                        <option value="dividir">Dividir</option>
                    </select>

                    <!-- Submit button -->
                    <input type="submit" value="Calcular">
                </form>
            </div>
        </div>
    </body>
</html>