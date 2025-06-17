<?php
$login=0;
$Invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'conn.php';
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT*FROM webs WHERE name='$name' AND password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
        $login=1;
    }
    else{
        $Invalid=1;
    
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background: url('shopy.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      max-width: 400px;
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-control {
      margin-bottom: 15px;
    }

    .btn-login {
      width: 100%;
      background-color: #28a745;
      color: white;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #218838;
    }

    .cancel-btn {
      background-color: #dc3545;
      width: 100%;
      margin-top: 10px;
    }

    .cancel-btn:hover {
      background-color: #c82333;
    }

    .forgot-password {
      text-align: right;
      display: block;
      margin-top: 10px;
    }

    .avatar-container {
      text-align: center;
      margin-bottom: 15px;
    }

    .avatar {
      width: 80px;
      border-radius: 50%;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="avatar-container">
    <img src="biriyani.jpeg" alt="Avatar" class="avatar">
  </div>

  <h2>Login</h2>

  <form id="form2" onsubmit="return formValidation()">
    <div class="mb-3">
      <label for="username" class="form-label"><b>Email</b></label>
      <input type="email" class="form-control" id="username" placeholder="Enter Email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label"><b>Password</b></label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="rememberMe">
      <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>

    <button type="submit" class="btn btn-login">Login</button>
    <a href="#" class="forgot-password">Forgot password?</a>
    <a href="index.html"><button type="button" class="btn cancel-btn">Cancel</button></a>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Basic JS Validation -->
<script>
  function formValidation() {
    const email = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    if (!email || !password) {
      alert("Please fill in all fields.");
      return false;
    }
    return true;
  }
</script>

</body>
</html>