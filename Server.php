<?php
 session_start();

 $username="";
 $First_N="";
 $Last_N="";
 $Pass="";
 $Cpass="";
 $Gender="";
 $Email="";
 

 

  $errors=array();

  $db=mysqli_connect('localhost','root','','user') or die("Could not connect to datebase...");

  if(isset($_POST['register']))
  {   

    
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $First_N=mysqli_real_escape_string($db,$_POST['FN']);
      $Last_N=mysqli_real_escape_string($db,$_POST['FN']);
      $Pass=mysqli_real_escape_string($db,$_POST['password']);
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
      if(empty($Pass))
      {
        array_push($errors,"Password required");
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

      $user_check_querry="SELECT * FROM users WHERE username='$username' OR password=$Pass or email='$Email' LIMIT 1";
      $results=mysqli_query($db,$user_check_querry);
      

      if($results)
      {
        $row=mysqli_num_rows($results);
        if($row)
        {
        
        if($user['password']==$Pass)
        {
            array_push($errors,"Password already taken!");
        }
        if($user['Email']==$Email)
        {
            array_push($errors,"Mail address already taken!");
        }
        }
      }

      

      if(count($errors)==0)
      {
         
          $sql="INSERT INTO users (username, password, email) VALUES ('$username','$Pass','$Email')";
          mysqli_query($db,$sql);
          $_SESSION['username']=$username;
          $_SESSION['succes']="Signed in";
          header('location:./Homepage.php');
          
          
      }
    }

      if(isset($_POST['login']))
      {
            
            $user=$_POST['user'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            

            if(empty($user))
           {
             array_push($errors,"Email is required");
           }
           if(empty($password))
          {
           array_push($errors,"Password required");
          }
          if(empty($email))
          {
            array_push($errors,"Email required");
          }


          $user_check_querry="SELECT * FROM users WHERE username='$user' AND password='$password' ";
          $results=mysqli_query($db,$user_check_querry);
      
          if(count($errors)==0)
      {
          
          
          $querry="SELECT * FROM users WHERE username='$user' AND password='$password' ";
          $result=mysqli_query($db,$querry);
          
            if(mysqli_num_rows($result))
            {
          $_SESSION['username']=$user;
          $_SESSION['succes']="Logged in";
          header('location:./Homepage.php');
            }
            else{
              array_push($errors,"Wrong Mail/Password");
            }
          
      }
      

    }

      if(isset($_GET['logout']))
      {
          session_destroy();
          unset($_SESSION['username']);
          
      }


  
?>