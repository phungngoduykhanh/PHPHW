<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Pass</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['add'])) {
                $user = array('khanh' => '123', 'a' => 'a', 'b' => 'b', 'sam' => '132', 'c' => 'c', 'abc' => '');
                $_SESSION['users'] = $user;
                foreach ($_SESSION['users'] as $usn => $usp) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $usn . "</th>";
                    echo "<td>" . $usp . "</td>";
                    echo "</tr>";
                }
            }

            if (isset($_POST['delete'])) {
                foreach ($_SESSION['users'] as $usn => $usp) {
                    if ($usn == 'sam') {
                        unset($_SESSION['users'][$usn]);
                    }
                }
                foreach ($_SESSION['users'] as $usn => $usp) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $usn . "</th>";
                    echo "<td>" . $usp . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <form action="" method="post">
        <input type="submit" name="add" value="add">
        <input type="submit" name="delete" value="delete">
    </form>
</body>
</html>