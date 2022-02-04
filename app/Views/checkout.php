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
        <?php if (isset($addresses['active'])) : ?>
          <h2><span id="jenisLokasi"><?= $addresses['active']['note']; ?></span></h2>
          <p><span id="nama"><?= $user['username']; ?></span></p>
          <p><span id="alamat"><?= $addresses['active']['alamat']; ?></span></p>
        <?php endif; ?>
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
        <?php if (isset($addresses['active']) && isset($cart['cartDetails'][0])) : ?>
          <div class="button">
            <button class="buttonBayar" type="submit" id="btn-pembayaran" value="Payment">Payment</button>
            <div id="modal-payment" class="modal2">
              <div class="modal-content2">
                <form action="<?= base_url(); ?>/checkout" method="post">
                  <?php foreach ($cart['cartDetails'] as $cartD) : ?>
                    <input type="number" min="0" id="input-<?= $cartD['variant_id']; ?>" name="items[<?= $cartD['variant_id']; ?>]" value="<?= $cartD['quantity']; ?>" hidden>
                  <?php endforeach; ?>
                  <span class="close2">&times;</span>
                  <h4>Pembayaran</h4>
                  <h4>Metode Pembayaran</h4>

                  <div>
                    <?php foreach ($payment_method as $id => $payment) : ?>
                      <div class="metode">
                        <label class="varians hover" for="cod" id="label" onclick="radio()"> <img src="<?= $payment['img'] ?>"> <?= $payment['payment_type'] ?> </label>
                        <input type="radio" id="payment_method-<?= $payment['id'] ?> " name="payment_method" value="<?= $payment['id'] ?>">
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <hr>
                  <div class="pembayaran">
                    <h3>Ringkasan Pembayaran</h3>
                    <div class="total">
                      <h4>Total Harga</h4>
                      <h4>Rp <span id="totalHarga"><?= $cart['total']; ?></span></h4>
                    </div>
                    <div class="total">
                      <h4>Total Ongkos Kirim</h4>
                      <h4>Rp <span id="totalOngkir"><?= $cart['total']; ?></span></h4>
                    </div>
                    <hr>
                    <div class="total">
                      <h4>Total Tagihan</h4>
                      <h4>Rp <span id="totalTagihan"><?= $cart['total']*2; ?></span></h4>
                    </div>
                    <hr>
                  </div>
                  <div class="lanjutkan">
                    <div class="button">
                      <button type="submit">
                        <h3>Lanjutkan</h3>
                      </button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    <?php else : ?>
      <div class="button">
        <button class="buttonBayar" type="submit" id="btn-pembayaran" value="Payment" disabled>Payment</button>
      </div>
    <?php endif; ?>
    </div>
  </div>
  </div>

  <div class="container3">
    <h2>Detail Pesanan</h2>
    <div class="detail">
      <?php foreach ($cart['cartDetails'] as $cartD) : ?>
        <div class="detailPesanan" id="detail-<?= $cartD['variant_id']; ?>">
          <div class="item cf">
            <img src="<?= $cartD['image']; ?>">
            <div>
              <h3><?= $cartD['item_name']; ?></h3>
              <h3><span id="cartitem_price">Rp. <?= $cartD['price']; ?></span><span id='slash'> / </span><span id="cartitem_variant"></span><?= $cartD['variant']; ?></h3>
            </div>
          </div>
          <div class="jumlah cf">
            <div class="delete">
              <button type="button" class="danger" onclick="deleteItem(<?= $cartD['variant_id']; ?>)">Delete</button>
            </div>
            <div class="plusminus">
              <a onclick="decrement(<?= $cartD['variant_id']; ?>)"><img src="/assets/minus.png"></a>
              <input id='demoInput-<?= $cartD['variant_id']; ?>' type='number' min='0' max='110' value="<?= $cartD['quantity']; ?>">
              <a onclick="increment(<?= $cartD['variant_id']; ?>)"><img src="/assets/tambah.png"></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <script>
        hitungTagihan();

        function increment(id) {
          document.getElementById(`demoInput-${id}`).stepUp();
          document.getElementById(`input-${id}`).stepUp();
        }

        function decrement(id) {
          document.getElementById(`demoInput-${id}`).stepDown();
          document.getElementById(`input-${id}`).stepDown();
        }

        function deleteItem(id) {
          document.getElementById(`demoInput-${id}`).value = 0;
          document.getElementById(`input-${id}`).value = 0;
          document.getElementById(`detail-${id}`).style.display = "none";;
        }

        function hitungTagihan() {
          document.getElementById('totalTagihan').innerHTML = <?= ($cart['total'] + $cart['total']); ?>;
        }
      </script>
      <script>
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
      <script>
        var modal2 = document.getElementById("modal-payment");
        var btn2 = document.getElementById("btn-pembayaran");
        var span2 = document.getElementsByClassName("close2")[0];

        btn2.onclick = function() {
          modal2.style.display = "block";
        }

        span2.onclick = function() {
          modal2.style.display = "none";
        }

        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
          }
        }
      </script>
</body>

</html>