<!DOCTYPE html>
<html>
	<head>
		<title>Markup Madness</title>
		<meta name="description" content="An epic tournament bracket based upon the athletic websites that represent the teams in the 2013 NCAA March Madness tournament" />
		<link rel="stylesheet" href="style.css" title="" type="text/css" media="screen" charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Quantico:400,700' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.0/jquery.qtip.min.css"/>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/qtip2/2.1.0/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    </head>
	<body>
	<div id="fb-root"></div>
<script>
    (function(d, s, id) {
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
			<p>A project by <a href="http://schlobohm.net" target="_blank">Matt Schlobohm</a> and <a href="http://tylerdow.com" target="_blank">Tyler Dow</a></p>
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
	<div class="column">
        <h3>Round 2</h3>

	    <div id="round2-midwest-container" class="region">
            <h2>Midwest</h2>
	    </div>

	    <div id="round2-west-container" class="region">
		    <h2>West</h2>
	    </div>
    </div>

    <div class="column">
        <h3>Round 3</h3>

        <div id="round3-midwest-container" class="region2">
        </div>

        <div id="round3-west-container" class="region2">
        </div>
    </div>

    <div class="column">
        <h3>Region Semi</h3>

        <div id="regionalsemi-midwest-container" class="region3">
        </div>

        <div id="regionalsemi-west-container" class="region3" style="margin-top:175px;">
        </div>
    </div>

    <div class="column">
        <h3>Region Final</h3>

        <div id="regionalfinal-midwest-container" class="region4">
        </div>

        <div id="regionalfinal-west-container" class="region4" style="margin-top:100px">
        </div>
    </div>

    <div class="column">
        <h3>Nat. Semis</h3>
        <div id="natsemis-left-container" class="region5">
        </div>
    </div>
</div>


<div class="container-half right">
    <div class="column">
        <h3>Nat. Semis</h3>
        <div id="natsemis-right-container" class="region5">
        </div>
    </div>

    <div class="column">
        <h3>Region Final</h3>

        <div id="regionalfinal-south-container" class="region4">
        </div>

        <div id="regionalfinal-east-container" class="region4" style="margin-top:100px">
        </div>
    </div>


    <div class="column">
        <h3>Region Semi</h3>

        <div id="regionalsemi-south-container" class="region3">
        </div>

        <div id="regionalsemi-east-container" class="region3" style="margin-top:175px;">
        </div>
    </div>

    <div class="column">
        <h3>Round 3</h3>

        <div id="round3-south-container" class="region2">
        </div>

        <div id="round3-east-container"  class="region2">
        </div>

    </div>

    <div class="column">
        <h3>Round 2</h3>

        <div id="round2-south-container" class="region right">
            <h2>South</h2>
        </div>

        <div id="round2-east-container" class="region right">
            <h2>East</h2>
        </div>
    </div>

    </div>
</div>


<footer>
<p>Wanna look at the code for this site on <a href="https://github.com/MattSchlobohm/MarkupMadness" target="_blank">GitHub</a>?</p>
<h3>Shout Outs:</h3>
<p><a href="https://twitter.com/Tom_from_NY" target="_blank">Tom Callahan</a> for the "Markup Madness" name</p>
<p>Craig Thompson for building <a href="http://qtip2.com/" target="_blank">qTip2</a></p>
<p><a href="http://sportslogos.net" target="_blank">SportsLogos.net</a> for the awesome school logos</p>

</footer>


<div id="html-templates" style="display: none;">
    <div id="matchup-template">
        <div class="{{classes}}">
            <div class="content">
                <a id="{{college1.id}}-{{classes}}" class="team">{{college1.name}}</a>
                <a id="{{college2.id}}-{{classes}}" class="team">{{college2.name}}</a>
            </div>
        </div>
    </div>

    <div id="college-detail-template">
        <div class="headline">
            <img class="logo" src="{{thumb}}" />
            <div class="score">
                <span>Site Score</span>
                <h2>{{rank}}</h2>
            </div>
        </div>
        <div class="info">
            <li>Http Requests: <span>{{http_requests}}</span></li>
            <li>Pieces of Flash: <span>{{flash_pieces}}</span></li>
            <li>Mobile Site: <span>{{mobile_site}}</span></li>
            <li>Load Time: <span>{{load_time}}s</span></li>
        </div>
        <span class="link"><a href="{{website}}" target="_blank">{{website}}</a></span>
    </div>
</div>


<script type="text/javascript">

    var COLLEGES = <?php
        //TODO: EXTRACT THIS LOGIC INTO APPROPRIATE PHP IDIOM
        //TODO: LOOK FOR FILE LOCALLY, BUT IF IT ISN"T FOUND THERE, FETCH VIA THE GOOGLE DOC URL
        //$csvData = file_get_contents("http://docs.google.com/spreadsheet/ccc?key=0AgFmNAMpK3RhdHpaSW1nX3p3VWpyd25MUnRXdmtYYmc&output=csv");
        $csvData = file_get_contents("markupmadness-colleges.csv", JSON_PRETTY_PRINT);

        $rows = str_getcsv($csvData, "\n");

        $headerRow = array();
        $dataRows = array();

        foreach($rows as $row) {
            $row = str_getcsv($row, ",");
            $row[0] = trim($row[0]);
            if (!empty($row[0])) {
                if ($row[0] !== "id") {
                    array_push($dataRows, $row);
                } else {
                    $headerRow = $row;
                }
            }
        }

        $jsonMap = array("headers"=>$headerRow, "data"=>$dataRows);

        echo json_encode($jsonMap, JSON_UNESCAPED_SLASHES);
?>

$(document).ready(function() {
    //TODO: THIS IS A MONSTER; LOOK FOR WAYS OF BETTER ORGANIZATION / TIDYING / REVIEW / DRY-ing

    var REGION_ORDER = ['midwest', 'south', 'east', 'west'];

    // ROUND2 / INITIAL SETUP
    $.each(REGION_ORDER, function(index, value) {
        var $container = $('#round2-' + value + '-container');
        var dataStartIndex = 16 * index;
        for (var i = dataStartIndex; i < dataStartIndex + 16; i+=2) {
            var matchup = {
                classes: "matchup1"
            }

            for (var j = 0; j < 2; j++) {
                var college = {};
                for (var k = 0; k < COLLEGES.headers.length; k++) {
                    college[COLLEGES.headers[k]] = COLLEGES.data[i+j][k];
                }
                switch (parseInt(college.mobile_site)) {
                    case 1:
                        college.mobile_site = "Yes";
                        break;
                    case 2:
                        college.mobile_site = "Optional";
                        break;
                    case 3:
                        college.mobile_site = "No";
                        break;
                    default:
                        college.mobile_site = "N/A";
                        break;
                }
                matchup['college' + (j+1)] = college;
            }

            var elem = $(Mustache.render($('#matchup-template').html(), matchup)).appendTo($container);

            elem.find('a').each(function(j, v) {
                $(v).data(matchup['college' + (j+1)]);
            });
        }
    });

    // ROUND 3
    $.each(REGION_ORDER, function(i, v) {
        var $container = $('#round3-' + v + '-container');
        var $matchups = $('#round2-' + v + '-container').children('div');

        var winnerData = [];
        for (var j = 0; j < $matchups.length; j++) {
            var teams = $($matchups[j]).find('a');
            var winner = $(teams[0]).data();

            if (winner.rank < $(teams[1]).data().rank) {
                winner = $(teams[1]).data();
            }

            winnerData.push(winner);
        }

        var matchup = {
            classes: "matchup2"
        }
        for (var j = 0; j < winnerData.length; j+=2) {
            matchup.college1 = winnerData[j];
            matchup.college2 = winnerData[j+1];
            $container.append(Mustache.render($('#matchup-template').html(), matchup));
        }
    });

    // REGIONAL SEMIS
    $.each(REGION_ORDER, function(i, v) {
        var $container = $('#regionalsemi-' + v + '-container');
        var $matchups = $('#round3-' + v + '-container').children('div');

        var winnerData = [];
        for (var j = 0; j < $matchups.length; j++) {
            var teams = $($matchups[j]).find('a');
            var winner = $('#' + $(teams[0]).attr('id').split('-')[0] + '-matchup1').data();
            var loser = $('#' + $(teams[1]).attr('id').split('-')[0] + '-matchup1').data();

            if (winner.rank < loser.rank) {
                var tmp = winner;
                winner = loser;
                loser = tmp;
            }

            winnerData.push(winner);
        }

        var matchup = {
            classes: "matchup3"
        }
        for (var j = 0; j < winnerData.length; j+=2) {
            matchup.college1 = winnerData[j];
            matchup.college2 = winnerData[j+1];
            $container.append(Mustache.render($('#matchup-template').html(), matchup));
        }
    });

    // REGIONAL FINALS
    $.each(REGION_ORDER, function(i, v) {
        var $container = $('#regionalfinal-' + v + '-container');
        var $matchups = $('#regionalsemi-' + v + '-container').children('div');

        var winnerData = [];
        for (var j = 0; j < $matchups.length; j++) {
            var teams = $($matchups[j]).find('a');
            var winner = $('#' + $(teams[0]).attr('id').split('-')[0] + '-matchup1').data();
            var loser = $('#' + $(teams[1]).attr('id').split('-')[0] + '-matchup1').data();

            if (winner.rank < loser.rank) {
                var tmp = winner;
                winner = loser;
                loser = tmp;
            }

            winnerData.push(winner);
        }

        var matchup = {
            classes: "matchup4"
        }
        for (var j = 0; j < winnerData.length; j+=2) {
            matchup.college1 = winnerData[j];
            matchup.college2 = winnerData[j+1];
            $container.append(Mustache.render($('#matchup-template').html(), matchup));
        }
    });

    // NAT SEMIS
    $.each(REGION_ORDER, function(i, v) {
        var $matchups = $('#regionalfinal-' + v + '-container').children('div');
        var $container = $('#natsemis-' + (v.toLowerCase().indexOf("west") === -1 ? "right" : "left") + '-container');

        var winnerData = [];
        for (var j = 0; j < $matchups.length; j++) {
            var teams = $($matchups[j]).find('a');
            var winner = $('#' + $(teams[0]).attr('id').split('-')[0] + '-matchup1').data();
            var loser = $('#' + $(teams[1]).attr('id').split('-')[0] + '-matchup1').data();

            if (winner.rank < loser.rank) {
                var tmp = winner;
                winner = loser;
                loser = tmp;
            }

            winnerData.push(winner);
        }

        var matchup = {
            classes: "matchup5"
        }
        for (var j = 0; j < winnerData.length; j+=2) {
            matchup.college1 = winnerData[j];
            $(Mustache.render($('#matchup-template').html(), matchup)).appendTo($container).find('a').last().remove();
        }
    });

    // FINALS
    $.each(['left', 'right'], function(i, v) {
        var $container = $('#natsemis-' + v + '-container');
        var teams = $container.find('a');

        var team1Rank = $('#' + $(teams[0]).attr('id').split('-')[0] + '-matchup1').data().rank;
        var team2Rank = $('#' + $(teams[1]).attr('id').split('-')[0] + '-matchup1').data().rank;

        var winnerIndex = 0;
        if (team1Rank < team2Rank) {
            winnerIndex = 1;
        }

        $(teams[0]).after($(teams[winnerIndex]).clone().addClass('team2'));
    });


    for (var i = 2; i < 6; i++) {
        $('.matchup' + i).find('.team').each(function(j, v) {
            var lastRound = $('#' + $(this).attr('id').split('-')[0] + '-matchup1').data().actual_last_round;
            if (lastRound <= i) {
                $(this).addClass('incorrect');
            } else {
                $(this).addClass('correct');
            }
        });
    }

    $('.container').find('a.team').each(function(i, v) {
        var data = $('#' + $(this).attr('id').split('-')[0] + '-matchup1').data();
        $(this).qtip({
            content: {
                title: {
                    text: function(api) {
                        return data.name;
                    },
                    button: "Close"
                },
                text: function(api) {
                    return Mustache.render($('#college-detail-template').html(), data);
                }
            },
            position: {
                viewport: $(window),
                my: 'top center',
                at: 'bottom center',
                adjust: {
                    method: 'shift none'
                }
            },
            show: {
                event: 'click'
            },
            hide: {
                event: 'click'
            },
            style: {
                classes: 'qtip-light',
                tip: {
                    radius: 4
                }
            }
        });
    });
});
</script>
		
	</body>
</html>
