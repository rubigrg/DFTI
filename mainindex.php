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
        
            <h1>Welcome to TripsWiki!</h1>
            
            <i>"We aim to help you out with planning holidays by searching places of interest such as hotels, cities, historical sites, bars, restaurants, beaches, mountains and anywhere else that you might want to visit while on holiday"</i>
               
            <br>
            <br>
            <br>

    <br>
            
        </div>

        
    </body>
    

</html>