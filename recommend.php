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
            <br>
            <br>
            <br>
    
    <?php
    session_start();
    $pl = htmlentities($_GET["PlaceID"]);
    $un = $_SESSION["gatekeeper"];

    $conn = new PDO ("mysql:host=localhost;dbname=gurungr;", "gurungr", "yoocoera");

    $results = $conn->query ("UPDATE places SET recommended=recommended+1 WHERE ID = '$pl'");

        echo "<h6><a href='searchandreviews.php'>Back to search...!</a></h6>";
    
        ?>

        </div>
    </body>
  

</html>