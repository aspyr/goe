<?php $sel = $_GET['url'];
function selected($selected, $sel) {
	if ($selected == $sel){
		echo "class='selected'";
	}
}
function plusone() {
	echo "<div id='plusone'><g:plusone></g:plusone></div>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : EarthlingTwo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090918
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="gatesofeden.org, Gates of Eden, messianic, yeshua, yhwh, yahweh, messiah" />
<meta name="description" content="Gates of Eden is a messianic ministry located in Peoria, IL." />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="facebox/facebox.js" type="text/javascript"></script>
       
<!--<script type="text/javascript"> setVarsForm("pageID=profileEdit&userID=11"); </script>
-->
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
  $('a[rel*=facebox]').facebox() 
})
  </script>

<script type="text/javascript">
function linkscript(id, id2)
{
	document.getElementById(id2).innerHTML=" ";
	document.getElementById(id).style.display="block";
	document.getElementById(id).focus();
    document.getElementById(id).select();
}

function videoswitch(input, newid, newtitle, newvid)//, newvid, newtitle)
{	
	document.getElementById("ytembed").src=input;
	document.getElementById("link").value=newid;
	//var title = document.getElementById("vidtitle")
	document.getElementById("vidtitle").innerHTML = newtitle;	document.getElementsByClassName("seriesviditem selthumb")[0].className = "seriesviditem vidthumb";
 //   document.getElementById("vidtitle").id=newvid;
	document.getElementById(newvid).className="seriesviditem selthumb";

}

function toggle(id, id2, ts) {
	var one = document.getElementById(id);
	var two = document.getElementById(id2);
	var link = document.getElementById(ts);
	if (link.innerHTML != "Collapse") {
	link.innerHTML = 'Collapse';
	}
	else {
		link.innerHTML = "Expand";
	}
	one.style.display="block";
	two.style.display='none';
	one.id=id2;
	two.id=id;
}
</script>

<?php if (isset($title)) {
	echo "<title>";
	echo "$title | Search | Gates of Eden";
	echo "</title>";
}
?>
<script type="text/javascript" src="js/audio-player.js"></script>  
        <script type="text/javascript">  
            AudioPlayer.setup("http://gatesofeden.org/player.swf", { 
width:"290",
animation:"yes",
encode:"yes",
initialvolume:"60",
remaining:"yes",
noinfo:"no",
buffer:"5",
checkpolicy:"no",
rtl:"no",
bg:"e6e6e6",
text:"333333",
leftbg:"CCCCCC",
lefticon:"333333",
volslider:"666666",
voltrack:"FFFFFF",
rightbg:"B4B4B4",
rightbghover:"999999",
righticon:"333333",
righticonhover:"FFFFFF",
track:"FFFFFF",
loader:"009900",
border:"CCCCCC",
tracker:"DDDDDD",
skip:"666666",
pagebg:"FFFFFF",
transparentpagebg:"yes"});  
        </script>  
<script type="text/javascript">
function clearSearch(input) {
document.getElementById('search-text').value = input;
}

function fillSearch(input) {
document.getElementById('search-text').value = input;
}
</script>
<meta name="google-site-verification" content="LenSdrUz7RcTLTcPvlH6_X7bVjxnLrhvDe2bOZ01Fss" />
</head>
<body>
<div id="wrapper">

	<div id="header">
	
		<div id="logo">
			<h1><a href="home">Gates of Eden</a></h1>
			<p>Messianic Ministry</p>
		</div>
		<div id="search"><form action="search.php" method="get"><fieldset><input id="search-text" onfocus="javascript:clearSearch('<?php if(isset($query)){ echo $query;} else echo '';?>')" onblur="javascript:fillSearch('<?php if(isset($query)) echo $query; else echo "Search…"?>')" type="text" name="q" value="<?php if(isset($query)){ echo $query; } else echo 'Search...';?>"></input><input  type="submit" value="Search" id="search-submit"/></fieldset></form></div>
	</div>
	<!-- end #header -->
	
	<div id="menu">
		<ul>
			<li><a href="index.php" <?php selected('/index.php', $_SERVER['PHP_SELF']); ?>>Home</a></li>
			<li><a href="u.php?url=mag" <?php selected('mag', $sel); ?>>Magazine</a></li>
			<li><a href="u.php?url=faq" <?php selected('faq', $sel); ?>>FAQ's</a></li>
			<li><a href="u.php?url=meetings" <?php selected('meetings', $sel); ?>>Meetings<?php echo " $meetings_new";?></a></li>
            <li><a href="u.php?url=donate" <?php selected('donate', $sel); ?>>Donate</a></li>
            <li><a href="videos.php" <?php selected('/videos.php', $_SERVER['PHP_SELF']);?>>Videos</a></li>
			<li><a href="u.php?url=radio-tv" <?php selected('radio-tv', $sel); ?>>Radio & TV</a></li>
		</ul>
	</div>
	

	<!-- end #menu -->
	<div id="page">
	
		<div id="content">
	