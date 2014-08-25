<?php

for ($i=1; $i < 18; $i++) { 
	# code...
$msg = "";

  if ($i % 3 === 0) {
  	echo "Fizz";
  }

  if ($i % 5 === 0) {
  	echo "Buzz";
  }

  $msg =  $msg + " " + $i;

 echo $msg;
	echo "\n";


}

?>