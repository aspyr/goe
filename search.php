<?php
require_once('db_connect.php');
$query = stripslashes($_GET['q']);
$title = $query;
if ($title == "") {
	$title = "<no query>";
}
require('header.php');

if ($query != "")
{
$query = strtolower($query);
$query = explode(' ', $query);
foreach ($query as $id => $r) {
	if (strlen($r) < 3)
	unset ($query[$id]);
}

#anchor for keyword snippet count
$count = '0';

if (isset($_GET['type']))
$type = stripslashes($_GET['type']);
else
$type = 'content';
$q = "SELECT * FROM `$type`;";

$msquery = mysqli_query($dbc, $q);
$sqli = mysqli_fetch_array($msquery);
echo "<ul>";
	
while ($row = mysqli_fetch_array($msquery))
{	
	/* make array_keys() case insensitive */
	
	$stripped = strip_tags($row['content']);
	$explodelc = strtolower($stripped); 
	$explodelc = explode(' ', $explodelc);
	$explode = explode(' ', $stripped);
	
	foreach ($query as $r) {
	$keys = array_keys($explodelc, $r);
		$keys = array_splice($keys, 0, 3);
	
		foreach ($keys as $key) {
			$explode[$key] = "<span class='highlight'>$explode[$key]</span>";
			$start = $key-9;
			$end = $key+9;
			if ($start < 0) {
				$start = 0;
			}
			elseif ($end > count($explode)) {
				$end = count($explode);
			}
			$range[] = range($start, $end);
			foreach ($range as $value) {
				foreach ($value as $key) {
					$content .= "$explode[$key] ";
					$filled[] = "1";
				}
				$content .= "<span style='color: black;'>... </span>";
			}
			unset($range);
		}
	}
	if (isset($content)) {
	echo "<li class='border'>";
	echo "<h1><a href='u.php?url={$row['url']}' id='{$row['id']}'>{$row['title']}</a></h1>";
	echo "<div id='shown{$row['id']}'>$content</div>";
	echo "<div id='hidden{$row['id']}' style='display: none;'>{$row['content']}</div>";
	echo "<a href='#{$row['id']}' id='togglelink{$row['id']}' onclick='toggle(\"hidden{$row['id']}\", \"shown{$row['id']}\", \"togglelink{$row['id']}\");'>Expand</a>";
	echo "</li>";
	}
	unset($content);
}
if (!is_array($filled))
	$note = "<h2>Nothing returned</h2><p /><p>Either no matches were found, or your search was too ambiguous; possibly both.<br />Try rephrasing your search.</p>";
echo $note;





}
else
echo "<p>How on earth are we supposed to read your mind?<br />If you want us to find something, try putting putting it in the search box!</p>";

echo "</ul>";

require('footer.php');

?>
