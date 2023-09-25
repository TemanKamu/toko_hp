<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://png.pngtree.com/png-vector/20190305/ourmid/pngtree-mobile-shop-flat-icon-design-png-image_728017.jpg" alt="">
        </div>
    
        <ul class="navbar-items">
            <li><a href="" class="disabled">Home</a></li>
            <li><a href="" onclick="showNotifikasi(event)">Transaksi</a></li>
            <li><div class="nav-title"><h1>ISFI MART</h1></div></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
        
    </nav>
    
    <div class="content">
        <div class="notifikasi disabled-card">
            <div class="card-notifikasi">
                <div class="card-notif-body">
                    <h3>Pilih Handphone<br>Sebelum Transaksi!</h3>
                    <button type="button" onclick="closeNotifikasi(event)">OK</button>
                </div>
            </div>
        </div>
        <div class="hero">
            <div class="description">
                <h1>Selamat datang di ISFI MART</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit, atque molestiae maxime ea deserunt aperiam accusantium quasi ullam</p>
                <button type="button" onclick="window.location.href = '../../www.smk-isfi.sch.id/'">Kunjungi</button>
            </div>
            <img src="https://media.istockphoto.com/id/1172893073/id/vektor/ilustrasi-ikon-ikon-logo-keranjang-belanja-troli.jpg?s=2048x2048&w=is&k=20&c=fiBsJeHyE8x6Lwd0dJhg8M-iMb1hsRuQb8Vbfx2Jw6w=" alt="samsung">
        </div>

        <div class="main-content" id="pembelian">
            <div class="title"><h1>DAFTAR PRODUK    </h1></div>
            <div class="card-section">
            <?php
                $datapaket = array(
                    array("Teh Bunga Telang", "Gula,Bunga telang,Mint,Lemon", 50000, "https://i.pinimg.com/564x/0a/e7/3e/0ae73e9c750417147f5808f284989399.jpg"),
                    array("Wedang Jahe", "Jahe,Gula,dan Air", 6000, "https://i.pinimg.com/564x/b7/29/c8/b729c892ce5ccbee699a47c944653ffa.jpg"),
                    array("Kunyit Asem", "Kunyit,Asem,Air dan Gula", 10000, "https://i.pinimg.com/564x/f9/bf/d6/f9bfd638c69ebdbeff6d236a6072b37b.jpg"),
                    array("Lulur Bengkoang", "Tepung dan Beras", 20000, "https://i.pinimg.com/564x/18/c5/34/18c5340572ccb30f4f303cd2dafe7bae.jpg")
                );
                foreach($datapaket as $tampil => $data){ 
            ?>
                <div class="card">
                    <div class="card-title"><img src="<?= $data[3] ?>" alt="gambar"></div>
                    <div class="card-body">
                        <h2><?= $data[0] ?></h2>
                        <p><?= $data[1] ?></p>
                        <br>
                        <br>
                        <div class="card-footer">
                            <span>Rp. <?= number_format($data[2]) ?></span>
                             <button type="button" onclick="window.location.href = '../transaksi/index.php?id=<?= $tampil ?>'">Pilih benda</button>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
        <div class="footer">
             <span>Copyright Lutfi agisna</span>
        </div>
    </div>
    <script>
        function showNotifikasi(event) {
            event.preventDefault();
            // Tampilkan card notifikasi
            document.querySelector('.notifikasi').classList.remove('disabled-card');

            // Setel overflow halaman agar tidak bisa digerakkan
            document.body.style.overflow = 'hidden';
            }

            function closeNotifikasi(event) {
                event.preventDefault();
            // Sembunyikan card notifikasi
            document.querySelector('.notifikasi').classList.add('disabled-card');

            // Kembalikan overflow halaman agar bisa digerakkan
            document.body.style.overflow = 'auto';
            }

    </script>
</body>
</html>