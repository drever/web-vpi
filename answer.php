<html>
<head>
<title>Report</title>
</head>
<body>
<?php
if(isset($_POST['Answer']))
{
	$conn = mysql_connect("localhost", "root", "root_password");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$A=$_GET['a'];
$k=$_GET['k'];
$mu=$_GET['mu'];

$cooperativeness=$_POST['cooperativeness'];
$humanness=$_POST['humanness'];
$sql = "INSERT INTO answers VALUES(now(),'$A','$k','$mu','$cooperativeness','$humanness')";


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
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">How cooperative was the parner?</td>
<td><input name="cooperativeness" type="number" id="emp_name"></td>
</tr>
<tr>
<td width="100">How realistic was the interaction?</td>
<td><input name="humanness" type="number" id="emp_address"></td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="Answer" type="submit" id="Answer" value="Answer">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>