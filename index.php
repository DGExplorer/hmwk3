<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

$textInput = 'Words';
$obj = new main();
$num = array('2', '4', '6', '8');
$sum = array_sum($num);
$books = array('title', 'content', 'author');
$dog = <<<WALKERS
'There are not enough treats for canines!'
WALKERS;
$comment = "This is a\nmulti-line string.";


$obj->printString($textInput);
$obj->stringLength($textInput);
$obj->arraylength($num);
$obj->printCount($books);
$obj->stringHeredoc ($dog);
$obj->arrayAddValue ($num);
$obj->stringMultiLine ($comment);
$obj->arrayAddAllValues ($sum)
 
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

public function printCount($books) {
	echo '<h1>Array Count function</h1>';
	echo 'Print: ';
	$count = count($books);
	echo 'The count of the array is: ' . $count;
    echo '<hr>'; 
	
}

public function stringHeredoc ($dog){
	echo '<h1>String Heredoc function</h1>';
	echo 'Print: ';
	echo 'This array uses heredoc: ' . $dog;
	echo '<hr>';
	
}

public function arrayAddValue ($num) {
	echo '<h1>Array Add Value function</h1>';
	echo 'Print: ';
	echo 'This array uses brackets: ' . $num [] = '10';
	echo '<hr>';
}

public function stringMultiLine ($comment) {
	echo '<h1>String MultiLine function</h1>';
	echo 'Print: ';
	echo 'This string uses the escape sequence: ' . $comment;
	echo '<hr>';
}
	
public function arrayAddAllValues ($sum)   {
	echo '<h1>Array  function</h1>';
	echo 'Print: ';
	echo 'This array adds all values: ' . $sum;
	echo '<hr>';
}

	
public function __destruct() {

}

}

?>

