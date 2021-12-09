<?php
spl_autoload_register(function ($class) {
    require('../models/' . $class . '.php');
});

$productManager = new ManagerProduct();

$liste = $productManager->load_marche();