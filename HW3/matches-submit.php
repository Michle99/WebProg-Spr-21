<?php include("common.php"); ?>

<!-- 
		Michael Oroyo
		CSC 4370 Spring 2021
		Georgia State University
		Homework 3
-->

<?php
//Variables
$textFile = file_get_contents("singles.txt");
$singles = explode("\n", $textFile);


//Get User Information
$userName = $_GET["name"];
$userDeets = array();
foreach ($singles as $persons) {
	$userDeets = explode(",", $persons);
	if($userDeets[0] == $userName){   
		break;
	}
}

//Function to check personality match
function get_PersonalityType($profileType, $candidateType){
	for($i=0; $i<4; $i++){
		if ($profileType[$i] == $candidateType[$i]){
			return true;
		}
	}
}

//Function to create match array
function generateMatches(){
	global $singles;
	global $userDeets;
	$couples = $singles;
	$arraySize = sizeof($couples);
	
	//Test for gender compatibility
	for ($i=0; $i<$arraySize; $i++){
		$coupleDeets = explode(",", $couples[$i]);
		$position = $i+1;
		if ($coupleDeets[1] == $userDeets[1]){
			unset($couples[$i]); //remove same gender from array
		}
		else if ($coupleDeets[4] != $userDeets[4]){
			unset($couples[$i]); //remove different OS from array
		}
		else if (($coupleDeets[2] < $userDeets[5] || $coupleDeets[2] > $userDeets[6]) || ($userDeets[2] < $coupleDeets[5] || $userDeets[2] > $coupleDeets[6])){
			unset($couples[$i]); //remove ages outside range from array
		}
		else if (!get_PersonalityType(str_split($coupleDeets[3]), str_split($userDeets[3])))
		{
			unset($couples[$i]); //remove incompatible personas from array

		}
	}
	$couples = array_values($couples); //re-indexes the array
	return $couples;
}

//Function to get matches
function get_patnerMatches(){
	$couples = generateMatches();
	for ($i=0; $i<sizeof($couples); $i++) {
		$accuratePatners = explode(",", $couples[$i]);
		showPatners($accuratePatners);
	}
}



function showPatners($accuratePatners){
	echo "<div class='match'>
		<p><img src='user.jpg' alt='user icon' />
		" . $accuratePatners[0] . "</p>
		<ul>
			<li><strong>gender:</strong>" . $accuratePatners[1] . "</li>
			<li><strong>age:</strong>" . $accuratePatners[2] . "</li>
			<li><strong>type:</strong>" . $accuratePatners[3] . "</li>
			<li><strong>OS:</strong>" . $accuratePatners[4] . "</li>                        
		</ul>
		</div>";
}

?>


<h1>Matches for <?=$userName?></h1>

<?php get_patnerMatches();?>
	

<?php bottomSec(); /*This will use the code from common.php */?>