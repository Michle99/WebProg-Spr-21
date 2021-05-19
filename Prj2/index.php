<!DOCTYPE HTML>
<html>
		<head>
		<meta charset="utf-8">
        <title>Jeopardy Game</title>
			<style>
				body {
					height: 100vh;
					width: 100vh;
					background-color:#FF8C00;
				}
				h1 {
					color: #FF00FF;
					text-align: center;
					font:10rem sans serif;
					}
					form {
						display: inline-block;
					}
				.signin {
                			/**border:none;**/
                			border-radius: 5px;
                			display:inline-block;
                			padding:1rem 2rem;
                			vertical-align:middle;
                			overflow:hidden;
                			/* text-decoration:none; */
                			color:inherit;
                			background-color:inherit;
                			text-align:center;
                			cursor:pointer;
                			/* white-space:nowrap; */
                			font: 2rem  sans-serif;
            				}
            	.signin:hover {
                			box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            					}
          		.now {
                		color:#0a0a0a!important;
                		background-color:#deabab!important;
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

			</style>
		</head>
		
		
		<body>
        <div class="main">
            <h1>JEOPARDY Game!</h1>
            <a href="signin.html">
                <span class="signin now">Sign in</span>
            </a>
			<p>Not registered? <a  href="signup.php">Create an account</a></p>
        </div>
    </body>
	</html>