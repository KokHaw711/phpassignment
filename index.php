<?php include 'header.php'; ?>
<section id="home" class="hero">
    <p id="topSales">Top 1 Sales Product</p>
    <img id="topProduct" src="/images/top1Product.png">
    <h2>Discover the Magic of Collectibles</h2>
    <p>Limited edition art toys and designer figurines.</p>
    <a href="#products" class="btn">Shop Now</a>
    <script>
    const arr =[
        '/images/top1Product.png',
        '/images/top2Product.png',
        '/images/top3Product.png',
        '/images/top4Product.png'
    ];

    let i = 0;

    $('#topProduct').on('click', e => {
        i = ++i % arr.length;

    $('#topSales').text(`Top ${i + 1} Sales Product`);

    $('#topProduct')
        .hide()
        .prop('src',arr[i])
        .fadeIn();
    });
</script>
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