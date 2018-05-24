<?php
         date_default_timezone_set('Asia/Tokyo');
         $now_hour =  (int)date("H");
    
        function greeting($now_hour) {
        $result = "";

        if (6 <= $now_hour && $now_hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $now_hour && $now_hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }
        print $result;
        }
        
     greeting($now_hour);
        
        
        function display_hello($num) {
            for($i=0; $i<$num; $i++){
            $result = ($i + 1). "回目のこんにちは!". PHP_EOL;
            }
            print $result = ($i + 1). "回目のこんにちは!". PHP_EOL;
            }
            
        display_hello(7);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        
        <p>今は<?php print $now_hour; ?>時です。</p>
        
    </body>
</html>