<?php

// get the class
require_once __DIR__.'/src/Barcode128.class.php';

// Text to be converted
$code = 'DLX.19.00001';

// Text printed above the barcode
$text = 'C&C - Delnext';

// A font file located in the same directory
// http://openfontlibrary.org/en/font/hans-kendrick
$font = __DIR__."/data/HansKendrick-Regular.ttf";

// corresponding fontsize in px
$fontSize = 12;

// height of the barcode in px
$height = 130;

// create an Object of BarCode128 Class
$barcode = new AMWD\BarCode128($code, $height);

// OPTIONAL: add the font
// if not: no Text can be written (only bars)
$barcode->addFont($font, $fontSize);

// OPTIONAL: add the text above the barcode
$barcode->CustomText($text);

// Save the file to disk
$barcode->save('data/barcode.gif');

// OR: Draw the image to stdout
$barcode->draw();


?>