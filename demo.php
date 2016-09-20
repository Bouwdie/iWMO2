<?php

namespace Hyperized\Iwmo2;

use Hyperized\Iwmo2\Datatypes\Primitief\Datum;
use Hyperized\Iwmo2\Datatypes\Primitief\Nummer;
use Hyperized\Iwmo2\Datatypes\Primitief\Tekst;
use Hyperized\Iwmo2\Datatypes\Primitief\Tijd;

date_default_timezone_set('Europe/Amsterdam');
require_once('vendor/autoload.php');

// Primitieve datatypes
var_dump(new Datum('2016-02-18'));
var_dump(new Nummer(15));
var_dump(new Tekst('Hello World!'));
var_dump(new Tekst('AB', 2, 'NUM061'));
var_dump(new Tijd('14:23:26'));
