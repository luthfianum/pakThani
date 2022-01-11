<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/navbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/home.css">
</head>

<header>
    <div class="logo" style="position: relative;">
        <img class="logo" src="<?php echo base_url(); ?>/assets/logo.png" alt="logo">
    </div>

    <nav>
        <ul class="nav_links">
            <li class="div1" style="padding-right: 15rem;"><a href="#">Kategori</a></li>
            <li class="div2">
                <input class="search__input" type="text" placeholder="  Pencarian">
                </div>
            </li>
        </ul>
    </nav>
    <a class="cta" href="#"><button>Login</button></a>

</header>

<body>
    <?= $this->renderSection('content'); ?>
</body>