<html>
<head>
    <title>Questions</title>
    <link href="jeopardy.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php include("heads.php");?>

<br><br>


<?php
define("score", 0);
score . session_start();
error_reporting(0);
$id = $_GET['id'];
$cookie_name = "score";
//echo "YOUR SCORE IS " . $_COOKIE[$cookie_name]."<br>";
?>
<div id="box1">
<?php
if ($id == "animals-100") { ?>
<!--    <div id="box1">-->
    <form action="answers.php" method="post">

        <h2>Pinnipeds meaning flipper-footed include sea lions seals & these of the family Odobenus?</h2><br>

          What is: <br>
        <input type="text" name="animals-100" size="17" maxlength="16" id="animals-100"><br><br>

        <input name="sub" type="submit" value="Submit">

    </form>
    <?php
} elseif ($id == "animals-200") { ?>
    <form action="answers.php" method="post">

        <h2>This term for animals like cows & sheep means they chew their cuds?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="animals-200" size="17" maxlength="16" id="animals-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>

    <?php
} elseif ($id == "animals-300") { ?>
    <form action="answers.php" method="post">

        <h2>These bloodsuckers have been used in medicine</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="animals-300" size="17" maxlength="16" id="animals-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "animals-400") { ?>
    <form action="answers.php" method="post">

        <h2>Hopefully, you can be as happy as one of these high-fliers? </h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="animals-400" size="17" maxlength="16" id="animals-400"><br><br>
        <input name="sub" type="submit" value="Submit">

    </form>
    <?php
} elseif ($id == "animals-500") { ?>
    <form action="answers.php" method="post">

        <h2>This monster is the largest lizard native to the U.S.?</h2>
        <br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="animals-500" size="17" maxlength="16" id="animals-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //foods
elseif ($id == "foods-100") { ?>
    <form action="answers.php" method="post">

        <h2>In diner slang an M.D. isn’t a Mountain Dew but this soft drink?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="foods-100" size="17" maxlength="16" id="foods-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "foods-200") { ?>
    <form action="answers.php" method="post">

        <h2>The main difference between these two desserts that end in the same three letters is that one contains dairy and the other does not?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="foods-200" size="17" maxlength="16" id="foods-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "foods-300") { ?>
    <form action="answers.php" method="post">

        <h2>To make a Kir Royale add crème de cassis to this beverage?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="foods-300" size="17" maxlength="16" id="foods-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "foods-400") { ?>
    <form action="answers.php" method="post">

        <h2>In Spanish cuisine they're appetizers or small bites of food like stuffed dates or chicken croquettes?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="foods-400" size="17" maxlength="16" id="foods-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "foods-500") { ?>
    <form action="answers.php" method="post">

        <h2>The name of this Mexican food favorite is Spanish for little donkey?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="foods-500" size="17" maxlength="16" id="foods-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //tourism
elseif ($id == "tourism-100") { ?>
    <form action="answers.php" method="post">

        <h2>Fans of this movie series can tour the London locales used in the filming including the one seen here?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tourism-100" size="17" maxlength="16" id="tourism-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "tourism-200") { ?>
    <form action="answers.php" method="post">

        <h2>This Alabama city's National Voting Rights Museum includes exhibits on Martin Luther King & Jesse Jackson?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tourism-200" size="17" maxlength="16" id="tourism-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "tourism-300") { ?>
    <form action="answers.php" method="post">

        <h2>On Grand Cayman Island visit the farm that raises the green sea type of this reptile?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tourism-300" size="17" maxlength="16" id="tourism-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "tourism-400") { ?>
    <form action="answers.php" method="post">

        <h2>Break out the honey: this bear has his own ride at Disneyland near Splash Mountain?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tourism-400" size="17" maxlength="16" id="tourism-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "tourism-500") { ?>
    <form action="answers.php" method="post">

        <h2>One of these thrill rides careens around the New York-New York hotel in Vegas & even goes upside-down.</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tourism-500" size="17" maxlength="16" id="tourism-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //music
elseif ($id == "music-100") { ?>
    <form action="answers.php" method="post">

        <h2>Which singer is a godmother to Elton John’s two sons?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="music-100" size="17" maxlength="16" id="music-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "music-200") { ?>
    <form action="answers.php" method="post">

        <h2>In 1985, Tina Turner won the Grammy for Record of the Year for what song?	“What’s Love Got To Do With It”.</h2><br>


        <strong class="column">  What is: <br></strong>
        <input type="text" name="music-200" size="17" maxlength="16" id="music-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "music-300") { ?>
    <form action="answers.php" method="post">

        <h2>Which Beatle had dyslexia?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="music-300" size="17" maxlength="16" id="music-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "music-400") { ?>
    <form action="answers.php" method="post">

        <h2>Which pop star played 27 different instruments on their debut album “For You”?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="music-400" size="17" maxlength="16" id="music-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "music-500") { ?>
    <form action="answers.php" method="post">

        <h2>Who sang a duet with Ed Sheeran on the song “Perfect”?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="music-500" size="17" maxlength="16" id="music-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //movies
elseif ($id == "movies-100") { ?>
    <form action="answers.php" method="post">

        <h2>Alicia Vikander plays this young woman who switches jobs from bicycle courier to tomb raider?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="movies-100" size="17" maxlength="16" id="movies-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "movies-200") { ?>
    <form action="answers.php" method="post">

        <h2>In Justice League Jason Momoa pays this hero of Atlantis?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="movies-200" size="17" maxlength="16" id="movies-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "movies-300") { ?>
    <form action="answers.php" method="post">

        <h2>In 2016 she donned the pillbox hat to play Jackie (Kennedy)?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="movies-300" size="17" maxlength="16" id="movies-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "movies-400") { ?>
    <form action="answers.php" method="post">

        <h2>Leonardo DiCaprio was just dreamy as a master of psychic espionage in this flick?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="movies-400" size="17" maxlength="16" id="movies-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "movies-500") { ?>
    <form action="answers.php" method="post">

        <h2>Can we talk? A documentary covered a year in the life of this red-carpet comedienne: A Piece of Work?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="movies-500" size="17" maxlength="16" id="movies-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
</div>
    <?php
}
?>
<?php
echo "<br>YOUR SCORE IS " . $_COOKIE["score"];
?>
</body>
<?php include(bottoms.php)?>
</html>
