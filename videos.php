<?php
require('header.php');
require('db_connect.php');


if (isset($_GET['id'])) {
	$reqid = stripslashes($_GET['id']);
	$query = ("SELECT * FROM videos WHERE published='1' AND id=$reqid");
	$db = mysqli_query($dbc, $query);
	if (mysqli_num_rows($db)!=0) {
	while ($row = mysqli_fetch_array($db)) {
		echo "<a class='nounderline' href='videos.php#v{$row['id']}'>« Back to videos</a>";
		echo "<h2 id='vidtitle'>{$row['title']}</h2><title>{$row['title']} | Videos | Gates of Eden</title>";
		echo "<br /><iframe id='ytembed' width='560' height='349' src='http://www.youtube.com/embed/{$row['ytid']}' frameborder='0' allowfullscreen></iframe>";
		echo "<div onclick=\"linkscript('link', 'show');\" id='show'>Click for direct link</div><div id='linkdiv'><input id='link' onclick=\"linkscript('link', 'show')\" type='text' value='http://gatesofeden.org/videos.php?id={$row['id']}'></input><span id=\"plusonevid\"><g:plusone></g:plusone></span></div>";
		if ($row['description'] != "") {
			echo "<div class='largeviddescription'>{$row['description']}</div>";
		}
		else
		echo "<div class='largeviddescription'><i>no description available</i></div>";
			$query2 = ("SELECT * FROM videos WHERE published='1' AND seriesid={$row['seriesid']}");
		$db2 = mysqli_query($dbc, $query2);
		if ($db2 != 0)
		{
		echo "Other videos in this series: <div id='vidlist'><ul id='relatedvidslist'>";
		while ($row2 = mysqli_fetch_array($db2)) {
			if ($row2['id'] == $row['id']) {
				$selected = "selthumb";
			}
			else {
				$selected = "vidthumb";
			}
			echo "<a title=\"{$row2['title']}\" href='videos.php?id={$row2['id']}' onclick=\"videoswitch(&quot;http://www.youtube.com/embed/{$row2['ytid']}&quot;,&quot;http://gatesofeden.org/videos.php?id={$row2['id']}&quot;,&quot;{$row2['title']}&quot;,&quot;vid{$row2['id']}&quot;); return false;\"><li class=\"seriesviditem $selected\" id=\"vid{$row2['id']}\"><img src='http://img.youtube.com/vi/{$row2['ytid']}/default.jpg'/><div class='caption'>{$row2['title']}</div></li></a>";
}

echo "</ul></div>";

}
}
}
else
echo "<h2>Video not found...</h2><title>404 | Videos | Gates of Eden</title>";
}

else
{
$query = ("SELECT * FROM videos WHERE published='1' ORDER BY id DESC");
$db = mysqli_query($dbc, $query);
echo "<ul class='videolist'>";
while ($row = mysqli_fetch_array($db)) 
	{
		echo "<title>Videos | Gates of Eden</title><li  id=vid{$row['id']} class='videoitem'>";
		echo "<div class='vidoptions'><ul class=\"floatright\"><a title='Watch on YouTube' class='floatright' target='_blank' href='http://www.youtube.com/watch?v={$row['ytid']}'><img class='ytlogo' src='images/ytlogo.png' /></a></ul></div>";
		echo "<div class='thumb'><a href='videos.php?id={$row['id']}'><img class='thumb_img' src='http://img.youtube.com/vi/{$row['ytid']}/default.jpg'/></div>";
		echo "<span class='listtitle'>{$row['title']}</span></a>";
		if ($row['description'] != "") {
			echo "<div class='listviddescription'>{$row['description']}</div>";
		}
		else
		echo "<div class='listviddescription'><i>no description available</i></div>";
	}
	echo "</ul>";
}



require('footer.php');

?>