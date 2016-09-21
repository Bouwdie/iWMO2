<?php

namespace Hyperized\Iwmo2;

use Hyperized\Iwmo2\Datatypes\Logisch\BurgelijkeStaat;
use Hyperized\Iwmo2\Datatypes\Primitief\Datum;
use Hyperized\Iwmo2\Datatypes\Primitief\Nummer;
use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Datatypes\Primitief\Tijd;

require('src/autoload.php');

// Primitieve datatypes
print_r(new Datum('2016-02-18'));
print_r(new Nummer(15));
print_r(new Tekst('Hello World!'));
print_r(new Tekst('AB', null, 'NUM061', 2, null));
print_r(new Tekst('NL', null, 'COD032', 2, null));
print_r(new Tijd('14:23:26'));

// Logische datatypes
$burgelijkeStaat = new BurgelijkeStaat('2');
print_r($burgelijkeStaat);
print_r($burgelijkeStaat->getWaarde()->getEnumWaarde()); // Gehuwd

