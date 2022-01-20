<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/checkout.css">
    <link rel="stylesheet" href="/css/modal.css">

    <title>Checkout</title>
</head>


<body>

    <div class="container1">
        <div class="checkout cf">
            <a href="<?php echo base_url(); ?>">
                <img src="/assets/arrow.png">
                <div>Checkout</div>
            </a>
        </div>
    </div>
    <div class="container2">
        <div class="alamat cf">
            <h2>Alamat Pengiriman</h2>
            <a id="btn-alamat" href="#" onclick="">Ubah Alamat</a>

            <div id="modal-container" class="modal">

                <div class="modal-content">

                    <span class="close">&times;</span>

                    <h2>Ubah Alamat</h2>

                    <form action="<?php echo base_url(); ?>/address" method="post">
                        <div class="input-group">
                            <label for="address-name">Alamat</label>
                            <input type="nama-alamat" id="nama-alamat" name="alamat" placeholder="alamat">
                        </div>

                        <div class="input-group">
                            <label for="address">Catatan</label>
                            <input type="catatan" id="alamat" name="note" placeholder="catatan">
                        </div>

                        <div id="input-group">
                            <button type="submit" value="Submit">Tambah alamat</button>
                        </div>
                    </form>

                </div>

            </div>

            <div class="detailAlamat">
                <h2><span id="jenisLokasi"><?= $addresses['active']['note']; ?></span></h2>
                <p><span id="nama"><?= $user['username']; ?></span></p>
                <p><span id="alamat"><?= $addresses['active']['alamat']; ?></span></p>
            </div>

        </div>
        <div class="ringkasan">
            <div class="pembayaran">
                <h2>Ringkasan Pembayaran</h2>
                <div class="total">
                    <h3>Total Harga</h3>
                    <h3>Rp <span id="totalHarga"><?= $cart['total']; ?></span></h3>
                </div>
                <div class="total">
                    <h3>Total Ongkos Kirim</h3>
                    <h3>Rp <span id="totalOngkir"><?= $cart['total']; ?></span></h3>
                </div>
                <hr>
                <div class="total">
                    <h3>Total Tagihan</h3>
                    <h3>Rp <span id="totalTagihan"></span></h3>
                </div>
                <div class="button">
                    <form action="<?= base_url(); ?>/checkout" method="post">
                        <input class="buttonBayar" type="submit" value="Payment">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container3">
        <h2>Detail Pesanan</h2>
        <div class="detail">
            <?php foreach ($cart['cartDetails'] as $cartD) : ?>
                <div class="detailPesanan">
                    <div class="item cf">
                        <img src="<?= $cartD['image']; ?>">
                        <div>
                            <h3><?= $cartD['item_name']; ?></h3>
                            <h3><span id="cartitem_price"><?= $cartD['price']; ?></span><span id='slash'> / </span><span id="cartitem_variant"></span><?= $cartD['variant']; ?></h3>
                        </div>
                    </div>
                    <div class="jumlah cf">
                        <div class="delete">
                            <button type="button" class="danger">Delete</button>
                        </div>
                        <div class="plusminus">
                            <a onclick="decrement()"><img src="/assets/minus.png"></a>
                            <input id=demoInput type=number min=0 max=110 value="<?= $cartD['quantity']; ?>">
                            <a onclick="increment()"><img src="/assets/tambah.png"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <script>
                hitungTagihan();

                function increment() {
                    document.getElementById('demoInput').stepUp();

                }

                function decrement() {
                    document.getElementById('demoInput').stepDown();
                }

                function hitungTagihan() {
                    document.getElementById('totalTagihan').innerHTML = <?= ($cart['total'] + $cart['total']); ?>;
                }
            </script>
            <script>
                function increment() {
                    document.getElementById('demoInput').stepUp();
                }

                function decrement() {
                    document.getElementById('demoInput').stepDown();
                }

                var modal = document.getElementById("modal-container");
                var btn = document.getElementById("btn-alamat");
                var span = document.getElementsByClassName("close")[0];

                btn.onclick = function() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
</body>

</html>