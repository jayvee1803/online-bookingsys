<?php
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "booking_db"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

$errorMessage = '';
if(!empty($_POST["username"]) && $_POST["username"]!=''&& $_POST["password"]!='') {    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlQuery = "SELECT * FROM users_tbl WHERE username='".$username."' AND password='".$password."'";
    $resultSet = mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));
    $isValidLogin = mysqli_num_rows($resultSet);    
    if($isValidLogin){
        if(!empty($_POST["remember"])) {
            setcookie ("username", $loginId, time()+ (10 * 365 * 24 * 60 * 60));  
            setcookie ("password", $password,  time()+ (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie ("username",""); 
            setcookie ("password","");
        }
        $userDetails = mysqli_fetch_assoc($resultSet);
        $_SESSION["user"] = $userDetails['username'];
        $_SESSION["email"] = $userDetails['email'];
       /* header("location:/Concorde/");*/
        header("location:/BookingSystem/");         
    } else {        
        $errorMessage = "Invalid login!";        
    }
} else if(!empty($_POST["loginId"])){
    $errorMessage = "Enter Both user and password!";    
}   
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <section>				
                <div id="container_demo">
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Email or Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>