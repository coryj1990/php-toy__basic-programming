<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  foreach ($arr as $i) {
  	if $arr[$i] > 10 {
  		unset($arr[$i]);
  	}
  }
}

echo "\nTesting that (1,2,3,4) should return (1,2,3,4).\n";
if (uppercasesAllLetters(array(1,2,3,4)) == (1,2,3,4)) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that (10,20,30,40) should return (10).\n";
if (uppercasesAllLetters(array(10,20,30,40)) == (10)) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that (100,20,30,40) should return null.\n";
if (uppercasesAllLetters(array(100,20,30,40)) == null) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"
?>