
<?php include('Server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-reg.css">
    <title>Workout Generator</title>
</head>
<body>

    
    <div class="wrapper">

        <h1 id="text">
            <span>R</span>
            <span>E</span>
            <span>G</span>
            <span>I</span>
            <span>S</span>
            <span>T</span>
            <span>E</span>
            <span>R</span>
        </h1>
        <form action="./Register.php" method="POST">
          <?php include('errors.php'); ?>
         <div class="Form">
         <div class="Input">
              <label>Username</label>
              <input type="text" class="input" name='username'  >
            </div>
            <div class="Input">
              <label>First Name</label>
              <input type="text" class="input" name='FN' >
            </div>
            <div class="Input">
                <label>Last Name</label>
                <input type="text" class="input" name='LN' >
              </div>
              <div class="Input">
                <label>Password</label>
                <input type="password" class="input" name='password' >
              </div>
              <div class="Input">
                <label>Confirm Password</label>
                <input type="password" class="input" name="Cpass" >
              </div>
              <div class="Input">
                <label>Gender</label>
                <div class="Gender_select">
                    <select name='gender' >
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

              </div>
              
              <div class="Input">
                <label>Email Address</label>
                <input type="email" class="input" name='email' >
              </div>
              <div class="Input">
                <input type="submit" value="Register" class="btn" name='register'>
              </div>
         </div> 
        </form>
        <h2>If you already have an account...</h2><a href="./login.php">Log In here</a>
        
    </div>



</body>
</html>