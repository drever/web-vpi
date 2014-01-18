<?php
// load in mysql server configuration (connection string, user/pw, etc)
include 'mysqlConfig.php';
// connect to the database
@mysql_select_db($dsn) or die( "Unable to select database");
 
// reads the map db
 
$query="SELECT a, k, humanness FROM answers";
mysql_query($query);
 
$result = mysql_query($query,$link) or die('Errant query: '.$query);
 
// outputs the db as lines of text.
header('Content-type: text/plain; charset=us-ascii');
$i=0;
$line="";
 
if(mysql_num_rows($result)) {
 while($value = mysql_fetch_assoc($result)) {
 
$line=$line.$value["height"];
 $i=$i+1;
 if ($i==52) {
 $i=0;
 echo $line."\n";
 $line="";}
 else {$line=$line.",";}
 }
}
mysql_close();
?>
