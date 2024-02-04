<?
class Transmission {
  private $steps = 5;
  private $speed = 0;

  function __construct($steps) {
    $this->steps = $steps;
  }

  public function setSpeed($speed) {
     $this->speed = $speed;
  }
    
  public function getSpeed() {
     return $this->speed;
  }
}
?>

<html>
    <head>
        <title> Vision </title>
    </head>
    <body>
        <h1>Classes sample</h1>
<?
$transmission = new Transmission(5);
$transmission->setSpeed(23);
print($transmission->getSpeed());
?>
        <p style="text-align:center; border-top:1px solid #ccc; margin:10px; padding:10px">Hackish PHP<br>&copy; <a href="http://www.flenov.info">Mikhail Flenov</a> 2019</p>
    </body>
<html>
