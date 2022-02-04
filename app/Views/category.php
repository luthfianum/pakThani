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


    <title>Category</title>

</head>
<?= $this->section('content'); ?>

<body>

    <div class="cards" style="display: flex; justify-content:start; flex-wrap:wrap; align-items:center; gap: 52px">
        <?php foreach ($items as $d) : ?>

            <div class="card" style="margin-top: 20px;">
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
</body>
<?= $this->endSection(); ?>

</html>