<?php
require('db_connect.php');

$date = mktime();

$id2 = $_GET['url'];

$id = addslashes($id2);

$q = "SELECT * FROM announcements WHERE published='1' ORDER BY id";

$echo = mysqli_query($dbc, $q);

$test = mysqli_num_rows($echo);

if ($test != 0) {
echo "<ul>";
while($row = mysqli_fetch_array($echo))
{
echo "<li class='li'>{$row['content']}</li>";
}
echo "</ul>";
}
else
{
echo "<h4>No announcements available at this time.</h4>";
}
?>