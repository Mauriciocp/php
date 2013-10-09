<?php 
$P = 'henry esta viendo la fox esport center'; 
$q= "Manchester United vs Milan";
?>

<?php
$w = $P;
$w .= $q;
echo $w;
?>
<br />
 
     <li>
Minusculas : <?php echo strtolower($w);?><br />
</li>
<li>
Mayusculas: <?php echo strtoUpper($w);?><br />

Primera Letra Mayusculas: <?php echo ucfirst($P);?><br />

la primera letra de cada palabra en mayusculas: <?php echo ucwords($w);?><br     />
</li> 
<br />

longitud: <?php echo strlen ($d);?><br />
recortar: <?php echo $w = $P . trim($q) ?><br />
encontrar: <?php echo strstr ($q, "ches"); ?><br />
sustituir palabra : <?php echo str_replace ( "viendo", "escuchando", $w); ?><br />
