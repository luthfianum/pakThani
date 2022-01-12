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
?>


<?= $this->section('content'); ?>

<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <div class="carousel" style="display:flex;">
        <div class="owl-carousel owl-theme" style="width:55%">
            <div class="item">
                <img src="https://i.ibb.co/3RdkjFg/Animated-Carousel-2.png" alt="" style="width: 100%;max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/k29tZGx/ubi-cilembu.png" alt="" style="width: 100%; max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/P4by44B/telur-puyuh.png" alt="" style="width: 100%; max-height: 300px">
            </div>
        </div>
        <div class="kategori" style="width: 33.33%; display:flex; flex-wrap:wrap; align-items:center">
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px;align-items:center ">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/D7jgSKx/icon-Thanksgiving.png" alt="" style="width: 50%; ">
                    Daging
                </a>
            </div>
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px;">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/4R4w5K5/icon-Group-Of-Fruits.png" alt="" style="width: 50%;">
                    Buah
                </a>
            </div>
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px; ">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/88xHxQB/icon-Garlic.png" alt="" style="width: 50%;">
                    Rempah
                </a>

            </div>
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px; ">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/23BGj1r/icon-Group-Of-Vegetables.png" alt="" style="width: 50%;">
                    Sayuran
                </a>

            </div>
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px; ">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/88xHxQB/icon-Garlic.png" alt="" style="width: 50%;">
                    Organik
                </a>

            </div>
            <div class="logoAtas" style="width: 30%; text-align:center; padding-top:30px; ">
                <a href="" style="display: flex;flex-direction:column; align-items:center ">
                    <img src="https://i.ibb.co/88xHxQB/icon-Garlic.png" alt="" style="width: 50%;">
                    Terlaris
                </a>

            </div>
        </div>
    </div>





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
                        <?= $item['description']; ?>
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





    <div class="anekaDaging">
        <div class="anekaDagingText" style="display: flex; justify-content:space-between; padding-right:6rem; align-items:center">
            <h3>Aneka Daging</h3>
            <a href="">Lihat Semua</a>
        </div>
        <div class="cards" style="display: flex; justify-content:space-around">
            <?php for ($x = 0; $x < 6; $x++) : ?>

                <div class="card">
                    <img class="card__image" src="https://fakeimg.pl/400x300/009578/fff/" alt="">
                    <div class="card__content">

                    </div>
                    <div class="beliContainer">
                        <button class="beliButton" onClick="updateData()">
                            beli
                        </button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="carousel" style="display:flex; padding-top:20px; padding-right:5px">
        <div class="owl-carousel owl-theme" style="width:43.75%">
            <div class="item">
                <img src="https://i.ibb.co/fSzsptW/baby-jagung.png" alt="" style="width: 100%;max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/k29tZGx/ubi-cilembu.png" alt="" style="width: 100%; max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/P4by44B/telur-puyuh.png" alt="" style="width: 100%; max-height: 300px">
            </div>
        </div>
        <div class="owl-carousel owl-theme" style="width:43.75%">
            <div class="item">
                <img src="https://i.ibb.co/fSzsptW/baby-jagung.png" alt="" style="width: 100%;max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/k29tZGx/ubi-cilembu.png" alt="" style="width: 100%; max-height: 300px">
            </div>
            <div class="item">
                <img src="https://i.ibb.co/P4by44B/telur-puyuh.png" alt="" style="width: 100%; max-height: 300px">
            </div>
        </div>
    </div>


    <div class="anekaBuah">
        <div class="anekaBuahText" style="display: flex; justify-content:space-between; padding-right:6rem; align-items:center">
            <h3>Aneka Buah</h3>
            <a href="">Lihat Semua</a>
        </div>
        <div class="cards " style="display: flex; justify-content:space-around">

            <?php for ($x = 0; $x < 6; $x++) : ?>

                <div class="card">
                    <img class="card__image" src="https://fakeimg.pl/400x300/009578/fff/" alt="">
                    <div class="card__content">

                    </div>
                    <div class="beliContainer">
                        <button class="beliButton" onClick="updateData()">
                            beli
                        </button>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>


    <script>
        $('.owl-carousel').owlCarousel({
            center: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: false,
            loop: true,
            items: 1,
            number: 1,
            margin: 15
        })
    </script>

</body>



<?= $this->endSection(); ?>


</html>