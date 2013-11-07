<?php

require('db_connect.php');
$id2 = $_GET['url'];
$i = $_GET['i'];
$id = addslashes($id2);

$q = "SELECT * FROM content WHERE url='$id'";


$echo = mysqli_query($dbc, $q);


$row = mysqli_fetch_array($echo);
if (isset($row))
{
if (!isset($i)) {
require('header.php');
plusone();
}
echo "<title>{$row['title']} | Gates of Eden</title>";
echo "<h1>{$row['title']}</h1>";
echo $row['content'];
if (!isset($i))
include ('footer.php');
}
else
{
require ('header.php');
echo "<h1>404 -- Sorry, we can't find what you're looking for…</h1><title>404 | Gates of Eden</title>";
include ('footer.php');
}
?>