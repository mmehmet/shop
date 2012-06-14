<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-AU" lang="en-AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Shopping List Tool</title>
	<link href="favicon.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" type="text/css" href="main.css" />
	<script type="text/javascript" src="webtoolkit.aim.js"></script>
	<script type="text/javascript">
		function startCallback() {
			// make something useful before submit (onStart)
			return true;
		}
 
		function completeCallback(response) {
			// make something useful after (onComplete)
			document.getElementById('r').innerHTML = response;
			listit();
		}
function fillit(x) {
document.forms[0].scanned.value=x;
}
function listit()
{
var oRequest;
$dd = "list.php";
try {
        oRequest=new XMLHttpRequest();
     } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
          document.getElementById("nr").innerHTML = oRequest.responseText;
      }
    }
  oRequest.open("GET",$dd,true);
  oRequest.send(null);
  }
</script>
</head>
<body onLoad="listit(); document.forms[0].scanned.focus();">
<div class="navDiv">
<table class="t">
	<tr><td class="act"><a href="maint.php">MAINTAIN DATABASE</a></td></tr>
</table>
</div>
<form enctype="multipart/form-data" action="process.php" method="post" onsubmit="return AIM.submit(this, {'onStart' : startCallback, 'onComplete' : completeCallback});">
	<div><label>SCAN:</label> <input type="text" name="scanned" onchange="this.form.submit();" />
	<input type="submit" value="UPDATE" /></div>
</form>
 
<hr/>
 
<div><span id="r"></span></div>
<div id="nr"></div>
</body>
</html>
