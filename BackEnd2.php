<!DOCTYPE html>
<html>
<body>
 
<?php
//class/object
class PointBlank {
 
//access modifier
  public $harga;
  public $cash;
 
//constuktor
  public function __construct($harga, $cash) {
    $this->harga = $harga;
    $this->cash = $cash; 
  }
 
//destruktor
  function __destruct() {
echo "Yuk Daftar Bimble Online , {$this->harga}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function intro() {
    echo " Bimble Online {$this->harga} mulai dari 150K "; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//inheritance
class Jenis extends PointBlank {
  public function message() {
    echo "Perbesar Peluang Lulus SBMPTN dengan Bimble Online"; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//static method
class greeting {
  public static function welcome() {
    echo "Payment Method = transfer bank/Cash";
    echo "<br>";
    echo "<hr>";
  }
}
 
//static properties
class harga {
  public static $value = 150000;
}
 
$Jenis = new Jenis("Bimble", "Online");
$Jenis->message();
$Jenis->intro();
 
greeting::welcome();
 
echo harga::$value;
 
//iretables
function getIterable():iterable {
  return [" adalah", " harga", "promo"," Apabbila"." Mendaftar Hari Ini!!! "];
}
 
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
//interface
interface pay {
  public function Harga();
}
 
class Bronze implements pay {
  public function Harga() {
    echo "<hr>";
    echo " Paket Bronze 150k";
  }
}
 
class Silver implements pay {
  public function Harga() {
    echo ",  Paket Silver 200k ";
  }
}
 
class Gold implements pay {
  public function Harga() {
    echo ",  Paket Gold 300k ";
    echo "<br>";
    echo "<hr>";
  }
}
 
$Bronze = new Bronze();
$Silver = new Silver();
$Gold= new Gold();
$PayMethod = array($Bronze, $Silver, $Gold);
 
foreach($PayMethod as $PayMethod) {
  $PayMethod->Harga();
}
?>
 
</body>
</html>