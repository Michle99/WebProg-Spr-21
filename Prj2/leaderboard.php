<!DOCTYPE>
<html>
<head>
    <link href="tiles.css" rel="stylesheet" />
    <title>Leaderboard</title>
    <style>
       
        body {
            height: 100vh;
            width: 100vw;
            background:white;
            overflow: hidden;
        }
        .header {
            display: block;
            margin: 2rem 1rem 0 0;
        }
        .header a {
            color: #05404f;
            outline: 0;
            background: #f2f2f2;
            border: 0;
            border-radius: 0.5rem;
            padding: 0.75rem;
            box-sizing: border-box;
            font: 2rem  sans-serif;
        }
        .header p {
            float: left;
            margin-right: 2rem;
            font: 2rem  sans-serif;
            color: white;
        }
        .right {
            float: right;
        }
        table, tr, th, td {
           
            border-spacing: 5px;
            border: 5px solid black;

        }
    </style>
</head>

<body style="background-color: white">
    <h2>Users</h2>
<div>
    <table>
        <tr>
            <th>Place</th>
            <th>Users</th>
            <th>score</th>
        </tr>
  

    
<?php
 include("signin.php");
 include("answers.php");
 $value   =  $_COOKIE[$cookie_name];
 $username = $_COOKIE["Username"];

 if ($value != 0) {
    $value   =  $_COOKIE[$cookie_name];
    $username = $_COOKIE["Username"];
    file_put_contents("TopPlayers.txt", "\n" .$value. ":".$username, FILE_APPEND);

}

    $place = 0;
    $textfile = file("TopPlayers.txt"); 
    $newfile = fopen("NewTopPlayers.txt", "w+"); 
    $initialFile = $textfile[0]; 
        echo $initialFile."<br>"; 
    fwrite($newfile, $initialFile); 
    array_shift($textfile); 
    rsort($textfile, SORT_NUMERIC); 
    foreach($textfile as $line){ 
	    $value = (explode(":",$line)[0]);
	    $username = (explode(":",$line)[1]);
	    $place++ ; 
		            
    echo "<tr><td>$place</td><td>$username</td><td>$$value</td></tr> ";
    fwrite($newfile, trim($line)."\n"); 
}
fclose($newfile); 
?>

</table>




</div>
</body>
</html>
