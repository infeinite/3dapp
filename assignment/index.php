<?php
require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';

if (isset($_GET['product'])) {
    $controller = new ProductController();
    $controller->displayProduct($_GET['product']);
} else {
    $controller = new HomeController();
    $controller->displayHome();
}
