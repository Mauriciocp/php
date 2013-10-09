<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SUMA</title>

    </head>
    <body>
        <?php

        function suma($a, $b) {
            return $a + $b;
        }

        $valor1 = 10;
        $valor2 = 20;

        $resultado = suma($valor1, $valor2);

        echo 'El resultado es',$resultado;
        ?>
    </body>
</html>
