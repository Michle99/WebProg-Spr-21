<!DOCTYPE>
<html>
<head>
    <link href="tiles.css" rel="stylesheet" />
    <style>
       
        body {
            height: 100vh;
            width: 100vw;
            background: #05404f;
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
    </style>
</head>
<?php error_reporting(0);?>
<?php session_start();?>
<!-- score.session. -->
<body>
<?php include("heads.php");?>
<div id="gameplay">
    <div class="grid grid-play" style="height:100vh; ">
        <div class="grid-row grid-row-cats" style="">

            <div class="grid-cell " data-row="0" data-col="0">
                <div class="cell">
                    <div class="cell-inner cat-cell">Animals</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="1">
                <div class="cell">
                    <div class="cell-inner cat-cell">Foods</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="2">
                <div class="cell">
                    <div class="cell-inner cat-cell">Tourism</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="3">
                <div class="cell">
                    <div class="cell-inner cat-cell">Music</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="4">
                <div class="cell">
                    <div class="cell-inner cat-cell">Movies</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-first-row">
            <div class="cell-group grid-cell" data-row="1" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <!--<a href="cards.php" id="animals-1">$100</a>&ndash;&gt;-->
                        <a href='cards.php?id=animals-100'>$100</a>

                    </div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=foods-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=tourism-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=music-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=movies-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-second-row">
            <div class="cell-group grid-cell" data-row="2" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <a href='cards.php?id=animals-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="1">
                <div class="cell points">
                    <div class="value">
                        <a href='cards.php?id=foods-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=tourism-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell"  data-row="2" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=music-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="4">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=movies-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions ">
            <div class="cell-group grid-cell"  data-row="3" data-col="0">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=animals-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="1">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=foods-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=tourism-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='cards.php?id=music-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=movies-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions  grid-forth-row">
            <div class="cell-group grid-cell" data-row="4" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=animals-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=foods-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=tourism-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=music-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=movies-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions grid-last-row ">
            <div class="cell-group grid-cell"data-row="5" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=animals-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=foods-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=tourism-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=music-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='cards.php?id=movies-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

