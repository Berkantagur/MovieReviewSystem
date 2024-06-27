<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <form action="login.php" method="post" class="login-container">
        
        <div class="logo">
            <img src="Images/MovieRiders-Logo.png" alt="MovieRiders Logo" width="200px" height="200px">
            <h2>Movie Riders</h2>
        </div>

        <div class="login-box">

                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>

                <div class="textbox">
                    <input type="text" name="uname" placeholder="Username" id="username">
                </div>

                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" id="password">
                </div>

                <button type="submit" class="btn">Log In</button>
        </div>
        <a href="signin.php" class="crtacc">Create an account</a>
    </form>
</body>
</html>
