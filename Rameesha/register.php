<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone - Register</title>
  <style>
    body {
      background-color: darkblue;
      color: white;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    p{
      color: darkblue;
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
      color:black;
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
    function register() {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Perform registration logic here
      console.log(`Registered with username: ${username}, password: ${password}`);
    }
  </script>

</head>

<body>
<?php  
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
  }
  
  //submit these to database
  
  //Connecting to dataBase
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "go";
  
  //Creating database connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
  }
  else
  {
  $sql="INSERT INTO `users` (`User`, `Pass`) VALUES ('$user', '$pass')";
  $result = mysqli_query($conn,$sql);
  
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You ' .$username. ' have logged in successfully!.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else{
    echo "Record was not inserted";
  
  }
  }

  //submit these to database
?>
  <div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="user" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="pass" required>

    
      <input type="submit" value="Register" onclick="register()">
      <p>If you are already regidtered please! <a href="signin.php">signin</a></p>


    </form>
    
  </div>
</body>

</html>
