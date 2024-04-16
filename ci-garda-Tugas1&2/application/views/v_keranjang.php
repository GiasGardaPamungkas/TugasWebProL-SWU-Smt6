<main>

    <section>

        <h1><?php echo $judul; ?></h1>

        <div class="container">
            <div class="cart">
                <!-- Contoh item keranjang -->
                <div class="cart-item" style="width: 45%; border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
                <img src="<?php echo base_url('assets/gambar/i5-12400f.jpg'); ?>" alt="Processor Intel Core i5-12400F" style="width: 100%; object-fit: contain;">
                    <div>
                        <h3>Processor Intel Core i5-12400F</h3>
                        <p>Harga: Rp 2.060.000</p>
                        <div>
                            <button class="btn remove-btn">-</button>
                            <input type="text" class="quantity-input" value="1">
                            <button class="btn add-btn">+</button>
                            <button class="btn delete-btn">Hapus</button>
                        </div>
                    </div>
                </div>
                <!-- Contoh item keranjang -->
                <!--div class="cart-item">
                    <img src="product2.jpg" alt="Product 2">
                    <div>
                        <h3>Product 2</h3>
                        <p>Harga: $30</p>
                        <div>
                            <button class="btn remove-btn">-</button>
                            <input type="text" class="quantity-input" value="1">
                            <button class="btn add-btn">+</button>
                            <button class="btn delete-btn">Hapus</button>
                        </div>
                    </div>
                </!--div>
            </div>
        </div-->

    </section>

</main>