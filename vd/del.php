<?php session_start() ?>
<html>
<?php
        $id=$_GET["id"];
        if (isset($_SESSION['fruit'])){
          $n = count($_SESSION['fruit']);
        }
        if (isset($_SESSION['fruit'][$id])) {
          for ($i = $id; $i < $n-1; $i++) {
            $_SESSION['fruit'][$i]['tensp']=$_SESSION['fruit'][$i+1]['tensp'];
            $_SESSION['fruit'][$i]['giatien']=$_SESSION['fruit'][$i+1]['giatien'];
            $_SESSION['fruit'][$i]['mota']=$_SESSION['fruit'][$i+1]['mota'];
            $_SESSION['fruit'][$i]['hinhanh']=$_SESSION['fruit'][$i+1]['hinhanh'];
          }
            unset($_SESSION['fruit'][$n-1]);
          header("Location: http://localhost/btphp/vd/show.php");
        }

    ?>

</html>