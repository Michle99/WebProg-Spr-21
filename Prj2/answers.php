<html>
<head>
    <?php include "heads.php"?>
   
    <link href="jeopardy.css" rel="stylesheet" />
    <meta http-equiv = "refresh" content = "3; url = jeopardygame.php" />
</head>
<body>
<?php
$cookie_name = "score";
$cookie_value = 0;
define($cookie_name, $_COOKIE[$cookie_name]);

?>


<?php score.session_start();

error_reporting(E_ERROR | E_PARSE);

setcookie($cookie_name, $cookie_value);


?>
<html>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);


if (isset($_POST["animals-100"])) {
    $answer = $_POST["animals-100"];
    if ($answer == "walruses") {
        ?>
        <h1>CORRECT!</h1><br>

        <a href="jeopardygame.php"><h2>Back to game</h2></a>

        <?php score.session.session_start();

        error_reporting(E_ERROR | E_PARSE);
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"] + 100;
        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>

        <?php
    }
}
elseif (isset($_POST["animals-200"])) {
    error_reporting(E_ERROR | E_PARSE);
    $answer = $_POST["animals-200"];
    if ($answer == "ruminant") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a><br><br>

        <?php score.session.session_start();


        error_reporting(E_ERROR | E_PARSE);
        $_COOKIE[$cookie_name];
        $cookie_value = $_COOKIE[$cookie_value];
        $value = (int) $_COOKIE["$cookie_name"] + 200;
        setcookie($cookie_name, $value);
        ?>





        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["animals-300"])) {
    $answer = $_POST["animals-300"];
    if ($answer == "leeches") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>


        <?php


    }else{?>
        <h1>WRONG!</h1><br>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>
        <a href="jeopardygame.php">Back to game</a>
        <?php
    }
}
elseif (isset($_POST["animals-400"])) {
    $answer = $_POST["animals-400"];
    if ($answer == "lark") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["animals-500"])) {
    $answer = $_POST["animals-500"];
    if ($answer == "gila monster") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}


//foods
elseif (isset($_POST["foods-100"])) {
    $answer = $_POST["foods-100"];
    if ($answer == "dr.pepper") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["foods-200"])) {
    $answer = $_POST["foods-200"];
    if ($answer == "Sorbet and sherbet.") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["foods-300"])) {
    $answer = $_POST["foods-300"];
    if ($answer == "champagne") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["foods-400"])) {
    $answer = $_POST["foods-400"];
    if ($answer == "tapas.") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["foods-500"])) {
    $answer = $_POST["foods-500"];
    if ($answer == "burrito") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

//tourism

elseif (isset($_POST["tourism-100"])) {
    $answer = $_POST["tourism-100"];
    if ($answer == "harry potter") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["tourism-200"])) {
    $answer = $_POST["tourism-200"];
    if ($answer == "What is Selma") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["tourism-300"])) {
    $answer = $_POST["tourism-300"];
    if ($answer == "What is a Turtle") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["tourism-400"])) {
    $answer = $_POST["tourism-400"];
    if ($answer == "What is pooh bear") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["tourism-500"])) {
    $answer = $_POST["tourism-500"];
    if ($answer == "roller coaster") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

//music

elseif (isset($_POST["music-100"])) {
    $answer = $_POST["music-100"];
    if ($answer == "Who is Lady Gaga") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        You will be redirected...<br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["music-200"])) {
    $answer = ($_POST["music-200"]);
    if ($answer == "What is What’s Love Got To Do With It”") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <center>YOUR SCORE IS <?php echo "YOUR SCORE IS ".$_COOKIE[$cookie_name];?></center>


        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["music-300"])) {
    $answer = $_POST["music-300"];
    if ($answer == "Who is John Lennon") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["music-400"])) {
    $answer = $_POST["music-400"];
    if ($answer == "prince") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}

elseif (isset($_POST["music-500"])) {
    $answer = $_POST["music-500"];
    if ($answer == "beyonce") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 500;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}


//movies

elseif (isset($_POST["movies-100"])) {
    $answer = $_POST["movies-100"];
    if ($answer == "Who is Lara Croft") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 100;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
elseif (isset($_POST["movies-200"])) {
    $answer = $_POST["movies-200"];
    if ($answer == "Who is Aquaman") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 200;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];
        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["movies-300"])) {
    $answer = $_POST["movies-300"];
    if ($answer == "Who is Natalie Portman") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 300;

        setcookie($cookie_name, $value);
        ?>

        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}

elseif (isset($_POST["movies-400"])) {
    $answer = $_POST["movies-400"];
    if ($answer == "What is Inception") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
        ?>



        <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>

        <?php
    }
}

elseif (isset($_POST["movies-500"])) {
    $answer = $_POST["movies-500"];
    if ($answer == "Who is Joan Rivers.") {
        ?>
        <h1>CORRECT!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
    <?php score.session.session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"] + 400;

        setcookie($cookie_name, $value);
    ?>

    <?php

    }else{?>
        <h1>WRONG!</h1><br>
        <a href="jeopardygame.php">Back to game</a>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value);
        ?>
        <?php
    }
}
//echo "Your score is: ".$_COOKIE[$cookie_name];
?>