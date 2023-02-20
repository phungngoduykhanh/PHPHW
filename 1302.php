<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form>
  <div class="form-group">
    <label for="exampleInputusername">User name</label>
    <input type="text" name="tkaccount" class="form-control" id="exampleInputusername" placeholder="Enter user name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="passworld" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="btn" class="btn btn-primary">Login</button>
</form>

<?php
  if(isset($_POST["tkaccount"]) && isset($_POST["passworld"])){
    $name = $_POST["tkaccount"];
    $pass = $_POST["passworld"];
  };
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["btn"]) && $_POST["btn"] == "Login") {
      // execute code to check user input
      $oldname = "abc@";
      $oldpass = "123";
      if ($name === $oldname && $pass === $oldpass){
        echo " dang nhap thanh cong";
      }elseif($name != $oldname && $pass === $oldpass){
        echo "ten tk sai";
      }elseif($name === $oldname && $pass != $oldpass){
        echo "pass tk sai";
      }elseif($name != $oldname && $pass != $oldpass){
        echo "pass và name tk sai";
      }
    }
  }
    
?>
</body>



</html>