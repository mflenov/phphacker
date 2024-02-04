<html>
    <head>
        <title> Arrays </title>
    </head>

    <body>
        <h1>Array</h1>
        <?php 
            $num = 10;
            $str = "10";
            if ($num == $str) {
                print("Число 10 равно строке '10'<br/>");
            }

            $num = 0;
            $str = "Hello";
            if ($num == $str) {
                print("Число 0 равно строке 'Hallo'<br/>");
            }

            $num = 0;
            $str = "Hello";
            if ($num === 'Hello') {
                print("Число 0 четко равно строке 'Hallo' и это неверно<br/>");
            }

            if ($num === 0) {
                print("Число 0 равно строке переменной со значением 0<br/>");
            }
?>
    </body>
<html>
