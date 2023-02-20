<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  <!-- link icon -->
</head>
<body>
 <div class="wrapper">
   <header>Login Form</header>
   <form action="#" method="post">
     <div class="field email">
       <div class="input-area">
         <input type="text" placeholder="Email Address" name="1">
         <i class="icon fas fa-envelope"></i>
         <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
       </div>
       <div class="error error-txt">Email can't be blank</div>
     </div>
     <div class="field password">
       <div class="input-area">
         <input type="password" placeholder="Password" name="2">
         <i class="icon fas fa-lock"></i>
         <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
       </div>
       <div class="error error-txt">Password can't be blank</div>
     </div>
     <div class="pass-txt"><a href="#">Forgot password?</a></div>
     <input type="submit" value="Login" name="btn">
   </form>
   <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div>
 </div>
</body>
</html>

<?php if (isset($_POST["btn"])) {
 $a = $_POST["1"];
 $b = $_POST["2"];
 $boolean='';
 $validation = -1;
 $c = array("khanh" => "khanh123",
            "aaaa" =>"tuilaai",
            "ailatui" => "khongpit",
            "thang" => "thang011");
   foreach ($c as $name =>$passwork){
       if ($a == '' || $b == '') {
           $validation = 1;
           break;
       } else {
         if ($a == $name) {
           if ($b == $passwork) {
               $validation = 0;
               break;
           } else {
               $validation = 2;
           }
         }
       }
   }
   switch ($validation) {
       case -1 :
           echo "<script> alert ('đăng nhập sai tai khoan') </script>";
           break;
       case 2 :
           echo "<script> alert ('đăng nhập sai mat khau') </script>";
           break;
       case 0:
        //    echo "<script> alert ('Đăng nhập thành công')</script>";
            echo "<table class='table'>";
            echo    "<thead>";
            echo     " <tr>";
            echo           "<th scope='col'>STT</th>";
            echo           "<th scope='col'>Tên tài khoản</th>";
            echo            "<th scope='col'>Mật khẩu</th>";
            echo        "</tr>";
            echo    "</thead>";
            $a=0;
            foreach($c as $name =>$passwork) { 
                echo "<tbody>";
                echo    "<tr>";
                echo    "<th scope='row'>$a</th>";
                echo   "<td> $name</td>";
                echo   "<td>$passwork</td>";
                echo    "</tr>";
                $a++;
            }
            echo "</tbody>";
            echo "</table>";

           break;
       default:
           echo "<script> alert ('Form trong')</script>";
           break;
   }


   }
?>
