<?php
class ProductModel {
    public function getAllProducts() {
        return [
            [
                'name' => 'Coca Cola',
                'description' => 'The 3D model of a Coca Cola can.',
                'model' => 'models/coke.x3d',
                'image' => 'coke.png'
            ],
            [
                'name' => 'Fanta',
                'description' => 'The 3D model of a Fanta can.',
                'model' => 'models/fanta.x3d',
                'image' => 'fanta.png'
            ],
            [
                'name' => 'Sprite',
                'description' => 'The 3D model of a Sprite can.',
                'model' => 'models/sprite.x3d',
                'image' => 'sprite.png'
            ]
        ];
    }

    public function getProduct($productName) {
        $products = $this->getAllProducts();
        foreach ($products as $product) {
            if ($product['name'] === $productName) {
                return $product;
            }
        }
        return null;
    }
}
