<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/listtransaksi.css">
    <?= $this->renderSection('content'); ?>
    <title>List Transaksi</title>
</head>
<body>
    <div class="container">
        <div class="back cf">
            <a href="#">
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
        <div class="listTransaksi">
            <div class="tanggal">
                <h4>Belanja <span>3 Desember 2021</span></h4>
            </div>
            <div class="atas">
                <div class="barang cf">
                    <img src="">
                    <div>
                        <h3>Daging Sapi Amazon</h3>
                        <h4>Varian : 1 kg</h4>
                    </div>
                </div>
                <div class="total">
                    <hr>
                    <div>
                        <h4>Total Belanja</h4>
                        <h4 class="harga">Rp 47000</h4>
                    </div>
                </div>
            </div>
            <div class="bawah">
                <div class="statusTransaksi">
                    <h4>Status : <span>Sedang diantarkan oleh kurir</span></h4>
                </div>
                <div class="detailTransaksi">
                    <button>Detail Transaksi</button>
                </div>
            </div>
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
</html>