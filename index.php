<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

$textInput = 'Words';
$obj = new main();
$num = array('2', '4', '6', '8');
$books = array('title', 'content', 'author');
$obj->printString($textInput);
$obj->stringLength($textInput);
$obj->arraylength($num);
$obj->printCount($books);

class main {
  public function __construct() {
  
  echo 'Hello PHP!';
 }

public function printString($textInput) {
  
  echo '<h1>Print function example</h1>';
  echo 'Print: ';
  print($textInput);
  echo '<hr>';

}

public function arrayLength($num) {
echo '<h1>Array print function</h1>';
echo 'Print: ';
print_r($num);
echo '<hr>';	
	
}

public function stringLength($textInput) {
	
 echo '<h1>String Length function example</h1>';
 echo 'Print: ';
 $length = strlen($textInput);
 echo 'The length of this string is: ' . $length;
 echo '<hr>';

}

public function count($books) {
	echo '<h1>Array Count function<h/1>';
	echo 'Print: ';
	echo count($books);
    echo '<hr>'; 
	
}

public function __destruct() {

}

}

?>

