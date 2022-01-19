<!doctype html>
<html lang="en">

<?php if (isset($this->data['user'])) {
    $this->extend('template/navbarAfterLogin');
} else {
    $this->extend('template/navbarLogin');
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/detailitem.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">

    <title>Detail Item</title>
</head>

<?= $this->section('content'); ?>

<body>
    <div class="container">
        <div class="back cf">
            <a href="<?php echo base_url(); ?>">
                <img src="/assets/arrow.png">
                <div>Back</div>
            </a>
        </div>
        <div class="content">
            <div class="image">
                <img src="<?= $item['image']; ?>" alt="">
            </div>
            <div class="text">
                <div class="judul">
                    <h1><?= $item['name']; ?></h1>
                    <h2>Rp <span id="detailitem_price"><?= $item['variant'][0]['price']; ?></span><span id='slash'> / </span><span id="detailitem_variant"><?= $item['variant'][0]['name']; ?></span> </h2>
                </div>
                <div class="detail">
                    <div>
                        <h3>Detail Produk</h3> <hr><br>
                    </div>
                    
                    <p><?= $item['description']; ?></p>
                </div>
                <div class="varian">
                    <h3>Pilih Varian</h3>
                    <div class="option" id="varian">
                        <?php foreach ($item['variant'] as $varian) : ?>
                            <input type="radio" id="<?= $varian['id'] ?>" name="varian" value="<?= $varian['id'] ?>">
                            <label for="<?= $varian['id'] ?>"  
                                onclick='radio(<?= '"'.$varian['price'].'","'.$varian['name'].'"' ?>)'>
                            <?= $varian['name'] ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="plusminus" style="display:flex;">
                        <button onclick="decrement()">-</button>
                        <input id=demoInput type=number min=0 max=110 value=1 disabled>
                        <button onclick="increment()">+</button>
                    </div>
                    <div class="beli">
                        <form action="<?php echo base_url(); ?>/cart" method="post">
                            <input type="hidden" name="quantity" value="1" id="qty">
                            <input type="hidden" name="variantID" value="<?= end($item['variant'])['id']; ?>" id="var">
                            <input type="submit" value="Beli" id="beli">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('<?=$item['variant'][0]['id']?>').checked = true;
        function increment() {
            document.getElementById('demoInput').stepUp();
            document.getElementById('qty').stepUp();
        }
        function decrement() {
            document.getElementById('demoInput').stepDown();
            document.getElementById('qty').stepDown();
        }

        function radio(price, variant) {
            let vars = document.getElementsByClassName("varians");
            for (let i = 0; i < vars.length; i++) {
                vars[i].classList.remove("hover");
                vars[i].addEventListener("click", function() {
                    vars[i].classList.add("hover");
                });
            }

            let idPlace = document.getElementById("var");
            let pricePlace = document.getElementById("detailitem_price");
            let variantPlace = document.getElementById("detailitem_variant");

            pricePlace.innerText = price;
            variantPlace.innerText = variant;
        }
    </script>
</body>

<?= $this->endSection(); ?>

</html>