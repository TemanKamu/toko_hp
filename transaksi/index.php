<?php
     $datapaket = [                  
            ["Samsung - Galaxy M33","Warna Brown/Grey - Memory 8 GB 128 GB",1000000 ,"../img/m33.jpg"],
            ["Samsung - Galaxy S22+","Warna Grey - Memory 8 GB 128 GB",2600000,"../img/s22.jpg"],
            ["Samsung - Galaxy A14 5G","Warna White - Memory 6 GB 128 GB",7000000,"../img/a14.jpg"], 
            ["Samsung - Galaxy M14 5G","Warna Black - Memory 4 GB 128 GB",6000000,"../img/m14.jpeg"]  
    ];

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
            <li><div class="nav-title"><h1>TOKO HP</h1></div></li>
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
                    <button type="button" class="buttonKembalian disabled-button" disabled>Hitung hitung kembailan</button>
                    <button type="button" class="buttonSimpan disabled-button" disabled>Simpan transaksi</button>
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