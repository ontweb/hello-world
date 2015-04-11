<?php

pdf_open_file($pdf, "test.pdf"); // bestand openen, indien deze niet bestaat maken

// Auteur instellen
pdf_set_info($pdf, "Author", "Lorena");
// Titel instellen
pdf_set_info($pdf, "Title", "Mijn eerste pdf");
// Maker instellen
pdf_set_info($pdf, "Creator", "Lorena");    
// Onderwerp instellen
pdf_set_info($pdf, "Subject", "Mijn eerste pdf");

De grootte van de pdf moet worden ingesteld.. A4 is 595 x 842 en Letter is 612 x 792. We stellen nu a4 formaat in:
pdf_begin_page($pdf, 595, 842);

Als de pdf klaar is kan de pagina worden gesloten en worden weggeschreven:
// einde van de pagina
pdf_end_page($pdf);

// pagina sluiten en opslaan
pdf_close($pdf);

?>
