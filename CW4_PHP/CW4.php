
<!DOCTYPE html>
<html>

<head>
<title>First PHP page</title>
<link rel="stylesheet" href="CW4.css">
</head>


<body>

<h1>PHP Exercises</h1>
<div class="hello">
<h1>Ex 1</h1>
<?php
function hello_world() {
    echo "Hello World!";
}

hello_world();
?>
</div>
<br>

<div class="leftTriangle">
<h1>Ex 2</h1>
<?php
$c = "*";
for ($i=0; $i <=4; $i++){
    for ($j=0; $j <= $i; $j++){
        echo $c."";
        $c++;
    }
    echo "<br>";
}
?>

</div>
<br>

<div class="leftTriangle">
<h1>Ex 3</h1>
<?php
function triangle(int $a) {
    
for ($i=0; $i <=$a; $i++){
    for ($j=0; $j <= $i; $j++){
        echo "* ";
    }
    echo "<br>";
}
}

$a = 5;
triangle($a);
?>

</div>
<br>

<div class="hello">
<h1>Ex 4</h1>
<?php 

$OUT = 0; 
$IN = 1; 

function countWords($string) 
{ 
	global $OUT, $IN; 
	$status = $OUT; 
	$wordCount = 0; // word count 
	$i = 0; 

	while ($i < strlen($string)) 
	{ 
		if ($string[$i] == " " || 
			$string[$i] == "\n" || 
			$string[$i] == "\t") 
			$status = $OUT; 

		else if ($status == $OUT) 
		{ 
			$status = $IN; 
			++$wordCount; 
		} 
		++$i; 
	} 

	return $wordCount; 
} 

$str = "No One cares	 about\n you\tFelix "; 
echo "No of words : " . countWords($str); 

?> 
</div>
<br>

<div class="hello">
<h1>Ex 5</h1>
<?php

echo textToCount("Hey man, hey man, what going on with you");

function textToCount ($str){
	echo "The String is ($str)<br>";

	$countedWords = print_r(array_count_values(str_word_count($str, 1)));
	return $countedWords;
}
?>
</div>
<br>

<div class="hello">
<h1>Ex 6</h1>
<?php
echo remove_all("Summer is here!", 'e');
function remove_all ($string, $char){

	return implode(explode($char, $string));
}

?>
</div>


</body>
</html>