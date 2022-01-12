<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/lihatitem.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">

    <title>Lihat Item</title>
</head>
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
                    <h2>Rp <span id="price"><?= $item['variant'][0]['price']; ?></span> / <span id="variant"><?= $item['variant'][0]['name']; ?></span> </h2>
                </div>
                <div class="detail">
                    <div>
                        <h3>Detail Produk</h3> <hr>
                    </div>
                    
                    <p><?= $item['description']; ?></p>
                </div>
                <div class="varian" id="varian">
                    <h3>Pilih Varian</h3>
                    <div class="option" id="varian">
                        <?php foreach ($item['variant'] as $varian) : ?>
                            <input type="radio" id="<?= $varian['id'] ?>" name="varian" value="<?= $varian['id'] ?>">
                            <label class="varians hover" for="<?= $varian['name'] ?>" id="label"  onclick='radio(<?= '"'.$varian['price'].'","'.$varian['name'].'"' ?>)'><?= $varian['name'] ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="plusminus">
                        <button onclick="decrement()">-</button>
                        <input id=demoInput type=number min=0 max=110>
                        <button onclick="increment()">+</button>
                    </div>
                    <div class="beli">
                        <input type="submit" value="Beli">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }
        function decrement() {
            document.getElementById('demoInput').stepDown();
        }

        function radio(price, variant) {
            let vars = document.getElementsByClassName("varians");
            for (let i = 0; i < vars.length; i++) {
                vars[i].classList.remove("hover");
                vars[i].addEventListener("click", function() {
                    vars[i].classList.add("hover");
                });
            }

            let pricePlace = document.getElementById("price");
            let variantPlace = document.getElementById("variant");

            pricePlace.innerText = price;
            variantPlace.innerText = variant;
        }

        
    </script>
</body>


</html>