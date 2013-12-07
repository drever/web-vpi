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


mysql_select_db('vpi-eeg');
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
<td width="100">How cooperative was the parner? (-5=competitive;0=neutral;5=cooperative)</td>
<td><input name="cooperativeness" type="number" value="0" min="-5" max="5" id="cooperativeness"></td>
</tr>
<tr>
<td width="100">How realistic was the interaction? (0=robot-like;10=human-like)</td>
<td><input name="humanness" type="number" value="0" min="0" max="10" id="humanness" ></td>
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