<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Password</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .wrong-input {
            font-size: 15px;
        } #login-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        } .login-card {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5%;
            width: 20%;
            min-width: 410px;
            height: fit-content;
            /* left: 515px;
            top: 165px; */
            padding: 50px auto;

            background: #ffffff;
            box-shadow: 0px 1px 10px -1px rgba(0, 0, 0, 0.2);
            border-radius: 10px;

            font-family: Nunito;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 33px;
            display: flex;
            /* align-items: center; */
        } input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 16px 0;
            display: inline-block;
            border: 1px solid rgba(0, 0, 0, 0.4);
            box-sizing: border-box;
            border-radius: 10px;
        } #form-login {
            /* position: relative; */
            width: 100%;
            font-weight: bold;
            font-size: 14px;
            line-height: 19px;
            display: flex;
            color: rgba(0, 0, 0, 0.6);
            /* left: -47px;
            top: 5px; */
            /* margin: 0 auto; */
        } #form-login a {
            text-align: right;
            color: #4cb654;
            font-weight: 300;
        } #btn-signup button {
            width: 100%;
            background: rgba(247, 209, 0, 0.45);
            border-radius: 10px;
            margin: 16px 0;
            padding: 10px;
            cursor: pointer;

            font-family: Nunito;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 25px;
        } .flex {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div id="login-logo">
        <img src="/assets/logo.png" alt="">
    </div>

    <div class="login-card flex">
        <div style="margin: 0 auto; padding: 10% 0;">
            <div class="flex" style="flex-direction: row; justify-content: space-between; align-items: center;">
                <p style="text-align: left;">Enter new password</p>
            </div>

            </br>

            <div class="wrong-input">
                <?php if(session()->getFlashdata('msg')):?>
                    <?= session()->getFlashdata('msg') ?></br></br>
                <?php endif;?>
            </div>

            <div id="form-signup">
                <form action="<?php echo base_url() . '/edit=success/' . $this->data['id']; ?>" method="post">

                    <div class="flex">
                        <label for="user-password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Kata Sandi Baru">
                    </div>

                    <div id="btn-signup">
                        <button type="submit" value="Submit">Daftar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>