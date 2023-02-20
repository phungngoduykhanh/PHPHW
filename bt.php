<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        từ cần tra:<input type="text" name="word">
        <input type="submit" name="btn" >
    </form>
</body>

<?php
if(isset($_POST['btn'])){
    $Dist=array("dog"=>"chó","cat"=>"mèo","chicken"=>"gà","pig"=>"heo");
    $word=$_POST["word"];
    foreach ($Dist as $WordEnglish => $wordVN) {
        if($WordEnglish==$word){
            echo $wordVN;
            break;
        }
    }
}
?>
</html>