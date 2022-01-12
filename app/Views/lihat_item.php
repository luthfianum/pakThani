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
            <a href="#">
                <img src="/assets/arrow.png">
                <div>Back</div>
            </a>
        </div>
        <div class="content">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="text">
                <div class="judul">
                    <h1>Daging Sapi Amazon</h1>
                    <h2><span>Rp 45.000</span> / 1 kg</h2>
                </div>
                <div class="detail">
                    <div>
                        <h3>Detail Produk</h3> <hr>
                    </div>
                    
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum, quae atque odit impedit alias corporis.</p>
                </div>
                <div class="varian" id="varian">
                    <h3>Pilih Varian</h3>
                    <form action="">
                        <div class="option" id="varian">
                            <input type="radio" id="250" name="varian" value="250">
                            <label class="varians hover" for="250" id="label"  onclick="radio()">250 gr</label>
                            <input type="radio" id="500" name="varian" value="500">
                            <label class="varians" for="500" id="label"  onclick="radio()">500 gr</label>
                            <input type="radio" id="1" name="varian" value="1">
                            <label class="varians" for="1" id="label" onclick="radio()">1 kg</label>
                        </div>
                        <div class="plusminus">
                            <button onclick="decrement()">-</button>
                            <input id=demoInput type=number min=0 max=110>
                            <button onclick="increment()">+</button>
                            </div>
                        <div>
                        <div class="beli">
                            <input type="submit" value="Beli">
                        </div>
                        </div>
                    </form>
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

        function radio() {
            let vars = document.getElementsByClassName("varians");
            for (let i = 0; i < vars.length; i++) {
                vars[i].classList.remove("hover");
                vars[i].addEventListener("click", function() {
                    vars[i].classList.add("hover");
                });
            }
        }
    </script>
</body>


</html>