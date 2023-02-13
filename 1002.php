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
    <form action="" method="post">
        nhập số tiền bạn muốn rút:<br>

        <input type="text" name="money"><br>

        n:<input type="text" name="n"><br>

        a:<input type="text" name="a"><br>

        b:<input type="text" name="b"><br>

        day:<input type="text" name="day"><br>

        month:<input type="text" name="month"><br>

        year:<input type="text" name="year"><br>

        <input type="submit" name="btn">

    </form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mệnh giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST["btn"])) {    
        // bai 2
        // $day = $_POST["day"];
        // $month = $_POST["month"];
        // $year = $_POST["year"];
        // switch ($month) {
        //     case 1:
        //     case 3:
        //     case 5:
        //     case 7:
        //     case 8:
        //     case 10:
        //     case 12:
        //         if($day>31 || $day<1){
        //             echo "ngày không hợp lệ";
        //         }
        //         else{
        //             echo "ngày hợp lệ";
        //         }
        //         break;
        //     case 4:
        //     case 6:
        //     case 9:
        //     case 11:
        //         if($day>30 || $day<1){
        //             echo "ngày không hợp lệ";
        //         }
        //         else{
        //             echo "ngày hợp lệ";
        //         }
        //         break;
        // case 2:
        //     if ($day>29 || $day<1) {
        //         echo "ngày không hợp lệ";
        //     }
        //     else{
        //         switch($year){
        //             case ($year % 400 == 0 or $year % 4 == 0):
        //                 echo "Ngày $day Tháng $month năm $year là năm nhuận ";
        //                 break;
        //             case ($year % 400 != 0 or $year % 4 != 0): 
        //                 echo "Ngày $ day Tháng $month năm $year là năm không nhuận";
        //                 break;
        //         }
        //     }
        // }

        // bai 3
        // $iday = $_POST["day"];
        // $imonth = $_POST["month"];
        // $iyear = $_POST["year"];
        // $tday = null;
        // switch ($imonth) {
        //     case 1:
        //     case 3:
        //     case 5:
        //     case 7:
        //     case 8:
        //     case 10:
        //     case 12:
        //         $tday =  31;
        //         break;
        //     case 4:
        //     case 6:
        //     case 9:
        //     case 11:
        //         $tday = 30;
        //         break;
        //     case 2:
        //         switch($iyear){
        //             case ($iyear % 400 == 0 or $iyear % 4 == 0):
        //                 $tday = 29;
        //                 break;
        //             case ($iyear % 400 != 0 or $iyear % 4 != 0): 
        //                 $tday = 28;
        //                 break;
        //         }
        // }
        // if ($iday > 0 && $imonth > 0 && $iyear > 0 && $iday < $tday){
        //     $nday = $iday+1;
        //     echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$imonth/$iyear";
        // }elseif($imonth != 12 && $iday == $tday){
        //     $nday = 1;
        //     $nmonth = $imonth + 1;
        //     echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$nmonth/$iyear";
        // }elseif ($imonth == 12 && $iday == $tday ){
        //     $nday = 1;
        //     $nmonth = 1;
        //     $nyear = $iyear +1;
        //     echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$nmonth/$nyear";
        // }elseif($iyear % 400 != 0 or $iyear % 4 != 0 && $iday == 29){
        //     echo "Tháng $imonth của năm $iyear không phải là năm nhuận nên không ngày thứ 29";
        // }

        // bai 4
        // $a=$_POST["a"];
        // $b=$_POST["b"];
        // for ($a;$a<=$b;$a++){
        //     if($a%3==0){
        //         echo $a."chia het cho 3";
        //     }
        // }

        // bai 5
        // $n=$_POST["n"];
        // $digit=0;
        // $sum=0;
        // while($n>0){
        //     $digit=$n%10;
        //     $sum+=$digit;
        //     $n=$n/10;
        // }

        // echo $sum;

        // bài 6
        $money=$_POST["money"];
        $sl50=floor($money/50);
        $tt50=$sl50*50;
        
        $sl20= floor(($money%50)/20) ;
        $tt20=$sl20*20;

        $sl5= floor(($money-($tt50+$tt20))/5) ;
        $tt5=$sl5*5;
        
        $sum= $tt50+$tt20+$tt5;

        echo "<tr>";
        echo "<th scope='row'>mệnh giá 50k</th>";
        echo "<td> $sl50 </td>";
        echo "<td> $tt50 </td>";
        echo "</tr>";
        echo "<th scope='row'>mệnh giá 20k</th>";
        echo "<td> $sl20 </td>";
        echo "<td> $tt20 </td>";
        echo "</tr>";
        echo "<th scope='row'>mệnh giá 5k</th>";
        echo "<td> $sl5 </td>";
        echo "<td> $tt5 </td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";

        echo " tổng tiền bạn rút là $sum ";
    }
    ?>
  

</body>
</html>