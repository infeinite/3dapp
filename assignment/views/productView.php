<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']) ?> 3D Model</title>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<div class="container my-5 text-center">
    <h1 class="text-center"><?= htmlspecialchars($product['name']) ?> 3D Model</h1>
    
    <div class="x3d-container my-4 mx-auto">
        <x3d width="500px" height="400px">
            <scene>
                <background skyColor="0 0 0"></background>
                <directionalLight direction='0 -1 0' color='1 1 1' intensity='0.7'></directionalLight>
                <viewpoint id="frontView" position="0 0 5" orientation="0 0 0 0"></viewpoint>
                <viewpoint id="topView" position="0 5 0" orientation="1 0 0 -1.57"></viewpoint>
                <viewpoint id="sideView" position="5 0 0" orientation="0 1 0 1.57"></viewpoint>
                <inline url="<?= htmlspecialchars($product['model']) ?>"></inline>
            </scene>
        </x3d>
    </div>

    <p class="my-4"><?= htmlspecialchars($product['description']) ?></p>
    
    <div class="btn-group">
        <button class="btn btn-primary" onclick="changeView('frontView')">Front View</button>
        <button class="btn btn-secondary" onclick="changeView('topView')">Top View</button>
        <button class="btn btn-secondary" onclick="changeView('sideView')">Side View</button>
    </div>
    
    <footer class="mt-5">
        <p>&copy; 2024 My Coca Cola. All rights reserved.</p>
        <a href="/~gm493/3dapp/assignment/index.php">Back to Home</a>
    </footer>
</div>

<script>
    function changeView(viewpointName) {
        document.getElementById(viewpointName).setAttribute('set_bind', 'true');
    }
</script>
<script src="/3dapp/assignment/js/jquery.slim.min.js"></script>
<script src="/3dapp/assignment/js/popper.min.js"></script>
<script src="/3dapp/assignment/js/bootstrap.min.js"></script>
<script src="https://www.x3dom.org/download/x3dom.js"></script>
</body>
</html>
