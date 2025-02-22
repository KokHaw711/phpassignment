<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Mart Style</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0; 
            text-align: center;
        }
        header {
            background: #ffcc00;
            padding: 20px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .hero {
            background: #f4f4f4;
            padding: 50px 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .product-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pop Mart Store</h1>
        <nav>
            <ul>
                <li><a href="aboutUs.php">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="hero">
        <h2>Discover the Magic of Collectibles</h2>
        <p>Limited edition art toys and designer figurines.</p>
        <a href="#products" class="btn">Shop Now</a>
    </section>
    
    <section id="products" class="product-grid">
        <div class="product">
            <img src="toy1.jpg" alt="Toy 1">
            <h3>Figure A</h3>
            <p>$15.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="toy2.jpg" alt="Toy 2">
            <h3>Figure B</h3>
            <p>$18.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="toy3.jpg" alt="Toy 3">
            <h3>Figure C</h3>
            <p>$20.99</p>
            <button>Add to Cart</button>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
