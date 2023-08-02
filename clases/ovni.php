<?php

require_once("classOvni.php");

$ovni1 = new Ovni("Gris", "Azul", "Redonda");
$color1 = $ovni1->getColor1();
$color2 = $ovni1->getColor2();
$forma = $ovni1->getForma();

echo "<br>" . $color1 . "<br>";
echo "<br>" . $color2 . "<br>";
echo "<br>" . $forma . "<br>";

?>