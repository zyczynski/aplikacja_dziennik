<?php

require("vendor/autoload.php");

use Dziennik\Uczen\Uczen;

$uczen = new Uczen(1, 'Bartek', 'Zyczynski', '3b');

print_r($uczen->getImie());