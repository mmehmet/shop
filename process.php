<?php
$barcode = $_POST["scanned"];
$inv = file_get_contents('inventory');
$filearray = explode("\n", $inv);

$found = strpos($inv, $barcode);
if ( $found === false) {
	header("Location: addit.php?code=".$barcode);
	exit;
}

while (list($var, $val) = each($filearray)) {
	++$var;
	$val = trim($val);
	$gotit = strpos($val, $barcode);
	if ( $gotit === false) {
		$gonnahappen = "not";
	}else{
		$item = substr($val,strpos($val, ' ')+1);
		$oldlist = file_get_contents('thelist');
		$onit = strpos($oldlist, $item);
		if ( $onit === false) {
			$newlist = $oldlist.$item."\n";
		}else{
			$one = substr($oldlist,0,$onit);
			$two = $onit + strlen($item) +1;
			$three = substr($oldlist, $two);
			$newlist = $one.$three;
		}
		$fh = fopen('thelist','w') or die("can't open file");
		fwrite($fh, $newlist);
		fclose($fh);
	}
}
header("Location: index.php");
?>

