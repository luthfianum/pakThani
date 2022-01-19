<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="/css/verificationSucceed.css">
    <title>Verification Success</title>
</head>

<body>

    <div class="flex">

        <div class="container">
            <div class="box">
                <img src="https://i.ibb.co/VC1gJPZ/logo.png" alt="logo">
            </div>

            <div id="pembuka">
                <p id="teks-pembuka">Verification Success!</p>
            </div>

            <div id="isi">
                <p id="teks-isi">Your account has been verified</p>
            </div>

            <div id="btn-return">
                <a href="<?php echo base_url() . '/login'; ?>">
                    <button type="button" value="Submit">Go to Login page</button>
                </a>
            </div>
        </div>

    </div>

</body>

</html>