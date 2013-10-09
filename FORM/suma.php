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
        $n1 = 10;
        $n2 = 2;
        $n3 = 3;
        $suma = $n1 + $n2;
        $mult = $n1 * $n3;

        $div = $suma / $mult;
        ?>
        <h1>infomacion</h1>
        <?php
        echo "la suma es" . $suma . "<br>";
        echo "la multiplicaciones" . $mult . "<br>";
        echo "la divicion es" . $div;
        ?>
    </body>
</html>
