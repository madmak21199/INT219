<?php
//require("common.php");
if (isset($_SESSION['email_id'])) {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  @extends('loginhead')      
<title>login page </title>
</head>
<body>
    <br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
    <div class="col-sm-12 col-lg-12">   
<div class="loginbox">
<br/>
<br/>
<img src="img/face.png" class="log">
<h1>LOGIN</h1>
<form action="/login_submit" method="POST">@csrf
<label>E-mail :</label>
<input type="text" name="email_id">
@error('email_id')
<div class="e1">{{$message}}</div>
@enderror
<label>Password :</label>
<input type="password" name="pass1">
@error('pass1')
<div class="e1">{{$message}}</div>
@enderror
<button  type="submit" name="submit">Login</button>
<br><br>
<div class="a8">{{$error ?? ''}}</div>
</form>
<div class="col-12 forgot">
			<b><a href="signup" style="color: red;">Create Account?</a></b>
</div>
</div>
</div>
</div>
</body>
</html>
