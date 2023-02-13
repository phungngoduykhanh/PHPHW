<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post" name="frmLogin">
            1: <input type="text" name="one" value=""><br>
            phép toán: <input type="text" name="pt" value=""><br>
            2: <input type="text" name="two" value=""><br>
            <input type="submit" name="btn" value="tính tổng">
        </form>
    </body>

    <?php
       
    if(isset($_POST["btn"])){

        $one=$_POST["one"];
        $pt=$_POST["pt"];
        $two=$_POST["two"];

        if($pt=="+"){
            echo $one + $two;
        }
        elseif($pt=="-"){
        echo $one - $two;
        }
        elseif($pt=="*"){
        echo $one * $two;
        }
        elseif($pt=="/"){
        echo $one / $two;
    }
}
    
?>
</html>

