<?php 
    include("connection.php"); 
    include("signup.php");
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">

        
        <div id="form">
            <h1>Login Here</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
    
            </form>
        </div>
    
        <script src="script.js"> </script>
    </body>
</html>