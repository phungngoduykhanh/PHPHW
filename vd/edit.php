<?php session_start() ?>
<html>

<?php
$id = $_GET["id"];
if (isset($_GET["id"])) { ?>
<form method='post' enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Tên sản phẩm: <br>
                <input type='text' name='tenup' value="<?php echo $_SESSION['fruit'][$id]['tensp']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Giá sản phẩm:<br> <input type='text' name='giaup'
                    value="<?php echo $_SESSION['fruit'][$id]['giatien']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Mô tả sản phẩm:<br> <input type='text' name='motaup'
                    value="<?php echo $_SESSION['fruit'][$id]['mota']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Hình ảnh sản phẩm:<br> <input type='file' name='anhup'
                    value="<?php echo $_SESSION['fruit'][$id]['hinhanh']; ?>"> <br>
                <br>
                <input type='submit' name='btnup' value='Update'>
            </td>
        </tr>
    </table>
</form>
<?php } ?>
<?php
    if(isset($_POST["btnup"])){
        if(isset($_POST["tenup"]) || isset($_POST["giaup"]) || isset($_POST["motaup"]) || isset($_POST["anhup"])){
            $_SESSION['fruit'][$id]['tensp']=$_POST["tenup"];
            $_SESSION['fruit'][$id]['giatien']=$_POST["giaup"];
            $_SESSION['fruit'][$id]['mota']=$_POST["motaup"];
            if(isset($_FILES["anhup"])){
                $file=$_FILES["anhup"];
                $tenfile=$file["name"];
                move_uploaded_file($file["tmp_name"],$tenfile);
            $_SESSION['fruit'][$id]['hinhanh']=$tenfile;
        }
        header("Location: http://localhost/btphp/vd/show.php");
    }
}
?>

</html>