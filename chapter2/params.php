<html>
    <head>
        <title> Параметры </title>
    </head>

    <body>
        <h1>Parameters</h1>
        <?php 
            print($avar1);
            $avar[] = 10;
            foreach ($avar as $key => $value ) {
                print('<p>' . $value . '</p>');
            }
        ?>
    </body>
<html>
