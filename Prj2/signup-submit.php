<?php

$username = $_POST["username"];
$password = $_POST["password"];
$filename = 'users.txt';
$file = file($filename);
$users = [];

for ($i = 0; $i < count($file); $i++) {
    $temp = explode(",", $file[$i]);
    $k = $temp[0];
    $users[$i] = $k;
}

$error = false;
$exists = false;

if (empty($username) || empty($password)) {
    $error = true;
}

foreach ($users as $u) {
    if ($u == $username) {
        $exists = true;
    }
}
if (!$error && !$exists) {
    $new_user = array($username,$password . "\n");
    $str = join(',', $new_user);
    file_put_contents($filename, $str, FILE_APPEND);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Jeopardy</title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif; background-color: rgb(166, 255, 0);}
            * {box-sizing: border-box}

            /* Full-width input fields */
            input[type=text], input[type=password] {
              width: 100%;
              padding: 15px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border:aquamarine;
              border-style: double;
              border-radius: 50px;
              background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }

            hr {
              border: 1px solid #f1f1f1;
              margin-bottom: 25px;
            }

            /* Set a style for all buttons */
            button {
              background-color: #3f6b36;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: dotted;
              border-radius: 50px;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }

            button:hover {
              opacity:1;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
              padding: 14px 20px;
              background-color: #570f09;
            }

            /* Float cancel and signup buttons and add an equal width */
            .cancelbtn, .signupbtn {
              float: left;
              width: 50%;
            }

            /* Add padding to container elements */
            .container {
              padding: 16px;
            }

            /* Clear floats */
            .clearfix::after {
              content: "";
              clear: both;
              display: table;
            }

            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
              .cancelbtn, .signupbtn {
                 width: 100%;
              }
            }
            </style>
    </head>
    <body>
        <div class="main">
        <?php if ($error) { ?>
            <h1>Error!</h1>
            <p>We're sorry. You've left some fields empty. Please try again.</p><br>
            <a href="signup.php">back</a>
        <?php } else if ($exists) { ?>
            <h1>Error!</h1>
            <p>We're sorry. Username already exists. Please try again.</p>
            <a href="signup.php">back</a>
        <?php } else { ?>
            <h1>Welcome, <?= $username ?>!</h1>
            <a href="signin.html">Sign in</a>

        <?php } ?>
        </div>
    </body>
</html>
