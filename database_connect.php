<?php



$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='3667817_pizza';

$connect=@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
if(!$connect)
{
	die('Could not connect :(');
}

?>