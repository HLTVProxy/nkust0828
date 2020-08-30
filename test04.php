<h2>匯率轉換王</h2>
<?php
    //結合(關聯式)陣列用法
    //以下建立一個關聯式陣列的一般陣列
    $rate_list = array (
		"USD" => array("name" => "美金",	"id" => "USD", "rate" => 28.95),
		"HKD" => array("name" => "港幣",	"id" => "HKD", "rate" => 3.631),
		"GBP" => array("name" => "英鎊",	"id" => "GBP", "rate" => 37.76),
		"AUD" => array("name" => "澳幣",	"id" => "AUD", "rate" => 21.07),
		"CAD" => array("name" => "加拿大幣",	"id" => "CAD", "rate" => 21.94),
		"SGD" => array("name" => "新加坡幣",	"id" => "SGD", "rate" => 20.97)
	);
?>

<form action="test04.php" method="POST">
    <label for="money">新台幣：</label>
    <input type="text" id="money" name="money" value="50000">元<br>
    <label>要兌換的貨幣：</label>
    <select name="dollar" autofocus>
    <br>
<?php

    //使用傳統迴圈死出陣列中所有內容，跟索引數目有關使用
    // for ($i = 0 ; $i < count($rate_list); $i++){
    //     echo $rate_list[$i]["name"] . " " .
    //         $rate_list[$i]["id"] . " " .
    //         $rate_list[$i]["rate"] . "<br>";
    // }

    //使用foreach取出陣列，每一個都要拿就用
    // foreach($rate_list as $r){
    //     echo"<option value=" . $r["id"] . ">" .
    //     $r["name"] . "</option>\n";
    // }

    // 使用傳統的for迴圈取出陣列中所有內容，做成<select>下拉式選單
    for ($i = 0 ; $i < count($rate_list); $i++){
        echo"<option value=" . $i . ">" .
        $rate_list[$i]["name"] . "</option>\n";
    }
?>
    </select>
    <br>
    <input type="submit" value="開始轉換">
    
</form>

<?php
    // 取得來自於表單的資料(金額幣別id)
    $money = $_POST["money"];
    $dollar = $_POST["dollar"];
    
    /* 偵錯用
    // 顯示轉換金額(台幣)
    echo $money . "<br>";
    // 顯示出該幣別對應的匯率(從陣列取出)
    echo $rate_list[$dollar]["rate"] . "<br>";
    */

    // 計算轉換後的該幣別之金額
    $result = $money / $rate_list[$dollar]["rate"];
    // 顯示轉換的結果
    echo "台幣" . $money . "元，轉換成" . 
    $rate_list[$dollar]["name"] . "是" .
    round($result, 2) . "元";
?>