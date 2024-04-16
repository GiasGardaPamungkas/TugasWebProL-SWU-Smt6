<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Webpro Lanjut</h1>
                <h3>Membuat template sederhana codeigniter 3</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo
                                    base_url() . 'index.php/web/about' ?>">About</a></li>
                                    <li><a href="<?php echo base_url() . 'web/toko' ?>">Toko</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            
        </header>
        <section>
            <h1><?php echo $judul ?></h1>

<div id="store" style="max-width: 800px; margin: 0 auto;">

    <h1 style="text-align: center;">Toko Online</h1>

    <div id="products" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
        <!-- Product list -->
        <div class="product" style="width: 200px; border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
            <img src="https://id-live-01.slatic.net/p/cf94aa46196ca88c536464141e2f1025.jpg" alt="Product 1" style="width: 100%;">
            <h3 style="margin-top: 10px;">Samsung S24 Ultra</h3>
            <p style="margin: 5px 0;">21.999.999 IDR</p>
            <button class="add-to-cart-btn" data-id="1" style="padding: 5px 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Add to Cart</button>
        </div>

        <div class="product" style="width: 200px; border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
            <img src="product2.jpg" alt="Product 2" style="width: 100%;">
            <h3 style="margin-top: 10px;">Product 2</h3>
            <p style="margin: 5px 0;">$20</p>
            <button class="add-to-cart-btn" data-id="2" style="padding: 5px 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Add to Cart</button>
        </div>

        <div class="product" style="width: 200px; border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
            <img src="product3.jpg" alt="Product 3" style="width: 100%;">
            <h3 style="margin-top: 10px;">Product 3</h3>
            <p style="margin: 5px 0;">$30</p>
            <button class="add-to-cart-btn" data-id="3" style="padding: 5px 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Add to Cart</button>
        </div>
    </div>

    <div id="cart" style="margin-top: 50px;">
        <h2>Keranjang Belanja</h2>
        <ul id="cart-items" style="list-style-type: none; padding: 0;">
            <!-- Cart items will be added dynamically using JavaScript -->
        </ul>
        <button id="checkout-btn" style="padding: 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Checkout</button>
    </div>

</div>
<br>
<br>