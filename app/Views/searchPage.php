<!doctype html>
<html lang="en">
<?php if (isset($this->data['user'])) {
    $this->extend('template/navbarAfterLogin');
} else {
    $this->extend('template/navbarLogin');
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/home.css">
    <title>Home</title>
</head>
<?php
$data = $this->data;
$item = $data['items'];
$random = $item['random'];
$daging = $item['daging'];
$buah = $item['buah'];
?>



<?= $this->section('content'); ?>

<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="recommendedCard">
        <div class="greeting">
            <h2>Hai, <span>Mahran</span>! Mau belanja apa hari ini?</h2>
        </div>
        <div class="recommendedText" style="display: flex; justify-content:space-between; padding-right:6rem; align-items:center">
            <h3>Today Recommended</h3>
            <a href="">Lihat Semua</a>
        </div>
        <div class="cards" style="display: flex; justify-content:space-around">
            <?php foreach ($random as $item) : ?>

                <div class="card">
                    <img class="card__image" src="<?= $item['image']; ?>" alt="">
                    <div class="card__content">
                        <?= $item['name']; ?>
                        <p><span id="price">Rp <?= $item['variants_item'][0]['price']; ?></span><span id="variant">/<?= $item['variants_item'][0]['name']; ?></span> </p>
                    </div>
                    <div class="beliContainer">
                        <button class="beliButton" onClick="updateData()">
                            beli
                        </button>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>






</body>



<?= $this->endSection(); ?>


</html>