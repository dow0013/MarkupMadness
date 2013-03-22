<?php
include("feed.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Markup Madness</title>
		<meta name="description" content="An epic tournament bracket based upon the athletic websites that represent the teams in the 2013 NCAA March Madness tournament" />
		<link rel="stylesheet" href="style.css" title="" type="text/css" media="screen" charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Quantico:400,700' rel='stylesheet' type='text/css'>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.qtip-1.0.0-rc3.min.js"></script>
	
		
	</head>
	<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=254788744559812";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="topbar">
			<div class="social-box">
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="A tournament based on this year's #MarchMadness team websites" data-via="Tyler_Dow" data-related="MattSchlobohm" data-hashtags="markupmadness">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class="fb-like" data-href="http://MarkupMadness.com" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>

			</div>
			<p>A project by <a href="http://twitter.com/MattSchlobohm">@MattSchlobohm</a> and <a href="http://twitter.com/tyler_dow">@Tyler_Dow</a></p>
		</div>
		<header>
		</div>
			<img src="markup-madness.png" alt="Markup Madness Logo" />
			<div class="info-box">
				<h3>A tournament for the websites behind the madness</h3>
				<p>You are seeing the results of a hard fought battle between the websites that represent the teams at the 2013 NCAA Basketball Tournament. These websites were tested on performance, responsiveness, use of flash &amp; load time.</p>
				<p>Click on any team below to see the details.</p>
			</div>
		</header>

<div class="color-codes">
<span class="code-green">&nbsp;  mimics NCAA tournament outcome</span>
<span class="code-red">&nbsp;  different from NCAA tournament outcome</span>
</div>

<div class="container">
	<div class="container-half">

<!------------------------------------------------------------>		
<!--------------------- MIDWEST ------------------------------>	
<!------------------------------------------------------------>		
	<div class="column">
	<h3>Round 2</h3>
	<div class="region">
		<h2>Midwest</h2>
		<div class="matchup1">
			<div id="content">
				<a rel="louisville.html" class="team louisville">Louisville <span><?php echo $teamrow[7] ?></span></a>
				<a  rel="blank.html" class="team blank">N. Carolina AT</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="coloradost.html" class="team coloradost">Colorado St.</a>
				<a  rel="missouri.html" class="team missouri">Missouri</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="oklahomast.html" class="team oklahomast">Oklahoma St.</a>
				<a  rel="oregon.html" class="team oregon">Oregon</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="saintlouis.html" class="team saintlouis">Saint Louis</a>
				<a  rel="newmexst.html" class="team newmexst">New Mex. St.</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="memphis.html" class="team memphis">Memphis</a>
				<a  rel="blank.html" class="team blank">St. Mary</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="michiganst.html" class="team michiganst">Michigan St.</a>
				<a  rel="valparaiso.html" class="team valparaiso">Valparaiso</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="creighton.html" class="team creighton">Creighton</a>
				<a  rel="cincinnati.html" class="team cincinnati">Cincinnati</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="duke.html" class="team duke">Duke</a>
				<a  rel="albany.html" class="team albany">Albany</a>
			</div>
		</div>
	</div><!-- end region -->


<!------------------------------------------------------------>		
<!----------------------- WEST ------------------------------->	
<!------------------------------------------------------------>		
	<div class="region">
		<h2>West</h2>
		<div class="matchup1">
			<div id="content">
				<a  rel="gonzaga.html" class="team gonzaga">Gonzaga</a>
				<a  rel="southernu.html" class="team southernu">Southernu</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="pittsburgh.html" class="team pittsburgh">Pittsburgh.</a>
				<a  rel="wichitast.html" class="team wichitast">Wichita St.</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="wisconsin.html" class="team wisconsin">Wisconsin</a>
				<a  rel="olemiss.html" class="team olemiss">Ole Miss</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="kansasst.html" class="team kansasst">Kansas St.</a>
				<a  rel="blank.html" class="team blank">La Salle</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="arizona.html" class="team arizona">Arizona</a>
				<a  rel="belmont.html" class="team belmont">Belmont</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="newmexico.html" class="team newmexico">New Mexico</a>
				<a  rel="harvard.html" class="team harvard">Harvard</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="notredame.html" class="team notredame">Notre Dame</a>
				<a  rel="iowast.html" class="team iowast">Iowa St</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="ohiost.html" class="team ohiost">Ohio St</a>
				<a  rel="iona.html" class="team iona">Iona</a>
			</div>
		</div>
	</div><!-- end region -->
	</div><!-- end column -->

<div class="column">
<h3>Round 3</h3>
<div class="region2">
	<div class="matchup2">
		<div id="content">
			<a  rel="louisville.html" class="team louisville correct">Louisville</a>
			<a  rel="missouri.html" class="team missouri incorrect">Missouri</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="oregon.html" class="team oregon correct">Oregon</a>
			<a  rel="newmexst.html" class="team newmexst incorrect">New Mex. St.</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="blank.html" class="team incorrect">St. Mary</a>
			<a  rel="valparaiso.html" class="team valparaiso incorrect">Valparaiso</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="creighton.html" class="team creighton">Creighton</a>
			<a  rel="duke.html" class="team duke">Duke</a>
		</div>
	</div>
	
</div>
<div class="region2">
	<div class="matchup2" style="margin-top:35px;">
		<div id="content">
			<a  rel="gonzaga.html" class="team gonzaga correct">Gonzaga</a>
			<a  rel="wichitast.html" class="team wichitast correct">Wichita St.</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="wisconsin.html" class="team wisconsin">Wisconsin</a>
			<a  rel="blank.html" class="team blank">La Salle</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="belmont.html" class="team belmont incorrect">Belmont</a>
			<a  rel="harvard.html" class="team harvard correct">Harvard</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="notredame.html" class="team notredame">Notre Dame</a>
			<a  rel="iona.html" class="team iona">Iona</a>
		</div>
	</div>
	
</div>




</div><!-- end column -->

<div class="column">
<h3>Region Semi</h3>
<div class="region3">
	<div class="matchup3">
		<div id="content">
			<a  rel="louisville.html" class="team louisville">Louisville</a>
			<a  rel="oregon.html" class="team oregon">Oregon</a>
		</div>
	</div>
	<div class="matchup3">
		<div id="content">
			<a  rel="valparaiso.html" class="team valparaiso">Valparaiso</a>
			<a  rel="duke.html" class="team duke">Duke</a>
		</div>
	</div>
</div>
<div class="region3" style="margin-top:175px;">
	<div class="matchup3">
		<div id="content">
			<a  rel="gonzaga.html" class="team gonzaga">Gonzaga</a>
			<a  rel="blank.html" class="team blank">La Salle</a>
		</div>
	</div>
	<div class="matchup3">
		<div id="content">
			<a  rel="belmont.html" class="team belmont">Belmont</a>
			<a  rel="iona.html" class="team iona">Iona</a>
		</div>
	</div>
</div>

</div><!-- end column -->

<div class="column">
<h3>Region Final</h3>
<div class="region4">
	<div class="matchup4">
		<div id="content">
			<a  rel="oregon.html" class="team oregon">Oregon</a>
			<a  rel="valparaiso.html" class="team valparaiso">Valparaiso</a>
		</div>
	</div>
</div>
<div class="region4" style="margin-top:100px">
	<div class="matchup4">
		<div id="content">
			<a  rel="gonzaga.html" class="team gonzaga" style="margin-top:320px;">Gonzaga</a>
			<a  rel="iona.html" class="team iona">Iona</a>
		</div>
	</div>
</div>
</div><!-- end column -->

<div class="column">
<h3>Nat. Semis</h3>
<div class="region5">
	<div class="matchup5">
		<div id="content">
			<a  rel="oregon.html" class="team oregon">Oregon</a>
			<a  rel="gonzaga.html" class="team2 gonzaga">Gonzaga</a>
			<a  rel="gonzaga.html" class="team gonzaga">Gonzaga</a>
		</div>
	</div>
</div>

</div><!-- end column -->

</div><!-- ends container half -->


<div class="container-half right">

<div class="column">
<h3>Nat. Semis</h3>
<div class="region5">
	<div class="matchup5">
		<div id="content">
			<a  rel="florida.html" class="team florida">Florida</a>
			<a  rel="butler.html" class="team2 butler">Butler</a>
			<a  rel="butler.html" class="team butler">Butler</a>
		</div>
	</div>
</div>
</div><!-- end column -->

<div class="column">
<h3>Region Final</h3>
<div class="region4">
	<div class="matchup4">
		<div id="content">
			<a  rel="vcu.html" class="team vcu">VCU</a>
			<a  rel="florida.html" class="team florida">Florida</a>
		</div>
	</div>
</div>
<div class="region4">
	<div class="matchup4">
		<div id="content">
			<a  rel="temple.html" class="team temple" style="margin-top:320px;">Temple</a>
			<a  rel="butler.html" class="team butler">Butler</a>
		</div>
	</div>
</div>
</div><!-- end column -->

<div class="column">
<h3>Region Semi</h3>
<div class="region3">
	<div class="matchup3">
		<div id="content">
			<a  rel="ncarolina.html" class="team ncarolina">N. Carolina</a>
			<a  rel="vcu.html" class="team vcu">VCU</a>
		</div>
	</div>
	<div class="matchup3">
		<div id="content">
			<a  rel="florida.html" class="team florida">Florida</a>
			<a  rel="fgcu.html" class="team fgcu">FGCU</a>
		</div>
	</div>
</div>
<div class="region3" style="margin-top:175px;">
	<div class="matchup3">
		<div id="content">
			<a  rel="temple.html" class="team temple">Temple</a>
			<a  rel="syracuse.html" class="team syracuse">Syracuse</a>
		</div>
	</div>
	<div class="matchup3">
		<div id="content">
			<a  rel="butler.html" class="team butler">Butler</a>
			<a  rel="colorado.html" class="team colorado">Colorado</a>
		</div>
	</div>
</div>

</div><!-- end column -->

<div class="column">
<h3>Round 3</h3>
<div class="region2">
	<div class="matchup2">
		<div id="content">
			<a  rel="kansas.html" class="team kansas">Kansas</a>
			<a  rel="ncarolina.html" class="team ncarolina">N. Carolina</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="vcu.html" class="team vcu correct">VCU</a>
			<a  rel="sdstate.html" class="team sdstate incorrect">S. Dak. St.</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="ucla.html" class="team ucla">UCLA</a>
			<a  rel="florida.html" class="team florida">Florida</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="oklahoma.html" class="team oklahoma">Oklahoma</a>
			<a  rel="fgcu.html" class="team fgcu">FGCU</a>
		</div>
	</div>
	
</div>
<div class="region2">
	<div class="matchup2" style="margin-top:35px;">
		<div id="content">
			<a  rel="indiana.html" class="team indiana">Indiana</a>
			<a  rel="temple.html" class="team temple">Temple</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="california.html" class="team california correct">California</a>
			<a  rel="syracuse.html" class="team syracuse correct">Syracuse</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="butler.html" class="team butler correct">Butler</a>
			<a  rel="davidson.html" class="team davidson incorrect">Davidson</a>
		</div>
	</div>
	<div class="matchup2">
		<div id="content">
			<a  rel="colorado.html" class="team colorado">Colorado</a>
			<a  rel="pacific.html" class="team pacific">Pacific</a>
		</div>
	</div>
	
</div>

</div><!-- end column -->


<!------------------------------------------------------------>		
<!--------------------- MIDWEST ------------------------------>	
<!------------------------------------------------------------>		
	<div class="column">
	<h3>Round 2</h3>
	<div class="region right">
		<h2>South</h2>
		<div class="matchup1">
			<div id="content">
				<a  rel="kansas.html" class="team kansas">Kansas</a>
				<a  rel="westernky.html" class="team westernky">Western Ky.</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="ncarolina.html" class="team ncarolina">N. Carolina</a>
				<a  rel="villanova.html" class="team villanova">Villanova</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="vcu.html" class="team vcu">VCU</a>
				<a  rel="akron.html" class="team akron">Akron</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="michigan.html" class="team michigan">Michigan</a>
				<a  rel="sdstate.html" class="team sdstate">S. Dak. St.</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="ucla.html" class="team ucla">UCLA</a>
				<a  rel="minnesota.html" class="team minnesota">Minnesota</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="florida.html" class="team florida">Florida</a>
				<a  rel="nwesternst.html" class="team nwesternst">Nwestern St.</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="sandiegost.html" class="team sandiegost">San Diego St.</a>
				<a  rel="oklahoma.html" class="team oklahoma">Oklahoma</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="georgetown.html" class="team georgetown">Georgetown</a>
				<a  rel="fgcu.html" class="team fgcu">FGCU</a>
			</div>
		</div>
	</div><!-- end region -->


<!------------------------------------------------------------>		
<!----------------------- WEST ------------------------------->	
<!------------------------------------------------------------>		
	<div class="region">
		<h2>East</h2>
		<div class="matchup1">
			<div id="content">
				<a  rel="indiana.html" class="team indiana">Indiana</a>
				<a  rel="blank.html" class="team blank">JMU</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="ncstate.html" class="team ncstate">N.C. State</a>
				<a  rel="temple.html" class="team temple">Temple</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="unlv.html" class="team unlv">UNLV</a>
				<a  rel="california.html" class="team california">California</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="syracuse.html" class="team syracuse">Syracuse</a>
				<a  rel="montana.html" class="team montana">Montana</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="butler.html" class="team butler">Butler</a>
				<a  rel="bucknell.html" class="team bucknell">Bucknell</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="marquette.html" class="team marquette">Marquette</a>
				<a  rel="davidson.html" class="team davidson">Davidson</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="illinois.html" class="team illinois">Illinois</a>
				<a  rel="colorado.html" class="team colorado">Colorado</a>
			</div>
		</div>
		
		<div class="matchup1">
			<div id="content">
				<a  rel="miamifl.html" class="team miamifl">Miami (FL)</a>
				<a  rel="pacific.html" class="team pacific">Pacific</a>
			</div>
		</div>
	</div><!-- end region -->
	</div><!-- end column -->

</div><!-- ends container half -->














</div><!-- ends container -->


<footer>
<h3>Shout Outs:</h3>
<p><a href="https://twitter.com/Tom_from_NY">Tom Callahan</a> for the "Markup Madness" name</p>
<p>Craig Thompson for building <a href="http://craigsworks.com/projects/qtip/">qTip</a></p>
<p><a href="http://sportslogos.net">SportsLogos.net</a> for the awesome school logos</p>

</footer>




<script type="text/javascript">
// Create the tooltips only on document load
$(document).ready(function() 
{
   
   
   // Use the each() method to gain access to each elements attributes
   $('#content a[rel]').each(function()
   {
      $(this).qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            url: "animals.json.php?team=" + $(this).text(), // Use the rel attribute of each element for the url to load
            title: {
               text: $(this).text(), // Give the tooltip a title using each elements text
               button: 'Close' // Show a close link in the title
            }
         },
         position: {
            corner: {
               target: 'bottomMiddle', // Position the tooltip above the link
               tooltip: 'topMiddle'
            },
            adjust: {
               screen: true // Keep the tooltip on-screen at all times
            }
         },
         show: { 
            when: 'click', 
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            tip: true, // Apply a speech bubble tip to the tooltip at the designated tooltip corner
            border: {
               width: 0,
               radius: 4
            },
            name: 'light', // Use the default light style
            width: 300 // Set the tooltip width
         }
      })
   });
});
</script>
		
	</body>
</html>
