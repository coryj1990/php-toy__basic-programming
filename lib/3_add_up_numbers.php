<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
	array_sum($arr);
}

echo "\nTesting that (1,2,3,4) should return 10.\n";
if (uppercasesAllLetters(array(1,2,3,4)) == 10) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that () should return null.\n";
if (uppercasesAllLetters(array()) == null) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that (-1, 0, 1, 2) should return 2.\n";
if (uppercasesAllLetters(array(-1,0,1,2)) == 2) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"
?>
