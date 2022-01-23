<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/loginAlternate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>

<body>
    <div id="login-logo">
        <img src="/assets/logo.png" alt="">
    </div>

    <div class="login-card flex">
        <div style="margin: 0 auto; padding: 10% 0;">
            <div class="flex" style="flex-direction: row; justify-content: space-between; align-items: center;">
                <p style="text-align: left;">Enter new password &nbsp;&nbsp;&nbsp;</p>
                <a href="<?php echo base_url() . '/login'; ?>"><i class="fas fa-times"></i></a>
            </div>

            </br>

            <div id="form-login">
                <form class="flex" action="<?php echo base_url(); ?>/login" method="post">

                    <div class="flex" >
                        <label for="user-email">Password</label>
                        <input type="email" id="email" name="email" placeholder="Enter new password">
                    </div>

                    <div id="btn-daftar">
                        <a href="<?php echo base_url(); ?>/login10%password=forgot">
                            <button type="button" value="Submit">change</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>