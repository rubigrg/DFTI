<!Doctype html>
<?php
    session_start();
?>

<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>TripsWiki</title>
    
</head>

    <body background="images/travel1.jpg">
        
        <div id="wrapper">
        
            <header>TripsWiki</header>
   
            
             <ul>
                <li><a href="mainindex.php" active>HOME</a></li>
                <li><a href="addplaces.php">ADD PLACES</a></li>
                <li><a href="searchandreviews.php">SEARCH PLACES</a></li>
                <li>
                 <?php
    if ( isset ($_SESSION["admin"]))
    {
        echo "<li><a href='admin.php'> View Reviews</a></li>";
    }

    if ( isset ($_SESSION["gatekeeper"]))
    {
        echo "<li><a href='logout.php'> Log out </a></li>";
    }
?>
                </li>
            </ul>
            <br>
        
            <h1>Please Login to access this site:</h1>
            
            <br>
    
            <div class="col-sm-1">
                <fieldset>
                    <legend>Log in:</legend><br>
            <div class="login">
               <form method="post" action="login.php" >
                Username: <input name="username" /><br>
                   <br>
                Password: <input name="password" type="password" /><br>
                   <br>
                <input type="submit" value="Login!" />
                </form>
            </div>
                </fieldset>
            </div>
            
            <br>
            <br>

            <div class="col-sm-2">
                <fieldset>
                    <legend>Register:</legend><br>
                <form method="post" action="register.php">
            
                Username: <br> <input type="text" name="username" maxlength="50"><br>
                    <br>
                Password: <br><input type="password" name="password" maxlength="50"><br>
                    <br>
                Confirm Password: <br><input type="password" name="confPassword" maxlength="50">
                    <br>
                    <br>
                    <input type="submit" value="Register!">
                </form>
                </fieldset>
            </div>
    <br>
            
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    
        <footer>
            <h3>Rubi Gurung (Q12320943) <br>(DFTI_Assignment1)</h3>
            <h3>Southampton Solent University, <br>East Park Terrace, <br> Southampton SO14 0YN</h3>
        </footer>
       
        
    </body>
    

</html>