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
            <img src="https://media.istockphoto.com/id/1172893073/id/vektor/ilustrasi-ikon-ikon-logo-keranjang-belanja-troli.jpg?s=2048x2048&w=is&k=20&c=fiBsJeHyE8x6Lwd0dJhg8M-iMb1hsRuQb8Vbfx2Jw6w=" alt="samsung">
        </div>

        <div class="main-content" id="pembelian">
            <div class="title"><h1>DAFTAR BARANG</h1></div>
            <div class="card-section">
            <?php
                $datapaket = array(
                    array("Buku Matematika", "Buku pelajaran matematika untuk siswa sekolah", 50000, "https://media.istockphoto.com/id/1198644091/id/foto/tumpukan-buku-di-depan-papan-tulis.jpg?s=2048x2048&w=is&k=20&c=KwGk9NSB651FH-EKyob6gyo0IJH0veLYQEscaq_GOlE="),
                    array("Pensil 2B", "Pensil dengan kelas kegelapan 2B", 1000, "https://media.istockphoto.com/id/136201120/id/foto/pensil-hitam-dengan-penghapus.jpg?s=2048x2048&w=is&k=20&c=X_d6cN552jDHeGWLt4AuqB7KmUBIQ6mzjIioflprlkk="),
                    array("Seragam Sekolah", "Seragam sekolah dengan warna biru", 150000, "https://media.istockphoto.com/id/648946186/id/foto/remaja-berjalan-ke-pelajaran-berikutnya-di-sekolah.jpg?s=2048x2048&w=is&k=20&c=zyGCQGaSURbn9_xNB8QuyeC950orsLrnehtuykSSgvQ="),
                    array("Paket Alat Tulis", "Paket berisi pensil, penghapus, dan pulpen", 25000, "https://media.istockphoto.com/id/520787907/id/foto/pemegang-pensil-dengan-konten.jpg?s=1024x1024&w=is&k=20&c=yyJOZQFEpyiTP0-XazByyt2n_EXDanflLI83ArRVSew="),
                    array("Buku Bahasa Inggris", "Buku pelajaran bahasa Inggris untuk siswa sekolah", 55000, "https://media.istockphoto.com/id/1000158066/id/foto/pelajari-konsep-bahasa-inggris-buku-kamus-bahasa-inggris-atau-textbok-dengan-bendera-britania.jpg?s=2048x2048&w=is&k=20&c=3ONIv-JCdeBU4aeguJqvZHD3qjRupofz3ob0MAXPQ6M="),
                    array("Pulpen Hitam", "Pulpen tinta hitam untuk menulis", 2000, "https://media.istockphoto.com/id/1304186549/id/vektor/otomatis-musim-semi-ballpoint-pena-dalam-kasus-hitam-ilustrasi-vektor.jpg?s=2048x2048&w=is&k=20&c=AZ9UKn48srEpl0jaqj3eoaQEzowXct3aIy_yNMT2ATQ="),
                    array("Tas Sekolah", "Tas sekolah dengan banyak kantong", 200000, "https://media.istockphoto.com/id/643317446/id/foto/tas-sekolah-abu-abu-terisolasi-di-gackground-putih.jpg?s=2048x2048&w=is&k=20&c=Gq7whoLz8yWScKfYASshxQZe5IniykqiB1Yzy8gHFW4="),
                    array("Buku IPA", "Buku pelajaran ilmu pengetahuan alam", 48000, "https://media.istockphoto.com/id/858000224/id/foto/menu-konsep-iklan-pub.jpg?s=2048x2048&w=is&k=20&c=2ay2DWSSo4r4K2Im4sk45MdrVhhsR-ReFDoe4kqUrxo="),
                    array("Gunting", "Gunting untuk keperluan sekolah", 3000, "https://media.istockphoto.com/id/1164059937/id/foto/alat-penata-rambut-profesional.jpg?s=2048x2048&w=is&k=20&c=D0IdMBLItVcIGAs6R6jidZlpSH9KYIHIdYo7RklVjws="),
                    array("Topi Sekolah", "Topi dengan logo sekolah", 12000, "https://media.istockphoto.com/id/465397422/id/foto/topi-kelulusan-hitam-di-atas-putih.jpg?s=2048x2048&w=is&k=20&c=RmXeNmEwjzyWfy16o54jy4Q8TB7sR9isivtVvMpU6Y4=")
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