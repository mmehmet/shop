<?php
$barcode = $_POST["bcode"];
$item = $_POST["desc"];
$inv = file_get_contents('inventory');
$newline = $barcode.' '.$item;
$newinv = $inv.$newline."\n";
$fh = fopen('inventory','w') or die("can't open file");
fwrite($fh, $newinv);
fclose($fh);

print "New item - ".$item." - added to inventory with barcode: ".$barcode."<br />";
print "Would you like to also add this item to the shopping list? <p>";
print "<a href='listup.php?item=".$item."'>YES</a> <a href='index.php'>NO</a>";
?>

