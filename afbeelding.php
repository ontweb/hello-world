<?php

// Afbeeldingobject maken
$Afbeelding1  = PDF_open_image_file($pdf "jpeg", "mijnAfbeelding.jpg");

// Afbeelding plaatsen. Met de laatste parameter kan je de kwaliteit bepalen
PDF_place_image($pdf, $Afbeelding1, 50, 650, 0.6);

?>
