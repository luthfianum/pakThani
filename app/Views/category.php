<!doctype html>
<html lang="en">

<?php if (isset($this->data['user'])) {
    $this->extend('template/navbarAfterLogin');
} else {
    $this->extend('template/navbarLogin');
}
?>

<?php
$data = $this->data;
$item = $data['items'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Home</title>

</head>
<?= $this->section('content'); ?>

<body>

    <div class="cards" style="display: flex; justify-content:space-around">
        <?php foreach ($items as $d) : ?>

            <div class="card" style="margin-top: 20px;">
                <img class="card__image" src="<?= $d['image']; ?>" alt="">
                <div class="card__content">
                    <?= $d['name']; ?>
                    <p><span id="price">Rp <?= $d['variants_item'][0]['price']; ?></span><span id="variant">/<?= $d['variants_item'][0]['name']; ?></span> </p>
                </div>
                <div class="beliContainer">
                    <button class="beliButton" onClick="updateData()">
                        beli
                    </button>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</body>
<?= $this->endSection(); ?>

</html>