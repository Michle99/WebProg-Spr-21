<head>
    <?php error_reporting(0);?>
    <?php
    $cookie_name="score";
    define($cookie_name, $_COOKIE[$cookie_name]);
    ?>
</head>
<style>
    .topnav {
        position: relative;
        background-color: #333;
        overflow: hidden;
        font-family: "Permanent Marker";
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #00b5e2;
        color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color: #00b5e2;
        color: white;
    }

    /* Centered section inside the top navigation */
    .topnav-centered a {
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Right-aligned section inside the top navigation */
    .topnav-right {
        float: right;
    }

    /* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
    @media screen and (max-width: 600px) {
        .topnav a, .topnav-right {
            float: none;
            display: block;
        }

        .topnav-centered a {
            position: relative;
            top: 0;
            left: 0;
            transform: none;
        }
    }
</style>



<!-- Top navigation -->
<div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
        <a href="jeopardygame.php" class="active">JEOPARDY</a>
    </div>

    <!-- Left-aligned links (default) -->
    <!-- <a href="#news">Welcome, <?= $_SESSION['Username'] ?></a> -->
    <a href="leaderboard.php">Leaderboard</a>
    <a href="#contact">Score: <?=$_COOKIE[$cookie_name]?></a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
        <a class="signout.php" href="signout.php">Log Out</a>
        <a href="reset.php">Start Over</a>
    </div>

</div>