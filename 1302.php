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
  <button type="t" name="btn" class="btn btn-primary">Login</button>

  nhập một mảng: <input type="text" name="n" >
</form>

<?php
   $array = [ 9 , 2 ,3 ,6 ,20 ,30 ,40 ,10, 4];




   $max = $array[0];
   $min = $array[0];
   $position_max=0;
   $position_min = 0;




   for ($i = 0; $i < count($array); $i++)
   {
         if ($array[$i] > $max){
            $max = $array[$i];
            $position_max = $i;
         }
         if ($array[$i] < $min){
            $min = $array[$i];
            $position_min = $i;
         }
      }
 
   echo "Giá trị lớn nhất là : $max , nằm tại vị trí : $position_max <br>";
   echo "Giá trị nhỏ nhất là : $min , nằm tại vị trí : $position_min";
?>

<?php
  if(isset($_POST["tkaccount"]) && isset($_POST["passworld"])){
    $name = $_POST["tkaccount"];
    $pass = $_POST["passworld"];
  };
  if(isset($_POST["btn"])){
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
?>
</body>



</html>