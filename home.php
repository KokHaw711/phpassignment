<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopZone Collectibles</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background: #F0FCFF;
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
    <?php include 'header.php';?>
    <div style="height: 100vh">
    <section id="home" class="hero">
        <h2>Discover the Magic of Collectibles</h2>
        <p>Limited edition art toys and designer figurines.</p>
        <a href="#products" class="btn">Shop Now</a>
    </section>
    
    <section id="products" class="product-grid">
        <div class="product">
            <img src="images/top1Product.png" alt="Toy 1">
            <h3>Figure A</h3>
            <p>$15.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/top2Product.png" alt="Toy 2">
            <h3>Figure B</h3>
            <p>$18.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/top3Product.png" alt="Toy 3">
            <h3>Figure C</h3>
            <p>$20.99</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="images/top4Product.png" alt="Toy 3">
            <h3>Figure D</h3>
            <p>$24.99</p>
            <button>Add to Cart</button>
        </div>
    </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
