<?php
$newitem = $_GET['item'];
$oldlist = file_get_contents('thelist');
$newlist = $oldlist.$newitem."\n";
$fh = fopen('thelist','w') or die("can't open file");
fwrite($fh, $newlist);
fclose($fh);

header("Location: index.php");
?>

