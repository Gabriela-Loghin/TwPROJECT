<?php include('Server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-login.css">
    <title>Workout Generator</title>
</head>
<body>
    <section class="login-container">
        <form action="#" method="POST">
            <label for="email-input">
                <span>Email</span>
                <input type="email" name="mail" id="email-input">
            </label>
            <label for="pasword-input">
                <span>Password</span>
                <input type="password" name="password" id="pasword-input">
            </label>
            <input type="submit" value="Login" id="submit-btn" name='login'>
            
        </form>
        <h2>Don't have an account?</h2><a href="./Register.php">Sign up here</a>
    </section>
    
</body>
</html>