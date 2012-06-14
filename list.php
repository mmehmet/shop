<?php
echo "<b>Current shopping list:</b><br />";
$content = file('thelist');
$inv = file_get_contents('inventory');
$numLines = count($content);

// loop through all the lines
for ($i = 0; $i < $numLines; $i++) {
	$line = trim($content[$i]);
	$c=substr($inv,0,strpos($inv,$line));
	$code = substr(strrchr($c, 10), 1 );
	print "-- <a href='#' onclick='fillit($code)'>$line</a> <br />";
}
?>
