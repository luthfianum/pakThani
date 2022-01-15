<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/navbarAfterLogin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/detailitem.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>



<nav>
    <a href="<?php echo base_url(); ?>" class="pakthaniLogo" style="padding-top: 10px;">
        <img class="logo" src="<?php echo base_url(); ?>/assets/logo.png" alt="logo">
    </a>
    <a href="#">Kategori</a>
    <input class="search__input" type="text" placeholder="  Pencarian">
    <ul class="nav_links">
        <li>
            <div class="dropdown">
                <button class="buttonKeranjang">

                </button>
            </div>

        </li>
        <li>
            <button class="buttonListTransaksi">
            </button>
        </li>
    </ul>

</nav>









<body>
    <?= $this->renderSection('content'); ?>
</body>