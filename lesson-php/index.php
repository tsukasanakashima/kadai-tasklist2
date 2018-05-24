
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour =  (int)date("H");

    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }

        return $result;
    }
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
            <lavel>年齢: <input type="text" name="target_age"></label>
            <input type="submit" value="送信">
        </form>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん(<?php print $_POST['target_age']; ?>歳)</p>
    </body>
</html>
<?php

class Slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;

    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime();

$slime_A->attack('主人公');

print_r($slime_A);
?>
<?php

class Slime {
    public $type = 'スライム';
    public $suffix = '';

    public $hp = 10;
    public $power = 3;

    function __construct($suffix) {
        $this->suffix = $suffix;
    }

    function name() {
        return $this->type . $this->suffix;
    }

    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

$slime_A = new Slime('A');

$slime_A->attack('主人公');
?>

