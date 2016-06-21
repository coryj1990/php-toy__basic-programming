<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  strtoupper($str);
}

echo "\nTesting that doc should return DOC.\n";
if (uppercasesAllLetters(doc) == DOC) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that ribbit should return RIBBIT.\n";
if (uppercasesAllLetters(ribbit) == RIBBIT) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

echo "\nTesting that MEOW should return MEOW.\n";
if (uppercasesAllLetters(MEOW) == MEOW) {
	echo "Yippie!";
}
else{
	echo "WHYYYyyyy...";
}
echo "\n------------------------------------***------------------\n"

?>
