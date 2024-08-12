<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprite 3D Model</title>
    <script src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .x3d-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
    <script>
        function changeView(viewpointName) {
            document.getElementById(viewpointName).setAttribute('set_bind', 'true');
        }
    </script>
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center">Sprite 3D Model</h1>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <!-- X3D模型容器 -->
                <div class="x3d-container">
                    <x3d width='500px' height='400px'>
                        <scene>
                            <!-- 设置背景颜色为黑色 -->
                            <background skyColor="0 0 0"></background>

                            <!-- 添加环境光 -->
                            <directionalLight direction='0 -1 0' color='1 1 1' intensity='0.7'></directionalLight>

                            <!-- 添加不同的视角 -->
                            <viewpoint id="frontView" position="0 0 5" orientation="0 0 0 0"></viewpoint>
                            <viewpoint id="topView" position="0 5 0" orientation="1 0 0 -1.57"></viewpoint>
                            <viewpoint id="sideView" position="5 0 0" orientation="0 1 0 1.57"></viewpoint>

                            <!-- 嵌入X3D模型 -->
                            <inline url='models/sprite.x3d'></inline>
                        </scene>
                    </x3d>
                </div>
            </div>
        </div>
        <p class="text-center my-4">
            Here you can explore the 3D model of Sprite. Use the buttons below to interact with the model.
        </p>
        <div class="text-center">
            <button class="btn btn-primary" onclick="changeView('frontView')">Front View</button>
            <button class="btn btn-secondary" onclick="changeView('topView')">Top View</button>
            <button class="btn btn-success" onclick="changeView('sideView')">Side View</button>
        </div>
    </div>

    <footer class="footer text-center mt-5">
        <p>&copy; 2024 My Coca Cola. All rights reserved.</p>
        <a href="index.php">Back to Home</a>
    </footer>

    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script
