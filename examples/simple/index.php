<?php
require_once '../../vendor/autoload.php';
require_once '../../src/Utils/is_uppercased.php';
require_once '../../src/scan-controllers.php';
require_once '../../src/Controller.php';
require_once '../../src/Nyxt.php';

$framework = new \Nyxt\Base;
$framework->run();
