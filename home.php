<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopZone Collectibles</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <?php include 'header.php';?>
    <div class="hero">
        <div class="hero-overlay">
            <h2>Discover the Magic of Collectibles</h2>
            <p>Limited edition art toys and designer figurines.</p>
            <a href="product.php" class="btn">ShopNow</a>
        </div>
    </div>

    <h2 style="text-align: center;">New Arrivals</h2>
    <div class="slider-container">
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="slider">
            <div class="slide"><img src="/images/Luffy.jpg" alt="Product 1"><p>Luffy Series</p><p>From RM49.90</p></div>
            <div class="slide"><img src="/images/DC.jpg" alt="Product 2"><p>DC Series</p><p>From RM49.90</p></div>
            <div class="slide"><img src="/images/KungFuPanda.jpg" alt="Product 3"><p>Kung Fu Panda Series</p><p>From RM49.90</p></div>
            <div class="slide"><img src="/images/HarryPorter.jpg" alt="Product 4"><p>Harry Porter Series</p><p>From RM49.90</p></div>
        </div>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <script src="/js/home.js"></script>  
    <?php include 'footer.php'; ?>
</body>
</html>
