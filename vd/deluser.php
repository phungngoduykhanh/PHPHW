<?php session_start() ?>
<html>
<?php
if (isset($_SESSION['usser'])) {
    $n = count($_SESSION['usser']);
    for ($i = 0; $i <= $n - 1; $i++) {
        $n2 = 0;
        if ($_SESSION['usser'][$i][$n2] == "xam") {
            $_SESSION['usser'][$i][$n2] = $_SESSION['usser'][$i + 1][$n2];
            $_SESSION['usser'][$i][$n2 = $n2 + 1] = $_SESSION['usser'][$i + 1][$n2 = $n2 + 1];
           unset($_SESSION['usser'][$n - 1]);
        }
    }
    
    header("Location: http://localhost/btphp/vd/showuser.php");
}

?>

</html>