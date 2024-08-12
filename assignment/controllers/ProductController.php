<?php
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function displayProduct($productName) {
        $product = $this->model->getProduct($productName);
        if ($product) {
            include __DIR__ . '/../views/productView.php';
        } else {
            echo "Product not found!";
        }
    }
}
