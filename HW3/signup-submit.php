<?php include("common.php"); ?>


<!-- Accepts the form input from signup.php and writes it to the singles.txt file -->
<?php
$userName = $_POST["name"];
$userDetail = $userName;
foreach ($_POST as $key => $value) {
	if ($key != "name"){
		$userDetail = $userDetail.",".$value;
	}
}

file_put_contents("singles.txt", "\n".$userDetail, FILE_APPEND);
?>

<div>
<h1>Thank you!</h1>
<p>
Welcome to NerdLuv, <?= $userName ?>!<br /><br />
Now <a href="matches.php">log in to see your matches!</a>
</p>
</div>

<?php bottomSec(); /*This will use the code from common.php */?>