<?php
 session_start();

  $username="";
  $First_N="";
  $Last_N="";
  $Pass="";
  $Cpass="";
  $Gender="";
  $Email="";
  

  $password="";
  $email="";

  $errors=array();

  $db=mysqli_connect('localhost','root','','users');

  if(isset($_POST['register']))
  {   
      $username=mysqli_real_escape_string($db,$_POST['UsName']);
      $First_N=mysqli_real_escape_string($db,$_POST['FN']);
      $Last_N=mysqli_real_escape_string($db,$_POST['FN']);
      $Pass=mysqli_real_escape_string($db,$_POST['PASS']);
      $Cpass=mysqli_real_escape_string($db,$_POST['Cpass']);
      $Gender=mysqli_real_escape_string($db,$_POST['gender']);
      $Email=mysqli_real_escape_string($db,$_POST['email']);


      if(empty($username))
      {
          array_push($errors,"Username required");
      }
      if(empty($First_N))
      {
        array_push($errors,"First name required");
      }
      if(empty($Last_N))
      {
        array_push($errors,"Last name required");
      }
      if(empty($PASS))
      {
        array_push($errors,"Password required");
      }
      if(empty($Cpass))
      {
        array_push($errors,"You need to confirm the password");
      }
      if($Pass!=$Cpass)
      {
          array_push($errors,"Password don't match");
      }
      if(empty($Gender))
      {
        array_push($errors,"Select a gender");
      }
      if(empty($Email))
      {
        array_push($errors,"Email is required");
      }

      $user_check_querry="SELECT * FROM users WHERE Username='$username' OR Password=$Pass OR Email_Address='$Email' LIMIT 1";
      $results=mysqli_query($db,$user_check_querry);
      $user=mysqli_fetch_assoc($results);

      if($user)
      {
        if($user['UsName']=='$username')
        {
            array_push($errors,"User already exists!");
        }
        if($user['PASS']=='$Pass')
        {
            array_push($errors,"Password already taken!");
        }
        if($user['Email']=='$Email')
        {
            array_push($errors,"Mail address already taken!");
        }
      }

      

      if(count($errors)==0)
      {
          $password=md5($Pass);
          $sql="INSERT into users (Username,First_Name,Last_Name,Password,Confirm_Password,Gender,Email_Address) VALUES ('$username','$First_N','$Last_N','$Pass','$Cpass','$Gender','$Email')";
          mysqli_query($db,$sql);
          $_SESSION['UsName']=$username;
          $_SESSION['succes']="Signed in";
          header('location:Homepage.php');
          
          
      }
    }

      if(isset($_POST['login']))
      {
            $email=mysqli_real_escape_string($db,$_POST['mail']);
            $password=mysqli_real_escape_string($db,$_POST['password']);

            if(empty($email))
           {
             array_push($errors,"Email is required");
           }
           if(empty($password))
          {
           array_push($errors,"Password required");
          }
    

          if(count($errors)==0)
      {
          $password=md5($password);
          $sql="SELECT * FROM users WHERE Password=$password AND Email_Address=$email";
          mysqli_query($db,$sql);
          $_SESSION['UsName']=$username;
          $_SESSION['succes']="Logged in";
          header('location:Homepage.php');
          
      }
      else
      {
          array_push($errors,"Wrong Mail/Password");
      }

    }

      if(isset($_GET['logout']))
      {
          session_destroy();
          unset($_SESSION['UsName']);
          
      }


  
?>