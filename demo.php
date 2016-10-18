<?php

namespace Hyperized\Iwmo2;

use Hyperized\Iwmo2\Datatypes\Composiet\Adres;
use Hyperized\Iwmo2\Datatypes\Composiet\Huis;
use Hyperized\Iwmo2\Datatypes\Logisch\AanduidingWoonadres;
use Hyperized\Iwmo2\Datatypes\Logisch\BurgelijkeStaat;
use Hyperized\Iwmo2\Datatypes\Logisch\Huisletter;
use Hyperized\Iwmo2\Datatypes\Logisch\Huisnummer;
use Hyperized\Iwmo2\Datatypes\Logisch\HuisnummerToevoeging;
use Hyperized\Iwmo2\Datatypes\Logisch\LandCode;
use Hyperized\Iwmo2\Datatypes\Logisch\Plaatsnaam;
use Hyperized\Iwmo2\Datatypes\Logisch\Postcode;
use Hyperized\Iwmo2\Datatypes\Logisch\Straatnaam;
use Hyperized\Iwmo2\Datatypes\Primitief\Datum;
use Hyperized\Iwmo2\Datatypes\Primitief\Nummer;
use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Datatypes\Primitief\Tijd;

require('autoload.php');

// Primitieve datatypes
print_r(new Datum('2016-02-18'));
print_r(new Nummer(15, 20, 0));
print_r(new Tekst('Hello World!'));
print_r(new Tekst('AB', 'NUM061', 2, '[A-Z]{2}'));
print_r(new Tijd('14:23:26'));

// Logische datatypes
$burgelijkeStaat = new BurgelijkeStaat('2');
print_r($burgelijkeStaat);
print_r($burgelijkeStaat->getValue()->getEnumValue());

// Composiet datatypes
$adres = new Adres(
            new Huis(
                new Huisnummer('12'),
                new Huisletter('A'),
                new HuisnummerToevoeging('APT'),
                new AanduidingWoonadres('AB')
            ),
            new Postcode('1234AB'),
            new Straatnaam('Kerkstraat'),
            new Plaatsnaam('Ons dorp'),
            new LandCode('NL')
);
print_r($adres);

