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
$odd = 16;
$name = 'President Abraham Lincoln';
$names = array('first' => 'Abraham', 'last' => 'Lincoln');

$obj->printString($textInput);
$obj->stringLength($textInput);
$obj->arraylength($num);
$obj->printCount($books);
$obj->stringNowdoc ($dog);
$obj->arrayAddValue ($num);
$obj->stringMultiLine ($comment);
$obj->arrayAddAllValues ($sum);
$obj->stringSqRoot ($odd);
$obj->arraySetaValue ($num);
$obj->stringSpace ($name);
$obj->arraySpecKey ($names);
$obj->stringSubstring ($name);
$obj->arrayFill ($nom);
 
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

public function stringNowdoc ($dog){
	echo '<h1>String Nowdoc function</h1>';
	echo 'Print: ';
	echo 'This array allows you to use a multi-line string: ' . $dog;
	echo '<hr>';
	
}

public function arrayAddValue ($num) {
	echo '<h1>Array Add Value function</h1>';
	echo 'Print: ';
	echo 'This array adds a value at the end: ' . $num [] = '10';
	echo '<hr>';
}

public function stringMultiLine ($comment) {
	echo '<h1>String MultiLine function</h1>';
	echo 'Print: ';
	echo 'This string uses the escape sequence: ' . $comment;
	echo '<hr>';
}
	
public function arrayAddAllValues ($sum)   {
	echo '<h1>Array Add All Values function</h1>';
	echo 'Print: ';
	echo 'This array adds all values to: ' . $sum;
	echo '<hr>';
	
}

public function stringSqRoot ($odd) {
	echo '<h1>String Square Root function</h1>';
	echo 'Print: ';
	echo 'This string performs the square root of 16: ' . $root = sqrt($odd);
	echo '<hr>';
	
}

public function arraySetaValue ($num) {
	echo '<h1>Array Set a Value at Specific Index function</h1>';
	echo 'Print: ';
	echo 'This array will replace the first index of the array: ' . $num[0] = '1';
	echo '<hr>';
	
}

public function stringSpace ($name) {
	echo '<h1>String Searches for Space function</h1>';
	echo 'Print: ';
	echo 'This string searches for space: ' . $i = strpos($name,' ');
	echo '<hr>';

}

public function arraySpecKey ($names) {
	echo '<h1>Array Specified key function</h1>';
	echo 'Print: ';
	echo 'This array will get a value at a specified key: ' . $first_name = $names['first'];
	echo '<hr>';
	
}

public function stringSubstring ($name) {
	echo '<h1>String Searches for a Substring function</h1>';
	echo 'Print: ';
	echo 'This string searches for a Substring: ' . $i = strpos($name,'Abraham');
	echo '<hr>';

}

public function arrayFill ($nom) {
	echo '<h1>Array Range Values function</h1>';
	echo 'Print: ';
	echo 'This array has a range of values: ' . $nom = range(2, 2);
	echo '<hr>';

}
	
public function __destruct() {

}

}

?>

