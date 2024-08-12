<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coca Cola Brand World</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="container">
        <img src="assets/logo.png" alt="Coca Cola" class="img-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Brands</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section class="banner text-white text-center">
    <div class="container">
        <h1>Welcome to My Coca Cola Brand World</h1>
        <p>Explore our diverse brands and products</p>
    </div>
</section>

<section class="container brands-section my-5">
    <h2 class="text-center mb-4">Our Brands</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card brand-card">
                    <img src="/~gm493/3dapp/assignment/assets/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($product['description']) ?></p>
                        <a href="?product=<?= urlencode($product['name']) ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="about-us container my-5">
<h2>About Us</h2>
    <p>
        Our company, My Coca Cola, was founded with the vision to refresh the world and inspire moments of optimism and happiness through our brands and actions. We are committed to providing high-quality products and promoting sustainable practices in all aspects of our business. Our journey began with a simple idea: to create a beverage that brings joy and refreshment to people everywhere.
    </p>
    <p>
        Over the years, we have grown into a global brand, recognized and loved by millions. We take pride in our diverse portfolio of beverages, including our flagship product Coca Cola, as well as Fanta, Sprite, and many more. Each brand carries its unique flavor and history, but all share our commitment to quality and customer satisfaction.
    </p>
    <p>
        At My Coca Cola Brand, we believe in giving back to the communities we serve. Through various initiatives and partnerships, we strive to make a positive impact on society and the environment. From reducing our carbon footprint to supporting local communities, we are dedicated to creating a better, more sustainable future.
    </p>
    <p>
        Our success would not be possible without our passionate and dedicated team. We are proud of our inclusive and collaborative work culture, which fosters innovation and continuous improvement. Together, we are committed to maintaining the high standards that our customers expect and deserve.
    </p>
    <p>
        Thank you for being a part of our journey. We look forward to continuing to serve you with the best beverages and making a positive impact on the world.
    </p>
</section>

<section class="contact-us container my-5">
    <h2>Contact Us</h2>
    <form class="contact-form">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</section>

<footer class="footer text-center py-4">
    <p>&copy; 2024 My Coca Cola. All rights reserved.</p>
    <a href="https://github.com/your-repository" target="_blank">GitHub Repository</a>
</footer>

</footer>

<script src="/js/jquery.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>
