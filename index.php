<h1>
Hello</h1>
<?php
$textInput = 'Words';
$obj = new main();
$num=array('2', '4', '6', '8');
$obj->printString($textInput);
$obj->stringLength($textInput);
$obj->arraylength ($num);

class main(){
  public function __construct() {
  
  echo 'Hello PHP!';
 }

public function printString($text) {
  
  echo'<h1>Print function example</h1>';
  echo 'Print: ';
  print($text);
  echo '<hr>';

}

public function arraylength($num) {
echo'<h1>Array print function</h1>';
echo 'Print: ';
print_r($num);
echo '<hr>';	
	
}

public function stringLength($text) {
	
 echo '<h1>String Length function example</h1>';
 echo 'Print; ';
 $length = strlen($text);
 echo 'The length of this string is: ' . $length;
 echo '<hr>';

}

public function __destruct() {


}

}



?>

