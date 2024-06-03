<?php

use Asus\MvcCrud\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');