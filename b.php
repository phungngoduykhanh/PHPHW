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
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">GIá tiền</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Hình ảnh</th>
    </tr>
  </thead>
  <tbody>
  <?php session_start();
  for ($i=0; $i <count($_SESSION["arr"]) ; $i++) { 
      echo "<tr>";
      echo "<th scope='row'>".$_SESSION["arr"][$i][0]. "</th>";
      echo "<td>".$_SESSION["arr"][$i][1]."</td>";
      echo "<td>".$_SESSION["arr"][$i][2]."</td>";
      echo "<td> <img src=".$_SESSION["arr"][$i][3]." alt='a'></td>";
      echo "</tr>";
  }
    
  ?>
  </tbody>
</table>
</body>
</html>