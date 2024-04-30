<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <div class="result">
        <?php
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operacion'];
        if ($op == 'sumar') {
            $res = $n1 + $n2;
        } elseif ($op == 'restar') {
            $res = $n1 - $n2;
        } elseif ($op == 'multiplicar') {
            $res = $n1 * $n2;
        } elseif ($op == 'dividir') {
            if ($n2 != 0) {
                $res = $n1 / $n2;
            } else {
                echo "<p class='error'>Error: División por cero no está permitida.</p>";
                exit;
            }
        }
        echo "<p>El resultado de la operación es: $res</p>";
        ?>
    </div>
</body>
</html>