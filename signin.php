<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn Page</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <script>
        function redirectAfterDelay() {
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 3000);
        }
    </script>
</head>
<body>
    <form action="signin_check.php" method="post" class="signin-container">
        
        <div class="logo">
            <img src="Images/MovieRiders-Logo.png" alt="MovieRiders Logo" width="200px" height="200px">
            <h2>Movie Riders</h2>
        </div>

        <div class="signin-box">

                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

                 <?php if (isset($_GET['success'])) { ?>
     		        <p class="success"><?php echo $_GET['success']; ?></p>
                    <script>redirectAfterDelay();</script>
     	        <?php } ?>

                <?php if (isset($_GET['name'])) { ?>
                    <div class="textbox">
                        <input type="text"
                               name="name" 
                               placeholder="Name" 
                               id="name"
                               value="<?php echo $_GET['name']; ?>"><br>
                    </div>
                <?php }else{ ?>
                    <div class="textbox">
                        <input type="text"
                               name="name"
                               placeholder="Name" 
                               id="name">
                    </div>
                <?php }?>



                <?php if (isset($_GET['uname'])) { ?>
                    <div class="textbox">
                        <input type="text"
                               name="uname" 
                               placeholder="Username" 
                               id="username"
                               value="<?php echo $_GET['uname']; ?>"><br>
                    </div>
                <?php }else{ ?>
                    <div class="textbox">
                        <input type="text"
                               name="uname"
                               placeholder="Username" 
                               id="username">
                    </div>
                <?php }?>


                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" id="password">
                </div>

                <div class="textbox">
                    <input type="password" name="r_password" placeholder="Password Again" id="r_password">
                </div>

                <button type="submit" class="btn">Sign In</button>
        </div>
        <a href="login.php" class="crtacc">Already have an account?</a>
    </form>
</body>
</html>
