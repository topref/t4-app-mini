<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

T4\Mvc\Application::getInstance()->run();