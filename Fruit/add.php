<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <div class="form-group">
    <label for="fruit_name"></label>
    <input type="text" class="form-control" name="fruit_name" placeholder="Enter Fruit Name" required>
  </div>
  <div class="form-group">
    <label for="Desc"></label>
    <input type="text" class="form-control" name="Desc" placeholder="Enter Desc" required>
  </div>
  <div class="form-group">
    <label for="Price"></label>
    <input type="number" class="form-control" name="Price" placeholder="Enter Price" required>
  </div>
  <div class="form-group">
    <label for="img"></label>
    <input type="text" class="form-control" name="img" placeholder="Enter img" required>
  </div>
  <button type="submit" class="btn btn-primary" name="add">ADD</button>
</form>
<?php
    if(isset($_POST["add"])){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "testphp";
      $conn = new mysqli($servername, $username, $password, $dbname);
      $name=$_POST["fruit_name"];
      $desc=$_POST["Desc"];
      $price=$_POST["Price"];
      $img=$_POST["img"];
      $sql = "INSERT INTO fruit(fruit_name,fruit_desc,fruit_price,img)VALUES ('$name', '$desc',$price,'$img')";
      $result = $conn->query($sql);
      
      header("location:getdata.php");
    }
        ?>
</body>
</html>