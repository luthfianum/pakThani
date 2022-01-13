<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/checkout.css">
    <?= $this->renderSection('content'); ?>
    <title>Checkout</title>
</head>
<body>
    <div class="container1">
        <div class="checkout cf">
            <a href="#">
                <img src="/assets/arrow.png">
                <div>Checkout</div>
            </a>
        </div>
    </div>
    <div class="container2">
        <div class="alamat cf">
            <h2>Alamat Pengiriman</h2>
            <a href="#">Ubah Alamat</a>
            <div class="detailAlamat">
                <h2>Rumah Utama</h2>
                <p>nama</p>
                <p>nomor</p>
                <p>alamat</p>
            </div>
        </div>
        <div class="ringkasan">
            <div class="pembayaran">
                <h2>Ringkasan Pembayaran</h2>
                <div class="total">
                    <h3>Total Harga</h3>
                    <h3>Rp 45.000</h3>
                </div>
                <div class="total">
                    <h3>Total Ongkos Kirim</h3>
                    <h3>Rp 2.000</h3>
                </div>
                <hr>
                <div class="total">
                    <h3>Total Tagihan</h3>
                    <h3>Rp 47.000</h3>
                </div>
                <div class="button">
                    <button type="submit"><h3>Pilih Pembayaran</h3></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container3">
        <h2>Detail Pesanan</h2>
        <div class="detail">
            <div class="detailPesanan">
                <div class="item cf">
                    <img src="">
                    <div>
                        <h3>Daging Sapi Amazon</h3>
                        <h3><span>Rp 45.000</span> / 1 kg</h3>
                    </div>
                </div>
                <div class="jumlah cf">
                    <div class="delete">
                        <button type="button" class="danger">Delete</button>
                    </div>
                    <div class="plusminus">
                        <a onclick="decrement()"><img src="/assets/minus.png"></a>
                        <input id=demoInput type=number min=0 max=110>
                        <a onclick="increment()"><img src="/assets/tambah.png"></a>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }
        function decrement() {
            document.getElementById('demoInput').stepDown();
        }
    </script>
</body>
</html>
