<html>
<head>
<title>Sports</title>
<link rel="stylesheet" type="text/css" href="css/category.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="https://en.wikipedia.org/wiki/Sport" height="550" width="1000" title="Wikipedia"></iframe>');
        }
    });   
});
</script>
</head>
<body>
<div class="cbg4-img">
<?php
include 'nvgbar.php';
?>
<div class="formstyle">
<h1>Sports</h1>
</div><br>
<h3>Introduction</h3>
<p>Sport includes all forms of competitive physical activity or games which,[1] through casual or organized participation, at least in part aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators.[2] Sports can bring positive results to one's physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a "tie" or "draw", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.

Sport is generally recognised as system of activities which are based in physical athleticism or physical dexterity, with the largest major competitions such as the Olympic Games admitting only sports meeting this definition,[3] and other organisations such as the Council of Europe using definitions precluding activities without a physical element from classification as sports.[2] However, a number of competitive, but non-physical, activities claim recognition as mind sports. The International Olympic Committee (through ARISF) recognises both chess and bridge as bona fide sports, and SportAccord, the international sports federation association, recognises five non-physical sports: bridge, chess, draughts (checkers), Go and xiangqi,[4][5] and limits the number of mind games which can be admitted as sports.[1]

Sport is usually governed by a set of rules or customs, which serve to ensure fair competition, and allow consistent adjudication of the winner. Winning can be determined by physical events such as scoring goals or crossing a line first. It can also be determined by judges who are scoring elements of the sporting performance, including objective or subjective measures such as technical performance or artistic impression.

Records of performance are often kept, and for popular sports, this information may be widely announced or reported in sport news. Sport is also a major source of entertainment for non-participants, with spectator sport drawing large crowds to sport venues, and reaching wider audiences through broadcasting. Sport betting is in some cases severely regulated, and in some cases is central to the sport.

According to A.T. Kearney, a consultancy, the global sporting industry is worth up to $620 billion as of 2013.[6] The world's most accessible and practised sport is running, while association football is the most popular spectator sport.</p>
<h3>Definition</h3>
<p>The precise definition of what separates a sport from other leisure activities varies between sources. The closest to an international agreement on a definition is provided by SportAccord, which is the association for all the largest international sports federations (including association football, athletics, cycling, tennis, equestrian sports, and more), and is therefore the de facto representative of international sport.

SportAccord uses the following criteria, determining that a sport should:[1]

have an element of competition
be in no way harmful to any living creature
not rely on equipment provided by a single supplier (excluding proprietary games such as arena football)
not rely on any "luck" element specifically designed into the sport.
They also recognise that sport can be primarily physical (such as rugby or athletics), primarily mind (such as chess or Go), predominantly motorised (such as Formula 1 or powerboating), primarily co-ordination (such as billiard sports), or primarily animal-supported (such as equestrian sport).[1]

The inclusion of mind sports within sport definitions has not been universally accepted, leading to legal challenges from governing bodies in regards to being denied funding available to sports.[11] Whilst SportAccord recognises a small number of mind sports, it is not open to admitting any further mind sports.

There has been an increase in the application of the term "sport" to a wider set of non-physical challenges such as video games, also called esports (from "electronic sports"), especially due to the large scale of participation and organised competition, but these are not widely recognised by mainstream sports organisations. According to Council of Europe, European Sports Charter, article 2.i, "'Sport' means all forms of physical activity which, through casual or organised participation, aim at expressing or improving physical fitness and mental well-being, forming social relationships or obtaining results in competition at all levels.</p>
<br>
<div id="iframeHolder"></div>
<button id="button">Click here to view more in Wikipedia</button>

<div class="category">
<h2>Latest Discussions</h2>
<br>
<?php
include "connect.php";
$cat='sports';
 $query = mysqli_query($con,"SELECT * FROM topics WHERE topic_cat='$cat' ORDER BY topic_date DESC LIMIT 6");
if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysqli_fetch_assoc($query))
	{
		$by=$row['topic_by'];
		$date=$row['topic_date'];
		$sub=$row['topic_subject'];
		$id=$row['topic_id'];
		echo "<div class='divigr'>";
		echo "<a href='topic.php?posts_topic=$id' style='font-size:20px;color:white;text-shadow:2px 2px 3px black; text-decoration:none;'>$sub</a>";
		$query2 = mysqli_query($con,"SELECT username FROM users WHERE id='$by'");
		while($row2 = mysqli_fetch_assoc($query2))
		{
			$name=$row2['username'];
			echo "<div style='font-size:12px;color:white;text-align:center; text-decoration:none;'>Asked by:  $name <br>On:  ";
			echo date('d-m-Y', strtotime($date));
			echo "</div>";
		}
		echo "</div>";
		echo "<br>";
	}
}
echo "<br><br><br>";
?>
</div>
</div>
</body>
</html>