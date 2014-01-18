<html>
<head>
	<meta charset="utf-8"/>
	<title>Report</title>
	<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
	<link href="css/vpi.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['Answer']))
{
  $conn = mysql_connect("mysql5-48.90", "morphome-vpi", "r00tpassw0rd");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$A=$_GET['a'];
$k=$_GET['k'];
$mu=$_GET['mu'];

$cooperativeness=$_POST['cooperativeness'];
$humanness=$_POST['humanness'];
$sql = "INSERT INTO answers VALUES('',now(),'$A','$k','$mu','$cooperativeness','$humanness')";


mysql_select_db('morphome-vpi');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
	<div style="height:380px;width:280px;">
	<h1> Report </h1>
<form id="radio-form" onsubmit="return validate();" method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="400">How cooperative was the partner?</td>
</tr>
<tr>
<td>	
	<input type="radio" name="cooperativeness" value="-1" style="margin-left: 50px">Very competitive
	<br><input type="radio" name="cooperativeness" value="-0.5" style="margin-left: 50px">Competitive
	<br><input type="radio" name="cooperativeness" value="0" style="margin-left: 50px">Neutral
	<br><input type="radio" name="cooperativeness" value="0.5" style="margin-left: 50px">Cooperative
	<br><input type="radio" name="cooperativeness" value="1" style="margin-left: 50px">Very Cooperative
</td>
</tr>
<td>
<tr></tr>
</td>
<tr>
<td width="400">How realistic was the interaction?<br></td>
</tr>
<tr>
<td>
	<input type="radio" name="humanness" value="-1" style="margin-left: 50px">Robot like
	<br><input type="radio" name="humanness" value="-0.5" style="margin-left: 50px">Slightly robot like
	<br><input type="radio" name="humanness" value="0" style="margin-left: 50px">I don't know...
	<br><input type="radio" name="humanness" value="0.5" style="margin-left: 50px">Slightly human like
	<br><input type="radio" name="humanness" value="1" style="margin-left: 50px">Human like
</td>
</tr>
<tr>
<td width="300">
<input name="Answer" type="submit" id="Answer" value="Answer" style="margin-left: 200px">
</td>
</tr>
</table>
</form>
<?php
}
?>
</div>

<script>
function validate() {
    // check cooperativeness input
    var r = document.getElementsByName("cooperativeness");
    var c = -1;

    for(var i=0; i < r.length; i++){
        if(r[i].checked) {
            c = i; 
        }
    }

    if (c == -1) {
        alert("Please select cooperativeness and humaness.");
        return false;
    }

    // check humanness input
    var r = document.getElementsByName("cooperativeness");
    var c = -1;

    for(var i=0; i < r.length; i++){
        if(r[i].checked) {
            c = i; 
        }
    }

    if (c == -1) {
        alert("Please select cooperativeness and humaness.");
        return false;
    }
    return true;
}

</script>

</body>
</html>
