<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["id"])) {
       $id=$_GET["id"];
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "testphp";
       $conn = new mysqli($servername, $username, $password, $dbname);
       $sql="SELECT * FROM fruit WHERE id=$id";
       $result = $conn->query($sql);
       $row=$result->fetch_assoc();
    }
    ?>
<form method="post">
  <div class="form-group">
    <label for="fruit_name"></label>
    <input type="text" class="form-control" name="fruit_name" placeholder="Enter Fruit Name" value="<?php echo $row['fruit_name']?>" required>
  </div>
  <div class="form-group">
    <label for="Desc"></label>
    <input type="text" class="form-control" name="Desc" placeholder="Enter Desc" value="<?php echo $row['fruit_desc']?>" required>
  </div>
  <div class="form-group">
    <label for="Price"></label>
    <input type="number" class="form-control" name="Price" placeholder="Enter Price" value="<?php echo $row['fruit_price']?>" required>
  </div>
  <div class="form-group">
    <label for="img"></label>
    <input type="text" class="form-control" name="img" placeholder="Enter img" value="<?php echo $row['img']?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
</form>
<?php
    if (isset($_POST["edit"])) {
        $name=$_POST["fruit_name"];
        $desc=$_POST["Desc"];
        $price=$_POST["Price"];
        $img=$_POST["img"];
        $sql = "UPDATE fruit SET fruit_name='$name', fruit_desc='$desc',fruit_price=$price,img='$img' WHERE id=$id";
        $result = $conn->query($sql);

        echo '<script>window.location.replace("getdata.php");</script>';
    }
    ?>
</body>
</html>