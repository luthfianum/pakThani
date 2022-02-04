<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/loginAlternate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Forgot Password</title>
</head>

<body>
    <div id="login-logo">
        <img src="/assets/logo.png" alt="">
    </div>

    <div class="login-card flex">
        <div style="margin: 0 auto; padding: 10% 0;">
            <div class="flex" style="flex-direction: row; justify-content: space-between; align-items: center;">
                <p style="text-align: left;">Enter your email</p>
                <a href="<?php echo base_url() . '/login'; ?>"><i class="fas fa-times"></i></a>
            </div>

            <div class="wrong-input">
                <?php if(session()->getFlashdata('msg')):?>
                    <?= session()->getFlashdata('msg') ?></br></br>
                <?php endif;?>
                <?php if ($send == true) {
                        echo "<script> alert('Link to edit password has been send to your email!') </script>";
                } ?>
            </div>

            <div id="form-signup">
                <form action="<?php echo base_url(); ?>/login_password=forgot" method="post">  
                
                    <div class="flex">
                        <label for="user-email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>

                    <div id="btn-signup">
                        <button type="submit" value="Submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>