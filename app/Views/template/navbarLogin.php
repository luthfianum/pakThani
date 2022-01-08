<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<header>
    <img class="logo" src="assets/pakthanilogo.png" alt="logo">
    <nav>
        <ul class="nav_links" style="padding-right: 20rem;">
            <li class="div1" style="padding-right: 10rem;"><a href="#">Kategori</a></li>
            <li class="div2">
                <input class="search__input" type="text" placeholder="Pencarian">
                </div>
            </li>
        </ul>
    </nav>
    <a class="cta" href="#"><button>Login</button></a>

</header>

<body>
    <?= $this->renderSection('content'); ?>
</body>