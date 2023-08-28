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
                <h1>Selamat datang di Toko Handphone!</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At velit, atque molestiae maxime ea deserunt aperiam accusantium quasi ullam</p>
                <button type="button" onclick="window.location.href = '../../www.smk-isfi.sch.id/'">Kunjungi</button>
            </div>
            <img src="https://png.pngtree.com/png-vector/20190305/ourmid/pngtree-mobile-shop-flat-icon-design-png-image_728017.jpg" alt="samsung">
        </div>

        <div class="main-content" id="pembelian">
            <div class="title"><h1>DAFTAR HANDPHONE</h1></div>
            <div class="card-section">
            <?php
                $datapaket = [
                    ["Samsung - Galaxy M33","Warna Brown - Memory 8 GB 128 GB",1000000 ,"https://images.samsung.com/is/image/samsung/p6pim/id/sm-m336bzngxid/gallery/id-galaxy-m33-5g-sm-m336-sm-m336bzngxid-532015634?$1300_1038_PNG$"],
                    ["Samsung - Galaxy S22+","Warna Green - Memory 8 GB 128 GB",2600000,"https://images.samsung.com/is/image/samsung/p6pim/id/2202/gallery/id-galaxy-s22-plus-s906-sm-s906ezgdxid-530760159?$1300_1038_PNG$"],
                    ["Samsung - Galaxy A14 5G","Warna White - Memory 6 GB 128 GB",7000000,"https://images.samsung.com/is/image/samsung/p6pim/id/sm-a146pzshxid/gallery/id-galaxy-a14-5g-sm-a146-sm-a146pzshxid-536329535?$650_519_PNG$"], 
                    ["Samsung - Galaxy M14 5G","Warna Black - Memory 4 GB 128 GB",6000000,"https://images.samsung.com/is/image/samsung/p6pim/id/sm-a146pzshxid/gallery/id-galaxy-a14-5g-sm-a146-sm-a146pzshxid-536329535?$650_519_PNG$"]  
                ];
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
                             <button type="button" onclick="window.location.href = '../transaksi/index.php?id=<?= $tampil ?>'">Pilih Handphone</button>
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