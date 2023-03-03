<html>
<?php session_start() ?>
<link rel="stylesheet" href="./add.css">
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Name: <input type="text" name="name" required>
            </td>
        </tr>
        <tr>
            <td>
                Code: <input type="text" name="code" required>
            </td>
        </tr>
        <tr>
            <td>
                Price: <input type="text" name="price" required>
            </td>
        </tr>
        <tr>
            <td>
                Image: <input type="file" name="img" id="img" required> <br>
                <input type="submit" name="btn" id="btn" value="Thêm">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['btn'])) {

    $file=$_FILES["img"];
    $tenfile=$file["name"];
    move_uploaded_file($file["tmp_name"],$tenfile);
    
$arr=[
    "name"=>$_POST['name'],
    "code"=>$_POST['code'],
    "price"=>$_POST['price'],
    "image"=> $tenfile,
    "sale"=>0
];
$_SESSION['oder'][]=$arr;
header("Location: http://localhost/btphp/exam/exam2.php");
}
?>

</html>