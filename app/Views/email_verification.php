<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/emailVerification.css">
    <title>Email Verification</title>
</head>

<body>

    <div class="verification-body flex">

        <div class="header-logo flex">
            <img src="/assets/logo.png" alt="">
        </div>

        <div class="container">
            <div class="container-teks">
                <p id="teks-pembuka">Hello!</p>
            </div>

            <div class="container-teks">
                <p id="teks-isi">Click the button below to verify your email address.</p>
            </div>

            <div id="btn-verify">
                <a href="<?php echo base_url(); ?>">
                    <button type="button" value="Submit">Verify Email Address</button>
                </a>
            </div>

            <div class="container-teks">
                <p id="teks-penutup">If you did not create an account, no further action is required.</p>
            </div>
        </div>

    </div>

</body>

</html>