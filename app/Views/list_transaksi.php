<!DOCTYPE html>
<html lang="en">

<?php if (isset($this->data['user'])) {
    $this->extend('template/navbarAfterLogin');
} else {
    $this->extend('template/navbarLogin');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/listtransaksi.css">

    <title>List Transaksi</title>
</head>

<?= $this->section('content'); ?>

<body>
    <div class="container">
        <div class="back cf">
            <a href="<?php echo base_url(); ?>">
                <img src="/assets/arrow.png">
                <div>List Transaksi</div>
            </a>
        </div>
        <div class="status cf">
            <ul><div>Status</div>
                <li class="active" onclick="list()">Semua</li>
                <li onclick="list()">Berlangsung</li>
                <li onclick="list()">Selesai</li>
            </ul>
        </div>
        <div id="list_transaksi">
            <?php foreach ($transactions as $transaksi) : ?>
            <div class="listTransaksi">
                <div class="tanggal">
                    <h4>Belanja <span><?= $transaksi['created_at'] ?></span></h4>
                </div>
                <div class="atas">
                    <div class="barang cf">
                        <img src="<?= $transaksi['cart']['cartDetails'][0]['image'] ?>">
                        <div>
                            <h3><?= $transaksi['cart']['cartDetails'][0]['item_name'] ?></h3>
                            <h4>Varian : <?= $transaksi['cart']['cartDetails'][0]['variant'] ?></h4>
                        </div>
                    </div>
                    <div class="total">
                        <hr>
                        <div>
                            <h4>Total Belanja</h4>
                            <h4 class="harga"><?= $transaksi['cart']['total'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="bawah">
                    <div class="statusTransaksi">
                        <h4>Status : <span><?= $transaksi['status']?></span></h4>
                    </div>
                    <div class="detailTransaksi">
                        <button>Detail Transaksi</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function list() {
            let li = document.getElementsByTagName("li");
            for (let i = 0; i < li.length; i++) {
                li[i].classList.remove("active");
                li[i].addEventListener("click", function() {
                    li[i].classList.add("active");
                });
            }
        }
    </script>
</body> 

<?= $this->endSection(); ?>

</html>