<?php

// Findfont zal het font zoeken en opslaan als font object.
$font = PDF_findfont($pdf, "Helvetica-Bold",  "winansi",0);
pdf_setfont($pdf, $font, 14);

// Tekst afdrukken
pdf_show_xy($pdf, "Look at the World, We are in Holland!,", 50, 750);
pdf_show_xy($pdf, "Look at www.koopeenpaard", 50, 730);

// notities toevoegen
PDF_add_note($pdf, 245, 500, 550, 770, "Ja ja, met php gemaakt, al zeg ik het zelf ", "Mijn notitie, werkt het ?", "note", 0);
?>
