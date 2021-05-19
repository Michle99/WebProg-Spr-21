
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Jeopardy</title>
        <style>
           
            body {
                height: 100vh;
                width: 100vw;
                background-color: #2c8f7e;
            }
            h1 {
                color: white;
                text-align: center;
            }
            .main {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }
            .form {
                position: relative;
                background: #5e7812;
                margin: 0 auto;
                padding: 3rem;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            .form input {
                font: 0.8rem  sans-serif;
                outline: 0;
                background: #c9a1c3;
                width: 100%;
                border: 0;
                margin: 0 0 1rem;
                padding: 1rem;
                box-sizing: border-box;
            }
            .form input[type="submit"] {
                text-transform: uppercase;
                background: #25cfb1;
                color: white;
                cursor: pointer;
            }
            .form input[type="submit"]:hover {
                background: #3b8245;
            }
            .form h1 {
                font: 3rem  sans-serif;
                color: #25cfb1;
            }
            .form p {
                font-family: "Roboto Light", sans-serif;
                margin: 0.5rem 0 0;
                font-size: 0.75rem;
            }
            a:hover {
              color: #25cfb1;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <div class="form">
                <form action="signup-submit.php" method="post" class="login-form">
                    <h1>Sign Up</h1>
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" value="create">
                    <p>Already registered? <a href="signin.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </body>
</html>