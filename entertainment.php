<html>
<head>
<title>Entertainment</title>
<link rel="stylesheet" type="text/css" href="css/category.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="https://en.wikipedia.org/wiki/Entertainment" height="550" width="1000" title="Wikipedia"></iframe>');
        }
    });   
});
</script>
</head>

<body>
<div class="cbg3-img">
<?php
include 'nvgbar.php';
?>
<div class="formstyle">
<h1>Entertainment</h1>
</div><br>
<h3>Introduction</h3>
<p>Entertainment is a form of activity that holds the attention and interest of an audience or gives pleasure and delight. It can be an idea or a task, but is more likely to be one of the activities or events that have developed over thousands of years specifically for the purpose of keeping an audience's attention.[1] Although people's attention is held by different things, because individuals have different preferences in entertainment, most forms are recognisable and familiar. Storytelling, music, drama, dance, and different kinds of performance exist in all cultures, were supported in royal courts, developed into sophisticated forms and over time became available to all citizens. The process has been accelerated in modern times by an entertainment industry that records and sells entertainment products. Entertainment evolves and can be adapted to suit any scale, ranging from an individual who chooses a private entertainment from a now enormous array of pre-recorded products; to a banquet adapted for two; to any size or type of party, with appropriate music and dance; to performances intended for thousands; and even for a global audience.

The experience of being entertained has come to be strongly associated with amusement, so that one common understanding of the idea is fun and laughter, although many entertainments have a serious purpose. This may be the case in the various forms of ceremony, celebration, religious festival, or satire for example. Hence, there is the possibility that what appears as entertainment may also be a means of achieving insight or intellectual growth.

An important aspect of entertainment is the audience, which turns a private recreation or leisure activity into entertainment. The audience may have a passive role, as in the case of persons watching a play, opera, television show, or film; or the audience role may be active, as in the case of games, where the participant/audience roles may be routinely reversed. Entertainment can be public or private, involving formal, scripted performance, as in the case of theatre or concerts; or unscripted and spontaneous, as in the case of children's games. Most forms of entertainment have persisted over many centuries, evolving due to changes in culture, technology, and fashion for example with stage magic. Films and video games, for example, although they use newer media, continue to tell stories, present drama, and play music. Festivals devoted to music, film, or dance allow audiences to be entertained over a number of consecutive days.

Some entertainment, such as public executions, are now illegal in most countries. Activities such as fencing or archery, once used in hunting or war, have become spectator sports. In the same way, other activities, such as cooking, have developed into performances among professionals, staged as global competitions and then broadcast for entertainment. What is entertainment for one group or individual may be regarded as work or an act of cruelty by another.

The familiar forms of entertainment have the capacity to cross over different media and have demonstrated a seemingly unlimited potential for creative remix. This has ensured the continuity and longevity of many themes, images, and structures.</p>
<h3>Psychology and philosophy</h3>
<p>Entertainment can be distinguished from other activities such as education and marketing even though they have learned how to use the appeal of entertainment to achieve their different goals. Sometimes entertainment can be a mixture for both. The importance and impact of entertainment is recognised by scholars[2][3] and its increasing sophistication has influenced practices in other fields such as museology. Psychologists say the function of media entertainment is "the attainment of gratification".No other results or measurable benefit are usually expected from it (except perhaps the final score in a sporting entertainment). This is in contrast to education (which is designed with the purpose of developing understanding or helping people to learn) and marketing (which aims to encourage people to purchase commercial products). However, the distinctions become blurred when education seeks to be more "entertaining" and entertainment or marketing seek to be more "educational". Such mixtures are often known by the neologisms "edutainment" or "infotainment". The psychology of entertainment as well as of learning has been applied to all these fields.[7] Some education-entertainment is a serious attempt to combine the best features of the two.[8][9] Some people are entertained by others' pain or the idea of their unhappiness (schadenfreude).
An entertainment might go beyond gratification and produce some insight in its audience. Entertainment may skilfully consider universal philosophical questions such as: "What does it mean to be human?"; "What is the right thing to do?"; or "How do I know what I know?". "The meaning of life", for example, is the subject in a wide range of entertainment forms, including film, music and literature. Questions such as these drive many narratives and dramas, whether they are presented in the form of a story, film, play, poem, book, dance, comic, or game. Dramatic examples include Shakespeare's influential play Hamlet, whose hero articulates these concerns in poetry; and films, such as The Matrix, which explores the nature of knowledge[10] and was released worldwide.[11] Novels give great scope for investigating these themes while they entertain their readers.[12] An example of a creative work that considers philosophical questions so entertainingly that it has been presented in a very wide range of forms is The Hitchhiker's Guide to the Galaxy. Originally a radio comedy, this story became so popular that it has also appeared as a novel, film, television series, stage show, comic, audiobook, LP record, adventure game and online game, its ideas became popular references (see Phrases from The Hitchhiker's Guide to the Galaxy) and has been translated into many languages.[13] Its themes encompass the meaning of life, as well as "the ethics of entertainment, artificial intelligence, multiple worlds, God, and philosophical method".</p>
<br>
<div id="iframeHolder"></div>
<button id="button">Click here to view more in Wikipedia</button>

<div class="category">
<h2>Latest Discussions</h2><br>
<?php
include "connect.php";
$cat='entertainment';
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