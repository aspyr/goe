<?php 

$i = "yes";
require ('header.php');
?>
<title>Home | Gates of Eden</title>
<?php
plusone();
?>
<h1>Welcome to Gates of Eden!</h1>
<div class="post">
<h2 class="title">Announcements</h2>
<div class="entry">
<p>
<?php require('ann.php') ?></div>
</div>
<?php
require('footer.php');
?>