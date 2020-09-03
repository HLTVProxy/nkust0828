<?php
    //累加函式
    
    function accu($i){
        $sum = 0;
        for ($t = 0 ; $t<= $i ; $t++){
            // echo $t . ",";
            $sum += $t;
        }
        //echo "1+2+...+$n = " . $sum . "<br>";
        return $sum;
    }
    
    //累乘函式
    function fact($i){
        $fact = 1;
        for ($t = 1 ; $t<= $i ; $t++){
            $fact *= $t;
        }
        // echo "1*2*...*$t = " . $fact . "<br>";
        return $fact;
    }
    
    /*
    輸出累加和累乘的結果是否正確
    $n = 10;
    for ($i = 1; $i <=20 ; $i++){
        echo accu($i) . "<br>";
        echo fact($i) . "<br>";
    }
    */
    
    //製作表單欄位
    function genRow($r1, $r2, $r3){
        echo "<tr bgcolor=ff9999>\n<th>$r1</th>\n<th>$r2</th>\n<th>$r3</th>\n";
    }
    function genData($color, $r1, $r2, $r3){
        echo "<tr bgcolor=$color>\n<th>$r1</th>\n<th>$r2</th>\n<th>$r3</th>\n";
    }
    //做顏色變化
    function twoFold($i){
        if($i % 2 == 0)
            return "#80d4ff";
        else
            return "#ff80ff";
    }


    //製作迴圈表格
    function form($n){
        echo "<table border=1 width = 10%>\n";
        //echo "<tr bgcolor=ff9999>\n<th>數字</th>\n<th>累加</th>\n<th>累乘</th>\n";
        genRow("數字", "累加", "累乘"); 
        for($i = 1; $i <= $n; $i++) {
            genData(twoFold($i), $i, accu($i), fact($i));//Function的retrun值可以當作Function的參數值
        }
        // "<td>" . $i . 
        // "</td><td>" . accu($i) . 
        // "</td><td>" . fact($i) . 
        // "</td></tr>\n";
        echo "</table>";
    }	

    //主程式開始
    $n = 10; //設定數字
    echo form($n); //呼叫表格函式

    // accu($n);
    // fact($n);

?>