<!--hola-->
imagenes
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IMAGENES</title>
    </head>
    <body>
        <?php
        if ($gestor = opendir('fotos'))
        {
          echo "<table border=1>";
          echo "<tr>";
          $e=0;
          while (false !==($archivo = readdir($gestor)))
          {
              if ($archivo!="." && $archivo!="..")
                 {
                  if ($e==4)
                      {
                      $e=0;
                      echo "<tr>";
                      echo"</tr>";
                  }
                  $e++;
                   echo "<td>";
                  echo "<a herf=fotos/$archivo><img src=fotos/$archivo></a>";
                  echo "</td>";
                  
                  
              }   
          
          }
        echo"</tr>";  
        echo "</table>";
        closedir ($gestor);
          
        }
       ?>
    </body>
</html>

