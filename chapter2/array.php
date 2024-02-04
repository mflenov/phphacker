<html>
    <head>
        <title> Arrays </title>
    </head>

    <body>
        <h1>Array</h1>
        <?php 
            $goods[]= "торт";
            $goods[]= "хлеб";
            $goods[]= "морковь";

            foreach ($goods as $key => $value ) {
                print('<p>' . $value . '</p>');
            }
        ?>
    </body>
<html>
