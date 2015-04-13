<?php

// Kleur van de lijn bepalen. De laatste 3 parameter zijn de rood, groen en blue kleur parameters. 1 = 100%
PDF_setcolor($pdf, "stroke", "rgb", 1, 0, 0);

//Als tweede gaan we vertellen waar we willen beginnen van de lijn te tekenen
PDF_moveto($pdf, 20, 735);

//We tekenen een lijn naar het tweede punt
PDF_lineto($pdf, 575, 735);

// Tekenen van de lijn
PDF_stroke($pdf);

Rechthoek en cirkel:
// kleur van opvulling
PDF_setcolor($pdf, "fill", "rgb", 1, 0 1);
// kleur van lijnen
PDF_setcolor($pdf, "stroke", "rgb", 0, 1, 0);
// rechthoek tekenen
PDF_rect($pdf, 50, 500, 200, 300);
// cirkel tekenen
PDF_ circle ($pdf, 50, 500, 200, 300);

Parameters openen pagina:
// Volledige pagina openen
pdf_set_parameter($pdf, "openaction", "fitpage"); // Openingsactie
// Trumbnails openen
pdf_set_parameter($pdf, "openmode", "thumbnails");

?>
