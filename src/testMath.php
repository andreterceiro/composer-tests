<?php
namespace Andreterceiro;
require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
use Andreterceiro\libs\Math;
echo (new Math)->sum(1, 2);
echo "\n-------\n";
echo Math::subtract(2, 1);
echo "\n-------\n";
