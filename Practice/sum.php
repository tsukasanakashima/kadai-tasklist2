<?php
    function sum() {
        $result = 0;
        for ($i = 9; $i <= 50; $i++){
            $result = $result + $i;
        }
        if ($result>900) {
            print $result .'は９００より大きい' . PHP_EOL;
        }
        else {
            print $result .'は９００以下' . PHP_EOL;
        }
    }
    
sum();

?>
