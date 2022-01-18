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


<?php
$user = $this->data['user'];
$username = $user['username'];
?>
<nav>
    <a href="<?php echo base_url(); ?>" class="pakthaniLogo" style="padding-top: 10px;">
        <img class="logo" src="<?php echo base_url(); ?>/assets/logo.png" alt="logo">
    </a>
    <div class="dropdown">
        <a class="dropbtn" style="cursor: pointer;">Kategori</a>
        <div class="dropdown-content" style="width: max-content;">
            <a href="<?php echo base_url(); ?>/category/daging" style="display: flex; align-items:center"><img src="https://i.ibb.co/D7jgSKx/icon-Thanksgiving.png" alt=""> Daging</a>
            <a href="<?php echo base_url(); ?>/category/buah" style="display: flex; align-items:center"><img src="https://i.ibb.co/4R4w5K5/icon-Group-Of-Fruits.png" alt=""> Buah</a>
            <a href="<?php echo base_url(); ?>/category/rempah" style="display: flex; align-items:center"><img src="https://i.ibb.co/88xHxQB/icon-Garlic.png" alt=""> Rempah</a>
            <a href="<?php echo base_url(); ?>/category/sayuran" style="display: flex; align-items:center"><img src="https://i.ibb.co/23BGj1r/icon-Group-Of-Vegetables.png" alt=""> Sayuran</a>
            <a href="<?php echo base_url(); ?>/category/organik" style="display: flex; align-items:center"><img src="https://i.ibb.co/0VpWnxC/icon-Natural-Food.png" alt=""> Organik</a>
            <a href="<?php echo base_url(); ?>/category/terlaris" style="display: flex; align-items:center"><img src="https://i.ibb.co/M5gHb45/icon-Bookmark.png" alt=""> Terlaris</a>
        </div>
    </div>
    <input id="searchBar" class="search__input" type="text" placeholder="  Pencarian" one onsubmit="search()">



    <ul class="nav_links">
        <li>
            <a class="buttonKeranjang" href="<?php echo base_url(); ?>/checkout">
                <img src="/assets/Basket.png" alt="">
            </a>
        </li>
        <li>
            <a class="buttonListTransaksi" href="<?php echo base_url(); ?>/transaction">
                <img src="/assets/PurchaseOrder.png" alt="">
            </a>
        </li>
        <li>
            <div class="dropdown-button">
                <button class="dropbtn" style="cursor: pointer;"><?= $username; ?> </button>
                <div class="dropdown-content" style="margin-top:45px; margin-left:30px">
                    <a class="alamat" href="<?php echo base_url(); ?>/category/buah" style="display: flex; align-items:center"> Alamat Saya</a>
                    <a class="logout" href="<?php echo base_url(); ?>/logout" style="display: flex; align-items:center"> Logout</a>

                </div>
            </div>
        </li>
    </ul>

    <script>
        $("#searchBar").on('keyup', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                let x = $("#searchBar").val();
                window.open(`<?php echo base_url(); ?>/search/${x}`, "_self")
            }
        });
    </script>

</nav>









<body>
    <?= $this->renderSection('content'); ?>
</body>