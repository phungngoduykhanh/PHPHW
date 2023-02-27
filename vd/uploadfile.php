<html>
<?php session_start();


?>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <label for="file">file</label>
            <input type="file" name="file_upload" id="file">
        </tr>

    </table>
    <input type="submit" name="btn" value="Thêm">
</form>
<?php
    if(isset($_POST["btn"])){
        if(isset($_FILES["file_upload"])){
            $file=$_FILES["file_upload"];
            $tenfile=$file["name"];
            move_uploaded_file($file["tmp_name"],$tenfile);
            ?>
<img src="<?php echo $tenfile ?>">
<?php
}
}
?>


<!-- <?php
// if (isset($_POST['btn'])) {
//     $n = 0;
//     if (isset($_SESSION['usser']))
//         $n = count($_SESSION['usser']);
//         $n2=0;
//     $_SESSION['usser'][$n][$n2] = $_POST['ten'];
//     $_SESSION['usser'][$n][$n2=$n2+1] = $_POST['pass'];
//     header("Location: http://localhost:8080/vd/showuser.php");
// }
?> -->

</html>