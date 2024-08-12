<?php
require_once __DIR__ . '/../models/ProductModel.php';

class HomeController {

    public function index() {
        require_once('views/homeView.php');
    }

    public function homeView() {
        // You can perform any data loading or processing here
        $this->index(); // Reuse the index method to load the homeView
    }
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function displayHome() {
        $products = $this->model->getAllProducts();
        include __DIR__ . '/../views/homeView.php';
    }

    
    
}
