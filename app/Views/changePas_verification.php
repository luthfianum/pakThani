<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/emailVerification.css"> -->
    <title>Email Verification</title>
    <style>
        .box {
            /* display: flex; */
            /* justify-content: center;
            align-items: center; */
            padding: 20px;
            margin: 30px auto;
            width: 630px;
            height: 100px;
            background: #ffffff;
            border: 1px solid #000000;
            box-sizing: border-box;
            border-radius: 10px;
        }

        img {
            margin-left: 30%;
        }

        .container {
            width: 630px;
            height: 400px;
            background: #ffffff;
            /* border: 1px solid #000000; */
            box-sizing: border-box;
            border-radius: 10px;
            padding: 20px 0;
        }

        .flex {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #teks-pembuka {
            font-family: Nunito;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 49px;
            color: #000000;
        }

        #teks-isi {
            font-family: Nunito;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 33px;
            color: rgba(0, 0, 0, 0.6);
        }

        #teks-penutup {
            font-family: Nunito;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 33px;
            color: rgba(0, 0, 0, 0.6);
        }

        #btn-verify {
            margin: 0 110px;
        }

        #btn-verify button {
            width: 410px;
            height: 60px;
            background: #f7d100;
            border: 1px solid #000000;
            box-sizing: border-box;
            border-radius: 10px;
            font-family: Nunito;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 33px;
            align-items: center;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="flex">

        <div class="container">
            <div class="box">
                <img src="https://i.ibb.co/VC1gJPZ/logo.png" alt="logo" />
            </div>

            <div>
                <p id="teks-pembuka">Hello!</p>
            </div>

            <div>
                <p id="teks-isi">Click the button below to change your password.</p>
            </div>

            <div id="btn-verify">
                <a href="<?php echo base_url() . '/edit_password/' . $this->data['user_id']; ?>">
                    <button type="button" value="Submit">Change Your Password</button>
                </a>
            </div>

            <div>
                <p id="teks-penutup">If you did not create an account, no further action is required.</p>
            </div>
        </div>

    </div>

</body>

</html>