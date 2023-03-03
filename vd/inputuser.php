<html>
<?php session_start() ?>
<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                Tendangnhap: <input type="text" name="ten" required>
            </td>
        </tr>
        <tr>
            <td>
                pass: <input type="text" name="pass" required>
            </td>

        </tr>

    </table>
    <input type="submit" name="btn" value="Thêm">
</form>
<?php
if (isset($_POST['btn'])) {
    $n = 0;
    if (isset($_SESSION['usser']))
        $n = count($_SESSION['usser']);
        $n2=0;
    $_SESSION['usser'][$n][$n2] = $_POST['ten'];
    $_SESSION['usser'][$n][$n2=$n2+1] = $_POST['pass'];
    header("Location: http://localhost/btphp/vd/showuser.php");
}
?>

</html>