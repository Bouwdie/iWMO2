<?php

// Bootstrapping
date_default_timezone_set('Europe/Amsterdam');

require('vendor/autoload.php');

use Doctrine\Common\Annotations\AnnotationRegistry;
AnnotationRegistry::registerLoader('class_exists');