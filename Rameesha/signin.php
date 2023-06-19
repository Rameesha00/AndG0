<?php
session_start();
if(  isset($_SESSION['user']) )
{
  header("location:homep.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","go");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $user=mysqli_real_escape_string($db,$_POST['user']);
      $pass=mysqli_real_escape_string($db,$_POST['pass']);
      // $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  user='$user' AND pass='$pass'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['user']=$user;
            header("location:homep.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone - Sign In</title>
  <style>
    body {
      background-color: darkblue;
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
    }
    label{
        color:blue;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color:blue;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 3px;
    }

    input[type="submit"] {
      background-color: darkblue;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #003366;
    }
  </style>
  <script>
    function signIn() {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Perform sign-in logic here
      console.log(`Signed in with username: ${username}, password: ${password}`);
    }
  </script>
  
</head>

<body>
  <div class="container">
    <h2>Sign In</h2>
    <form action="signin.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" class="form-control" name="user" required>

      <label for="password">Password</label>
      <input type="password" id="password" class="form-control" name="pass" required>

      <input type="submit" name="login_btn" value="Sign In" class="form-control" onclick="signIn()">
    </form>
  </div>
</body>

</html>
