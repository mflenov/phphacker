<html>
    <head>
        <meta charset="utf-8">
        <title> Test page </title>
    </head>
<body>
    <?php

    class TestClass {
        public $name;
    }

    $test = new TestClass();
    $test->name = "Михаил";
    $serialized = serialize($test);
    echo "Сериализованная версия:";
    print($serialized);

    echo "<hr/>";

    $hash = md5($serialized . 'sOkm2*723kJHn2');
    print($hash);

    echo "<hr/>";

    $d = unserialize($serialized);
    print($d->name);
    ?>
</body>
</html>
