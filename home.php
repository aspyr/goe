<?php
$i = $_GET['i'];
if ($i != "yes") {
require('header.php');
}

?>
<title>Home | Gates of Eden</title>
<g:plusone></g:plusone>
<h1>Welcome to Gates of Eden!</h1>
<div class="post">
<h2 class="title">Announcements</h2>
<div class="entry">
<p>
<?php include('ann.php');?></div>
</div>

<!-- end #content -->
<?php
if ($i != "yes")
include('footer.php');

?>