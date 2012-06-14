<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Shopping Inventory Tool</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div class="navDiv">
<table class="t">
	<tr><td class="act"><a href="index.php">SCAN ITEMS</a></td></tr>
</table>
</div>
<p>Here is the inventory as it currently stands...</p>
<?php
   $filestring = file_get_contents('inventory');
   $filestring = trim($filestring);
   $filearray = explode("\n", $filestring);

   while (list($var, $val) = each($filearray)) {
	++$var;
	$val = trim($val);
	$item = substr($val,strpos($val, ' ')+1);
	$code = substr($val,0,strpos($val, ' '));
	print "Item $var: <a href='invit.php?it=".$item."'>$item</a> ($code) <br />";
    }
?>
<p>Click on an item to scan an additional barcode for it</p>
</body>
</html>
