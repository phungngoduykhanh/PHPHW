<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exam.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname" value="<?php if (isset($_POST['btn'])) { $firstname=$_POST['firstname'];checkfirstname($firstname);}?>" placeholder="first name"><br>
        <input type="text" name="lastname" value="<?php if (isset($_POST['btn'])) {$lastname=$_POST['lastname'];checklastname($lastname);}?>"  placeholder="last name"><br>
        <input type="text" name="email" value="<?php if (isset($_POST['btn'])) { $email=$_POST['email'];checkemail($email);}?>"  placeholder="email"><br>
        <input type="text" name="password" value="<?php if (isset($_POST['btn'])) { $password=$_POST['password'];checkpassword($password);}?>"  placeholder="password"><br>
        <input type="submit" value="sign up" name="btn" id="btn">
    </form>

</body>

<?php
    if (isset($_POST['btn'])) {
        echo "firstname: ".$_POST['firstname']."<br>";
        echo "lastname: ".$_POST['lastname']."<br>";
        echo "email: ".$_POST['email']."<br>";
        echo "password: ".$_POST['password']."<br>";
    }
    function checkfirstname($firstname){
        if($firstname==""){
            echo "firstname rỗng";
        }
        else{
            $a=is_numeric($firstname);
            if ($a==true) echo "vui lòng chỉ nhập các kí tự";
        } 
    }

    function checklastname($lastname){
        if($lastname==""){
            echo "lastname rỗng";
        }
        else{
            $a=is_numeric($lastname);
            if ($a==true) echo "vui lòng chỉ nhập các kí tự";
        } 
    };

    function checkemail($email)
    {
        if ($email=="") {
            echo "email rỗng";
        }
        else{
            $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
            if(!preg_match($regex, $email)) {
                echo "email không đúng quy định";
            }
        }
    }
    function checkpassword($password){
        if ($password=="") {
            echo "password rỗng";
        }else {
            if (strlen($password)<8) {
                echo "vui lòng nhập ít nhất 8 kí tự";
            }
        }
    };
?>
</html>




