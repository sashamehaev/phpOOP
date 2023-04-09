<?php

require_once('../vendor/autoload.php');


$developer = new \App\Developer('Alex', 22, [8, 8]);

$developer->setPosition('developer111');

var_dump($developer->getPosition());

