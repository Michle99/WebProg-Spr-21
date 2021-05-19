<?php include("common.php"); ?>

<!-- 
		Michael Oroyo
		CSC 4370 Spring 2021
		Georgia State University
		Homework 3
-->

<form action="matches-submit.php" method="get">
<fieldset>
<legend>Returning User:</legend>

<ul>
<li>
<strong>Name:</strong>
<input type="text" name="name" size="16" />
</li>
</ul>
                        
<input type="submit" value="View My Matches">
</fieldset>
</form>

<?php bottomSec(); /*This will use the code from common.php */?>