<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Shopping Inventory Tool</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body onLoad="document.forms[0].bcode.focus();">
<div class="navDiv">
<table class="t">
	<tr><td class="act"><a href="index.php">SCAN ITEMS</a></td></tr>
</table>
</div>
<p>Please scan an additional barcode for this item...</p>
<form enctype="multipart/form-data" action="update.php" method="post">
	<div><label><?php $ni=$_GET['it'];echo($ni);?></label>
	<input type="text" name="bcode" />
	<input type="hidden" id="bla" name="desc" value="<?php $ni=$_GET['it'];echo($ni);?>" />
	<input type="submit" value="UPDATE" /></div>
</form>
<a href="maint.php">BACK</a>
</body>
</html>
