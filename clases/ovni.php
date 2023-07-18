<?php

    require_once("classOvni.php");

    $ovni1 = new Ovni("Gris","Azul","Redonda");
    $color1 = $ovni1 -> getColor1();
    echo "<br>".$color1 ."<br>";
    $ovni1 = new Ovni("Gris","Azul","Redonda");
    $color2 = $ovni1 -> getColor2();
    echo "<br>".$color2."<br>";
    $ovni1 = new Ovni("Gris","Azul","Redonda");
    $forma = $ovni1 -> getForma();
    echo "<br>".$forma."<br>  ";  

?>