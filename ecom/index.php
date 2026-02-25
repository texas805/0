<!DOCTYPE html>
<html lang="en">
<?php
require_once('backend/functions.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <!-- Header Content -->
    <header class="main-header">
        <!-- Header Logo -->
        <img id="header-logo" src="assets/images/logo.png" alt="Logo">
        <!-- Header Navigation -->
        <ul class="header-navigation">
            <li><a href="index.html">Home</a></li>
            <li><a target="_blank" href="shop.html">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><button class="cart-btn" onclick="openCart()">Cart: <span class="cart-count">0</span></button></li>
        </ul>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Banner Section -->
        <div class="hero-banner">
            <h1>Welcome to FALANO STORE</h1>
            <img src="assets/images/hero.jpg" alt="Hero Banner">
            <div class="overlay"></div>
        </div>
        <!-- Product Grid Section -->
        <div class="product-grid">
            <?php
                $products=fetch_products();

                if($products->num_rows){
                    while( $product = $products->fetch_assoc()){
                        ?>
                        <div class="product-item">
                            <img src="assets/images/fishing-rod.jpg" alt="Product 1">
                            <h3><?php echo $product['product_name'] ?></h3>
                            <p>Price: <?php echo texas_price_html($product['regular_price'], $product['sale_price']); ?></p>
                            <button class="add-to-cart" data-product-id="1">Add to Cart</button>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>

    </main>

    <!-- Footer Content -->
    <footer>
        <div class="footer-content">
            <!-- Footer Logo -->
            <img id="footer-logo" src="assets/images/logo.png" alt="Logo">
            <!-- Footer Navigation -->
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="contact-info">
                <h3>Contact Info</h3>
                <p>Email: info@example.com</p>
                <p>Phone: 123-456-7890</p>
                <p>Address: 123 Main St, Anytown, USA</p>
            </div>
        </div>

        <!-- Footer Copyright -->
        <div class="footer-copyright">
            <p>Copyright 2025</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>

</body>

</html>