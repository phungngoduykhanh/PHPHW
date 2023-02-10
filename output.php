<?php
    $month = $_POST["month"];
    $year = $_POST["year"];
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "Tháng $month năm $year có 31 ngày";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            echo "Tháng $month năm $year có 30 ngày";
            break;
    case 2:
    switch($year){
        case ($year % 400 == 0 or $year % 4 == 0):
            echo "Tháng $month năm $year là năm nhuận nên có 29 ngày";
            break;
        case ($year % 400 != 0 or $year % 4 != 0): 
            echo "Tháng $month năm $year là năm không nhuận nên có 28 ngày";
            break;
    }
    }
?> 

<!-- Tìm ngày tiếp theo -->
    <?php
    $iday = $_POST["od"];
    $imonth = $_POST["om"];
    $iyear = $_POST["oy"];
    $tday = null;
    switch ($imonth) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $tday =  31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $tday = 30;
            break;
        case 2:
            switch($iyear){
                case ($iyear % 400 == 0 or $iyear % 4 == 0):
                    $tday = 29;
                    break;
                case ($iyear % 400 != 0 or $iyear % 4 != 0): 
                    $tday = 28;
                    break;
            }
    }
    if ($iday > 0 && $imonth > 0 && $iyear > 0 && $iday < $tday){
        $nday = $iday+1;
        echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$imonth/$iyear";
    }elseif($imonth != 12 && $iday == $tday){
        $nday = 1;
        $nmonth = $imonth + 1;
        echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$nmonth/$iyear";
    }elseif ($imonth == 12 && $iday == $tday ){
        $nday = 1;
        $nmonth = 1;
        $nyear = $iyear +1;
        echo "Ngày tiếp theo của ngày $iday tháng $imonth năm $iyear: $nday/$nmonth/$nyear";
    }elseif($iyear % 400 != 0 or $iyear % 4 != 0 && $iday == 29){
        echo "Tháng $imonth của năm $iyear không phải là năm nhuận nên không ngày thứ 29";
    }
    ?>

<!-- Hiển thị sinh viên học loại gì -->
    <?php
    $tensv = $_POST["tensv"];
    $diemtb = $_POST["dtb"];
    switch ($diemtb){
        case (9 < $diemtb and $diemtb <= 10):
            echo "$tensv là học sinh xuất sắc!";
            break;
        case (8 < $diemtb and $diemtb <= 9):
            echo "$tensv là học sinh giỏi!";
            break;
        case (7 < $diemtb and $diemtb <= 8):
            echo "$tensv là học sinh khá!";
            break;
        case (5 < $diemtb and $diemtb <= 7):
            echo "$tensv là học sinh trung bình!";
            break;
        case (0 < $diemtb and $diemtb <= 5):
            echo "$tensv là học sinh yếu kém!";
            break;
    }
    ?>
