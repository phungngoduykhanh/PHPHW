<!DOCTYPE html>
<?php session_start() ?>
<html>

<body>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>

    <table>
        <tr>
            <td>Tên dang nhap</td>
            <td>Pass</td>
            <td>Hành động</td>
            <td>Hành động</td>
        </tr>
        <?php
        if (isset($_SESSION['usser'])) {
            print_r($_SESSION['usser']);
            $n = count($_SESSION['usser']);
            for ($i = 0; $i < $n; $i++) {
                $n2 = 0;

        ?>
        <tr>
            <td><?php echo $_SESSION['usser'][$i][$n2]; ?></td>
            <td><?php echo $_SESSION['usser'][$i][$n2=$n2+1]; ?></td>
            <td><a name="btnedit" href="http://localhost/btphp/vd/edit.php">Edit </a></td>
            <td><a href="http://localhost/btphp/vd/del.php">Delete </a></td>
        </tr>

        <?php }
        }
        ?>
    </table>
    <a href="http://localhost/btphp/vd/deluser.php">Delete </a>
    <a href="http://localhost/btphp/vd/inputuser.php">Nhập tiếp</a>
</body>

</html>