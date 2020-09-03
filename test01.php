<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--用按鈕的「href」屬性，設定三個不同人的身高體重-->
    <button type="button"><a href="index.php">回首頁</a></button>
    <button type="button"><a href="test01.php?height=1.7&weight=60">張三的BMI</a></button>
    <button type="button"><a href="test01.php?height=1.65&weight=80">李四的BMI</a></button>
    <button type="button"><a href="test01.php?height=1.87&weight=60">龍五的BMI</a></button><br>

<?php
    //Function
    function computeBMI($weight, $height){ //放入要使用的參數到函式中
        
        echo "身高：", $height, "公尺<br>";
        echo "體重：". $weight. "公斤<br>";
        $bmi = $weight / $height ** 2;
        echo "BMI：" . $bmi . "<br>";

        if ($bmi < 18.5){
            echo "體重過輕";
        } else if($bmi > 24){
            echo "體重過重";
        } else{
            echo "體重正常";
        }

        return 0; //計算後的回傳值，視需求決定
    }

    // 透過網址列取得PHP檔案的輸入
    // 語法問題→$_GET[]，一定要用中括號
    
    //主程式開始
    $height = $_GET["height"]; //抓取網址中"height"的值
    $weight = $_GET["weight"]; //抓取網址中"weight"的值

    //判斷進來的身高體重是不是空值
    if ($_GET["height"] != null && $_GET["weight"] != null ){
        // != null 忘記加了
        computeBMI($weight, $height); //有值的時候執行computeBMI()
    } else{
        //沒值的時候，跳出提視窗，請使用者在網址輸入身高體重的值
        echo "<script>alert('請在網址中輸入你的身高和體重!');</script>";
        echo "請輸入：127.0.0.1/mysite/nkust-0827/test07.php?height=你的身高&weight=你的體重";
    }
?>
</body>
</html>

