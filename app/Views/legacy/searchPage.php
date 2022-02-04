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
            <?php foreach ($random as $d) : ?>

                <div class="card">
                    <img class="card__image" src="<?= $d['image']; ?>" alt="">
                    <div class="card__content">
                        <?= $d['name']; ?>
                        <p><span id="price">Rp <?= $d['variants_item'][0]['price']; ?></span><span id="variant">/<?= $d['variants_item'][0]['name']; ?></span> </p>
                    </div>
                    <div class="beliContainer">
                        <a class="beliButton button" href="<?php echo base_url(); ?>/item/<?php echo $d['slug']; ?>">
                            beli
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>






</body>



<?= $this->endSection(); ?>


</html>