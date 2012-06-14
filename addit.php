<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Shopping Inventory Tool</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body onLoad="document.forms[0].desc.focus();">
<div class="navDiv">
<table class="t">
	<tr><td class="act"><a href="maint.php">MAINTAIN DATABASE</a></td></tr>
</table>
</div>
<p>You have scanned an item that is not recognised.<br />
Please enter a simple description for the item and we can add it to the inventory...</p>
<form enctype="multipart/form-data" action="update.php" method="post">
	<div><label>ITEM:</label> <input type="text" name="desc" />
	<input type="hidden" id="bla" name="bcode" value="<?php $bc=$_GET['code'];echo($bc);?>" />
	<input type="submit" value="ADD" /></div>
</form>
<a href="index.php">BACK</a>
</body>
</html>
