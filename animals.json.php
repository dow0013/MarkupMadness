<?php
 
include("feed.php");

foreach ($rows as $row){
	
	if ($row[0] === $_GET["team"]){
	
		global $teamrow;
		 $teamrow = $row;
		 //$teamrow[0] = $teamname;
		 print "";
	
	}
	
}

if ($teamrow[4] === "1"){
	$mobile = "yes";
}
if ($teamrow[4] === "2"){
	$mobile = "optional";
}
if ($teamrow[4] === "3"){
	$mobile = "none";
}



?>

<div class="headline">
	<img class="logo" src="<?php echo $teamrow[6] ?>" />
	<div class="score">
	<span>Site Score</span>
	<h2><?php echo $teamrow[7] ?></h2>
	</div>
</div>
<div class="info">
<li>Http Requests: <span><?php echo $teamrow[2] ?></span></li>
<li>Pieces of Flash: <span><?php echo $teamrow[3] ?></span></li>
<li>Mobile Site: <span><?php echo $mobile ?></span></li>
<li>Load Time: <span><?php echo $teamrow[5] ?>s</span></li>
</div>
<span class="link"><a href="<?php echo $teamrow[1] ?>" target="_blank"><?php echo $teamrow[1] ?></a></span>