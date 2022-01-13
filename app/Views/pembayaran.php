<?= $this->extend('/checkout'); ?>

<?= $this->section('content'); ?>
<title>Pembayaran</title>

<div class="container">
    <div class="hidden">
                <a href="#"><img src="/assets/Frame_Silang.png"><h4>Pembayaran</h4></a>
                    
                <h4>Metode Pembayaran</h4>
                <div class="metode">
                    <div>
                        <img src="/assets/cod.png">
                        <label class="varians hover" for="cod" id="label"  onclick="radio()">COD (Cash On Delivery)</label>
                    </div>
                    <div>
                        <input type="radio" id="cod" name="cod" value="cod">
                    </div>
                </div>
                <hr>
                <div class="pembayaran">
                    <h3>Ringkasan Pembayaran</h3>
                    <div class="total">
                        <h4>Total Harga</h4>
                        <h4>Rp 45.000</h4>
                    </div>
                    <div class="total">
                        <h4>Total Ongkos Kirim</h4>
                        <h4>Rp 2.000</h4>
                    </div>
                    <hr>
                    <div class="total">
                        <h3>Total Tagihan</h3>
                        <h3>Rp 47.000</h3>
                    </div>
                    <hr>
                </div>
                <div class="lanjutkan">
                    <div class="button">
                        <button type="submit" onclick="pembayaran()"><h4>Lanjutkan</h4></button>
                    </div>
                </div>
            </div>
</div>
<?= $this->endSection(); ?>