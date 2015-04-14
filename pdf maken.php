<?php

// nieuw pdf object aanmaken
$pdf = pdf_new();

// PDF maken in geheugen maar nog niet wegschrijven, dit kan d.m.v. laatste parameter niet invullen:
PDF_open_file($pdf, "");

pdf_set_info($pdf, "Author", "Lorena"); // Auteur instellen
pdf_set_info($pdf, "Title", "Mijn eerste pdf"); // Titel instellen
pdf_set_info($pdf, "Creator", "Lorena");    // Maker instellen
pdf_set_info($pdf, "Subject", "Mijn eerste pdf"); // Onderwerp instellen
pdf_set_info($pdf, "Keywords", "pdf phphulp tutorial "); // keywords instellen

// Acties als de pagina word geopend
// Volledige pagina openen
pdf_set_parameter($pdf, "openaction", "fitpage"); // Openingsactie
// Trumbnails openen
pdf_set_parameter($pdf, "openmode", "thumbnails");

//Grootte van de pdf instellen. A4 is 595 x 842 en Letter is 612 x 792.
pdf_begin_page($pdf, 595, 842);

//Lettertype instellen
// Findfont zal het font zoeken en opslaan als font object.
$font = PDF_findfont($pdf, "Helvetica-Bold",  "winansi",0);
pdf_setfont($pdf, $font, 14);

// tekst afdrukken
pdf_show_xy($pdf, "Look at the World, We are in Holland!,", 50, 750);
pdf_show_xy($pdf, "www.maketheday.nl", 50, 730);

// notities toevoegen
pdf_add_note($pdf, 245, 500, 550, 770, "Ja ja, met php gemaakt, al zeg ik het zelf ", "Mijn notitie, werkt het ?", "note", 0);

// Afbeelding openen
$image = PDF_load_image($pdf, "gif", "test.gif", "");

// Afbeelding plaatsen, laatste parameter is de kwaliteit (0.6 = 60 %)
PDF_fit_image ( $pdf, $image, 50, 50, "scale 0.5" );

// Afbeelding sluiten
pdf_close_image($pdf, $gif_image);

// einde van de pagina
pdf_end_page($pdf);

// pagina sluiten en opslaan
pdf_close($pdf);

// PDF object uit buffer halen
$mybuf = PDF_get_buffer($pdf);

// Lengte bepalen
$mylen = strlen($mybuf);

// File headers instellen
header("Content-type: application/pdf");
header("Content-Length: $mylen");
header("Content-Disposition: inline; filename=mijnpdf.pdf");

// PDF afdrukken
print $mybuf;

// PDf verwijderen
pdf_delete($pdf);

?>
