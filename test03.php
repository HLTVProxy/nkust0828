<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>第四台新聞</h2>
    <hr>
    <!-- 二維陣列用法 -->
    <?php
        $tv0 = array("公共電視", "網路直播 PTS Live 公共電視", "ED4QXd5xAco");
        $tv1 = array("TVBS新聞", "TVBS新聞 55 頻道 24 小時直播", "A4FbB8UhNRs");
        $tv2 = array("三立新聞", "三立LIVE新聞HD直播", "4ZVUmEUFwaY");
        $tv3 = array("東森新聞", "EBC 東森新聞 51 頻道 24 小時線上直播", "RaIJ767Bj_M");
        $tv4 = array("民視新聞", "民視新聞直播", "XxJKnDLYZz4");
        $tv5 = array("中天新聞", "CTI中天新聞24小時HD新聞直播", "wUPPkSANpyo");
        $data = array($tv0, $tv1, $tv2, $tv3, $tv4, $tv5);

        // 顯示$tv[1]裡面的值
        // foreach($data as $tv){
        //     echo $tv[1] . "<br>";
        // }

        //以下是標準的二維陣列宣告方式
        // $data = (array("公共電視","網路直播 PTS Live 公共電視","ED4QXd5xAco"),
        //     array("TVBS新聞", "TVBS新聞 55 頻道 24 小時直播", "A4FbB8UhNRs"),
        //     array("三立新聞", "三立LIVE新聞HD直播", "4ZVUmEUFwaY"),
        //     array("東森新聞", "EBC 東森新聞 51 頻道 24 小時線上直播", "RaIJ767Bj_M"),
        //     array("民視新聞", "民視新聞直播", "XxJKnDLYZz4"),
        //     array("中天新聞", "CTI中天新聞24小時HD新聞直播", "wUPPkSANpyo")
        //);結束二維陣列定義的地方，這裡才要用分號結束

  

        $tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^\' frameborder=\'0\' allow=\'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\' allowfullscreen></iframe>";

        //下面要用來處理影片的播放器，用內嵌的方式，但是要置換影片id
        $v = $_GET["v"]; //從網址取得v
        $title = $_GET["title"]; //從網址取得影片標題
        //因為一開始打開沒有東西，所以要設定預設值
        if ($v == NULL) {
            $v = "ED4QXd5xAco";
            $title = "網路直播 PTS Live 公共電視";
        }
            

        echo "<h2>" . $title . "</h2>";
        echo str_replace("^^^^", $v, $tags);
        echo "<br><hr>";
        //設定選台器按鈕
        foreach($data as $tv){
            echo "<button>" .
                "<a href= 'test03.php?v=" . //把影片ID置換成想看的台
                $tv[2] .
                "&title=" . $tv[1] .
                "'>" .
                $tv[0] . 
                "</a></button>";
            }
        
    ?>
    <hr>
    <h1>這是各種亂象的新聞台</h1>
    <hr>

</body>
</html>