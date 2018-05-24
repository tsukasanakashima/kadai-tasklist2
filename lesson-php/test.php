<?php
   print 'Hellow';
?>
<?php
    print
      'Hellow'
        ;
?>

<?php
    // Commenting this code out turns it off!
    // print 'Hello';

    // You can do this to multiple lines at once, too!

    /*
    print 'Hello';
    print 'Hello';
    print 'Hello';
    */

    print 'Only this will run';
?>
<?php
    $hensuu = "some data";
    print $hensuu;
?>
<?php
    $ichiniti_no_zikan = 24;
    $ichizikan_no_hun = 60;
    $ippun_no_byou = 60;

    $ichiniti_no_byousuu = $ichiniti_no_zikan * $ichizikan_no_hun * $ippun_no_byou;

    print $ichiniti_no_byousuu;
?>
<?php
    $ichiniti_no_byousuu = 24 * 60 * 60;
    $hensuu = "some data";
?>
<?php
    $num1 = 1 + 2;       // 3
    $num2 = 1 - 2;       // -1
    $num3 = 2 * 5;       // 10
    $num4 = 6 / 3;       // 2
    $num5 = 5 % 2;       // 1 (the remainder of division)
?>
<?php
    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . $str2;      // $str will become "文字列1 + 文字列2"
    print $str;
?>
<?php
    $str1 = "文字列1";
    $str2 = " + 文字列2";
    $str = $str1 . PHP_EOL . $str2 . PHP_EOL;
    print $str;
?>
<?php
    $result = 1 < 2;
    var_dump($result);

    $result = 1 == 2;
    var_dump($result);
?>
<?php
    if (10>5) {
        print 'ここだけ表示される' . PHP_EOL;
    }
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>
<?php
    if (10 == 5) {
        print '10 == 5 は false なのでここは実行されない' . PHP_EOL;
    }
    else {
        print 'if側が実行されないので、ここだけ実行される' . PHP_EOL;
    }
?>
<?php
    if (10 == 5) {
        print '10 == 5 は false なのでここは実行されない' . PHP_EOL;
    }
    else {
        print 'if側が実行されないので、ここだけ実行される' . PHP_EOL;
    }
?>
<?php
    $number = mt_rand() % 10;

    if ($number < 3) {
        print $number . 'は3より小さい数' . PHP_EOL;
    }
    elseif ($number < 6) {
        print $number . 'は3以上で6より小さい数' . PHP_EOL;
    }
    elseif ($number < 8) {
        print $number . 'は6以上で8より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は8か9しか来ません' . PHP_EOL;
    }
?>
<?php
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>
<?php
    // 変数の初期化
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>
<?php
    // 変数の初期化
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>
<?php
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>
<?php
    $fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // 配列の中身の数を$countへ代入
    for ($i = 0; $i < $count; $i++) {
        print $i . '回目: ' . $fruits[$i] . PHP_EOL;
    }
?>
<?php
    // 関数を定義
    function sum() {
        $result = 0;
        for ($i = 1; $i <= 9; $i++) {
            $result = $result + $i;
        }
        print $result . PHP_EOL;
    }
    sum();
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p><?php print 'ここにPHPコードを埋め込む。'; ?></p>
    </body>
</html>
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now = date("Y/m/d H:i:s");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p><?php print $now; ?></p>
    </body>
</html>
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <?php if (6 <= $now_hour && $now_hour < 12) { ?>
            <p>おはよう、太郎さん</p>
        <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
            <p>こんにちは、太郎さん</p>
        <?php } else { ?>
            <p>こんばんは、太郎さん</p>
        <?php } ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <ul>
            <?php for($i = 1; $i < 10; $i++) { ?>
                <li><?php print '3 x ' . $i . ' = ' . (3 * $i);?></li>
            <?php } ?>
        </ul>
    </body>
</html>


<?php
    $num  = 2;
    var_dump($num);
?>
