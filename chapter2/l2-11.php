<html>
<body>
  <h1>Print Max parameters</h1>
  <?php 
    function sum(int $number1, int $number2)
    {
      return $number1 + $number1;
    }

    function print_max(int $number1, int $number2)
    {
     print ("$number1 > $number2 = ");

     if ($number1>$number2)
      print ("true <br>");
     else 
      print ("false <br>");
    }

    print_max(10, 435);
    print_max(3240, 2335);
    #print_max('sdf23', 45);
    #print_max(45);
  ?>

  <h1>Named parameters</h1>
  <?php
  function upload(string $imageparam, string $filename, int $quality = 80, bool $converttobng = True) {
    // сделать проверки данных в imageparam
    // конвертировать png в jpeg
    if ($converttobng) {
      #imagejpeg($image, $filename, 80);
      print("Quality: " . $quality . " converttobng" . $converttobng);
    }
  }
//  upload('image', 'filename.jpg', True);
  upload('image', 'filename.jpg', converttobng: False);
  ?>
  <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
</body>
</html>
