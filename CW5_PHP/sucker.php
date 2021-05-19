<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php
		if(!empty($_POST['name']) && !empty($_POST['section']) && !empty($_POST['number']) && !empty($_POST['cardtype']))
		{
				$name = $_POST['name'];
				$section = $_POST['section'];
				$number = $_POST['number'];
				$cardtype = $_POST['cardtype'];

				
				echo "<h1>Thanks, sucker!</h1>";

				echo "<p>Your information has been recorded.</p>";

				echo "<dl>
				<dt>Name</dt>
				<dd>
					$name
				</dd>

				<dt>Section</dt>
				<dd>
					$section
				</dd>

				<dt>Credit Card</dt>
				<dd>

					$number($cardtype);
				</dd>
			</dl>";

			echo "<p>Here are all the suckers who have submitted here:</p>";
				$text = "$name;$section;$number;$cardtype";
				//echo "<pre>$text</pre><br>";
			
			
				$myfile = fopen("suckers.html", "a");
				
				 fwrite($myfile, $text ."</br>");
				 fclose($myfile);

				 $data = file_get_contents('suckers.html');
				 echo "<pre>$data</pre>";
		
		}
		else 
		{
				echo "<h1>Sorry</h1><br>";
				echo "You didn't fill out the form completely. ". '<a href="buyagrade.html">Try again!<br></a>';
				

			}
			
			?>
		</pre>
		
	</body>
</html>