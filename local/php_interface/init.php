<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
    'lib\Api' => '/local/lib/Api.php',
    'lib\ApiPrefilters' => '/local/lib/ApiPrefilters.php',
    'lib\ApiPostfilters' => '/local/lib/ApiPostfilters.php'
]);