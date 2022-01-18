<?= $this->extend('/list_transaksi'); ?>

<?= $this->section('content'); ?>
<title>Detail Transaksi</title>

<div class="containerHidden">
    <div class="hidden cf">
        <a href="#"><img src="/assets/Frame_Silang.png">
            <h4>Detail Transaksi</h4>
        </a>
        <div class="top">
            <div class="statusPembelian">
                <div class="judul">Status</div>
                <div>Sedang diantar</div>
            </div>
            <hr class='tipis'>
            <div class="tglPembelian">
                <div>Tanggal Pembelian</div>
                <div>3 Desember 2021</div>
            </div>
        </div><br>
        <div class="detailProduk">
            <div class="judul">Detail Produk</div>
            <div class="produk">
                <div class="card">
                    <div class="namaProduk cf">
                        <img src="">
                        <div>
                            <div class="judul">Daging Sapi</div>
                            <div>Varian : 1 kg</div>
                        </div>
                    </div>
                    <div class="hargaProduk cf">
                        <div>
                            <hr>
                        </div>
                        <div>
                            <div>Total Harga</div>
                            <div class="harga">Rp 45000</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="namaProduk cf">
                        <img src="">
                        <div>
                            <div class="judul">Daging Sapi</div>
                            <div>Varian : 1 kg</div>
                        </div>
                    </div>
                    <div class="hargaProduk cf">
                        <div>
                            <hr>
                        </div>
                        <div>
                            <div>Total Harga</div>
                            <div class="harga">Rp 45000</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="namaProduk cf">
                        <img src="">
                        <div>
                            <div class="judul">Daging Sapi</div>
                            <div>Varian : 1 kg</div>
                        </div>
                    </div>
                    <div class="hargaProduk cf">
                        <div>
                            <hr>
                        </div>
                        <div>
                            <div>Total Harga</div>
                            <div class="harga">Rp 45000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="infoPengiriman">
            <div class="judul">Info Pengiriman</div>
            <div class="alamat">
                <h3 class="h3pertama">Alamat</h3>
                <h3>:</h3>
                <div class="detailAlamat">
                    <p>nama</p>
                    <p>nomor</p>
                    <p>alamat</p>
                </div>
            </div>
        </div><br>
        <div class="rincianPembayaran">
            <div class="pembayaran">
                <div class="judul">Rincian Pembayaran</div>
                <div class="total">
                    <div>Metode Pembayaran</div>
                    <div>COD (Bayar di Tempat)</div>
                </div>
                <hr>
                <div class="total">
                    <div>Total Harga</div>
                    <div>Rp 45.000</div>
                </div>
                <div class="total">
                    <div>Total Ongkos Kirim</div>
                    <div>Rp 2.000</div>
                </div>
                <hr>
                <div class="total judul">
                    <div>Total Tagihan</div>
                    <div>Rp 47.000</div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>