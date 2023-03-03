<html>
<?php session_start() ?>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Tên sản phẩm: <input type="text" name="ten" required>
            </td>
        </tr>
        <tr>
            <td>
                Giá sản phẩm: <input type="text" name="gia" required>
            </td>
        </tr>
        <tr>
            <td>
                Mô tả sản phẩm: <input type="text" name="mota" required>
            </td>
        </tr>
        <tr>
            <td>
                Hình ảnh sản phẩm: <input type="file" name="anh" required> <br>
                <input type="submit" name="btn" value="Thêm">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST['btn'])) {
    $n = 0;
    if (isset($_SESSION['fruit']))
        $n = count($_SESSION['fruit']);
    $_SESSION['fruit'][$n]['tensp'] = $_POST['ten'];
    $_SESSION['fruit'][$n]['giatien'] = $_POST['gia'];
    $_SESSION['fruit'][$n]['mota'] = $_POST['mota'];
    if(isset($_FILES["anh"])){
        $file=$_FILES["anh"];
        $tenfile=$file["name"];
        move_uploaded_file($file["tmp_name"],$tenfile);
        $_SESSION['fruit'][$n]['hinhanh'] = $tenfile;
}
header("Location: http://localhost/btphp/vd/show.php");
}
?>

</html>