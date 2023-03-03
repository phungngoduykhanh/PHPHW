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
            <td>STT</td>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Mô tả sản phẩm</td>
            <td>Hình ảnh sản phẩm</td>
            <td>Hành động</td>
            <td>Hành động</td>
        </tr>
        <?php
        if (isset($_SESSION['fruit'])) {
            print_r($_SESSION['fruit']);
            $n = count($_SESSION['fruit']);
            foreach ($_SESSION['fruit'] as $item => $value) {
        ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td><?php echo $value['tensp']; ?></td>
            <td><?php echo $value['giatien']; ?></td>
            <td><?php echo $value['mota']; ?></td>
            <td> <img src="<?php echo $value['hinhanh']; ?>" alt="" height="100" width="100"></td>
            <td><a name="btnedit" href="http://localhost/btphp/vd/edit.php?id=<?php echo $item ?>">Edit </a></td>
            <td><a href="http://localhost/btphp/vd/del.php?id=<?php echo $item ?>">Delete </a></td>
        </tr>
        <?php }
        }

        ?>
    </table>
    <a href="http://localhost/btphp/vd/input.php">Nhập tiếp</a>
</body>

</html>