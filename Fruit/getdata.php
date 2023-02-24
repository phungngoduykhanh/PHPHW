<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Img</th>
      <th scope="col">More</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testphp";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM fruit";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<th scope='row'>".$row['fruit_name']."</th>";
        echo "<td>".$row['fruit_desc']."</td>";
        echo "<td>".$row['fruit_price']."</td>";
        echo "<td> <img src='".$row['img']."' width=150px></td>";
        echo"<td><a href='edit.php?id=$row[id]'>Sua</a> | <a href='delete.php?id=$row[id]'>Xoa</a></td>";
        echo "</tr>";
    }
        ?>
</tbody>
</table>
<a href="http://localhost/btphp/Fruit/add.php">thêm trái cây</a>
</body>
</html>