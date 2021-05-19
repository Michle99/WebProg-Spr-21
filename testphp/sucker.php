<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
				<?php echo  $_POST['name'];?>
			</dd>

			<dt>Section</dt>
			<dd>
				<?php echo $_POST['section'];?>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?php 
				$out1 = $_POST['number'];
				//$out .= "(";
				$out2 = $_POST['cardtype'];
				//$out .= ")";
				$out3 = "$out1($out2)";

				echo $out3;
	
				?>
			</dd>
		</dl>

		<p>Here are all the suckers who have submitted here:</p>
		<pre>
			<?php
			//this is ex4
			if(!empty($_POST['name']) && !empty($_POST['section']) && !empty($_POST['number']) && !empty($_POST['cardtype'])){
			$name = $_POST['name'];
			$section = $_POST['section'];
			$number = $_POST['number'];
			$cardtype = $_POST['cardtype'];

			$text = "$name;$section;$number;$cardtype";
			echo $text;
			
			$myfile = fopen("sucker.php", "a");
			fwrite($myfile, "</br>" . $text);
			fclose($myfile);
			}
			else {
				echo "Your form was incomplete. Please go back.";
			
			}
			
			?>
		</pre>
		
	</body>
</html>