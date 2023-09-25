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

    $id = $_GET['id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Transaksi</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://png.pngtree.com/png-vector/20190305/ourmid/pngtree-mobile-shop-flat-icon-design-png-image_728017.jpg" alt="">
        </div>
    
        <ul class="navbar-items">
            <li><a href="../home/index.php" >Home</a></li>
            <li><a href="../transaksi/index.php" class="disabled">Transaksi</a></li>
            <li><div class="nav-title"><h1>ISFI MART</h1></div></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </nav>

    <div class="content">
        <div class="notifikasi disabled-card">
            <div class="card-notifikasi">
                <div class="card-notif-body">
                    <h3>Transaksi Berhasil!<br>Kembali ke Home</h3>
                    <button type="button" onclick="window.location.href = '../home/index.php'">OK</button>
                </div>
            </div>
        </div>
        <div class="form-section">
            <form action="" class="formulir">
                <div class="form-box"> 
                    <label for="noTransaksi">No transaksi</label>
                    <input type="text" name="nomorTransaksi" id="noTransaksi" required>
                </div>
                <div class="form-box">
                    
                    <label for="tglTransaksi">Tanggal transaksi</label>
                    <input type="text" name="tanggalTransaksi" id="tglTransaksi" required>
                </div>
                <div class="form-box">
                    <label for="namaCustomer">Nama transaksi</label>
                    <input type="text" name="namaCustomer" id="namaCustomer" required>
                </div>
                <div class="form-box">
                    <label for="pilihanObat">Pilihan HP</label>
                    <input type="text" name="pilihanhp" id="pilihanObat" value="<?= $datapaket[$id][0] ?>" readonly required>
                </div>
                <div class="form-box">
                    <label for="hargaObat">Harga Handphone</label>
                    <input type="text" name="hargahp" id="hargaObat" value="Rp <?= number_format($datapaket[$id][2]) ?>" readonly required>
                    <input type="hidden" class="hargaAsli" value="<?= $datapaket[$id][2] ?>">
                </div>
                <div class="form-box">
                    <label for="jumlahObat">Jumlah Handphone</label>
                    <input type="number" name="jumlahHp" id="jumlahObat" required>
                </div>
                <button type="button" class="hitungTotalHarga">HITUNG TOTAL HARGA</button>
            </form>
            <div class="information-section">
            <div class="information">
            <h2 style="text-align: center;">Detail pembayaran</h2>
                <form action="">
                    <div class="form-box">
                        <label for="totalHarga">Harga</label>
                        <input type="text" name="ttlHarga" id="totalHarga" readonly>
                        <span class="hargaObatUser" style="display: none;"></span>

                    </div>
                    <div class="form-box">
                        <label for="pembayaran">Pembayaran</label>
                        <input type="number" name="pembayaranUser" id="pembayaran">
                    </div>
                    <div class="form-box">
                        <label for="kembalian">Kembalian</label>
                        <input type="text" name="kembalianUser" id="kembalian" readonly>
                    </div>
                    <div class="form-box">
                        <label for="statusPembayaran">Status Pembayaran :</label>
                        <span class="statusBill"></span>
                    </div>
                    <div class="btn-section">
                        <button type="button" class="buttonKembalian disabled-button" disabled>Hitung hitung kembailan</button>
                        <button type="button" class="buttonSimpan disabled-button" disabled>Simpan transaksi</button>
                    </div>
                    
                </form>
            </div>
        </div>
        </div>
        <div class="footer">
        <span>Copyright Lutfi Agisna</span>
    </div>
    </div>
    
    <script>
        
        const button = document.querySelector(".hitungTotalHarga");
        const buttonPembayaran = document.querySelector(".buttonKembalian");
        const buttonSimpan = document.querySelector(".buttonSimpan");
        const status = document.querySelector(".statusBill");
        const tampung = document.querySelector(".hargaObatUser");
        const notifikasi = document.querySelector("div.notifikasi");
        const buttonDisabled = document.querySelectorAll(".disabled-button");
        
        function number_format(number){
            return number.toLocaleString()
        }

        button.addEventListener("click", function(){
            const inputHargaObat = document.querySelector('.hargaAsli');
            const inputJumlahObat = document.querySelector('input[name="jumlahHp"]');
            const jumlahPerhitungan = parseInt(inputHargaObat.value * inputJumlahObat.value);
            // const noTransaksi = document.querySelector("input[name='nomorTransaksi']");
            // const tanggalTransaksi = document.querySelector("input[name='tanggalTransaksi']");
            // const namaTransaksi = document.querySelector("input[name='namaCustomer']");

            const totalHarga = document.querySelector('input[name="ttlHarga"]');
            const format = "Rp. " + number_format(jumlahPerhitungan, '.', '.');

            buttonDisabled[0].classList.remove('disabled-button');
            buttonDisabled[1].classList.remove('disabled-button');

            buttonDisabled[0].removeAttribute('disabled')
            buttonDisabled[1].removeAttribute('disabled')

            totalHarga.value = format;
            tampung.value = jumlahPerhitungan;
        })
        
        buttonPembayaran.addEventListener("click", () => {
            const inputTotalHarga = document.querySelector('input[name="ttlHarga"]');
            const pembayaranUser = document.querySelector('input[name="pembayaranUser"]');
            const kembalian = document.querySelector("input[name='kembalianUser']");
            
            const totalHarga = parseInt(pembayaranUser.value - tampung.value);
            const format = "Rp. " + number_format(totalHarga, '.', '.');

            if(totalHarga < 0){
                kembalian.value = "Uang tidak cukup";
                status.innerHTML = "Gagal";
                status.style.color = "red";
            }else{
                kembalian.value = format;
                status.innerHTML = "Berhasil";
                status.style.color = "green";
            }
          
        })
        buttonSimpan.addEventListener("click", function(){
            notifikasi.classList.toggle("disabled-card");  
            document.body.style.overflow = 'hidden';
        })
        
    </script>
    <!-- <div class="footer">
        <span>Copyright Andhika Bhayangkari</span>
    </div> -->
</body>
</html>