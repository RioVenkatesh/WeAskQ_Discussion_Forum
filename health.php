<html>
<head>
<title>Health</title>
<link rel="stylesheet" type="text/css" href="css/category.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="https://en.wikipedia.org/wiki/Health" height="550" width="1000" title="Wikipedia"></iframe>');
        }
    });   
});
</script>
</head>
<body>
<div class="cbg2-img">
<?php
include 'nvgbar.php';
?>
<div class="formstyle">
<h1>Health</h1>
</div><br>
<h3>Introduction</h3>
<p>Health is a state of physical, mental and social well-being in which disease and infirmity are absent. Health is "a state of complete physical, mental, and social well-being and not merely the absence of disease" according to the World Health Organization (WHO).[1][2] Physical is about the body. Mental is about how people think and feel. Social talks about how people live with other people. It is about family, work, school, and friends.</p>
<h3>History</h3>
<p>The meaning of health has evolved over time. In keeping with the biomedical perspective, early definitions of health focused on the theme of the body's ability to function; health was seen as a state of normal function that could be disrupted from time to time by disease. An example of such a definition of health is: "a state characterized by anatomic, physiologic, and psychological integrity; ability to perform personally valued family, work, and community roles; ability to deal with physical, biological, psychological, and social stress".[2] Then in 1948, in a radical departure from previous definitions, the World Health Organization (WHO) proposed a definition that aimed higher: linking health to well-being, in terms of "physical, mental, and social well-being, and not merely the absence of disease and infirmity".[3] Although this definition was welcomed by some as being innovative, it was also criticized as being vague, excessively broad and was not construed as measurable. For a long time, it was set aside as an impractical ideal and most discussions of health returned to the practicality of the biomedical model.[4]

Just as there was a shift from viewing disease as a state to thinking of it as a process, the same shift happened in definitions of health. Again, the WHO played a leading role when it fostered the development of the health promotion movement in the 1980s. This brought in a new conception of health, not as a state, but in dynamic terms of resiliency, in other words, as "a resource for living". In 1984 WHO revised the definition of health defined it as "the extent to which an individual or group is able to realize aspirations and satisfy needs and to change or cope with the environment. Health is a resource for everyday life, not the objective of living; it is a positive concept, emphasizing social and personal resources, as well as physical capacities".[5] Thus, health referred to the ability to maintain homeostasis and recover from insults. Mental, intellectual, emotional and social health referred to a person's ability to handle stress, to acquire skills, to maintain relationships, all of which form resources for resiliency and independent living.[4] This opens up many possibilities for health to be taught, strengthened and learned.

Since the late 1970s, the federal Healthy People Program has been a visible component of the United States’ approach to improving population health.[6][7] In each decade, a new version of Healthy People is issued,[8] featuring updated goals and identifying topic areas and quantifiable objectives for health improvement during the succeeding ten years, with assessment at that point of progress or lack thereof. Progress has been limited to many objectives, leading to concerns about the effectiveness of Healthy People in shaping outcomes in the context of a decentralized and uncoordinated US health system. Healthy People 2020 gives more prominence to health promotion and preventive approaches and adds a substantive focus on the importance of addressing social determinants of health. A new expanded digital interface facilitates use and dissemination rather than bulky printed books as produced in the past. The impact of these changes to Healthy People will be determined in the coming years.[9]

Systematic activities to prevent or cure health problems and promote good health in humans are undertaken by health care providers. Applications with regard to animal health are covered by the veterinary sciences. The term "healthy" is also widely used in the context of many types of non-living organizations and their impacts for the benefit of humans, such as in the sense of healthy communities, healthy cities or healthy environments. In addition to health care interventions and a person's surroundings, a number of other factors are known to influence the health status of individuals, including their background, lifestyle, and economic, social conditions and spirituality; these are referred to as "determinants of health." Studies have shown that high levels of stress can affect human health.[10]

In the first decade of the 21st century, the conceptualization of health as an ability opened the door for self-assessments to become the main indicators to judge the performance of efforts aimed at improving human health.[11] It also created the opportunity for every person to feel healthy, even in the presence of multiple chronic diseases, or a terminal condition, and for the re-examination of determinants of health, away from the traditional approach that focuses on the reduction of the prevalence of diseases.</p>
<br>
<div id="iframeHolder"></div>
<button id="button">Click here to view more in Wikipedia</button>

<div class="category">
<h2>Latest Discussions</h2>
<br>
<?php
include "connect.php";
$cat='health';
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
