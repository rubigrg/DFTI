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
        
        <div id="wrapper2">
        
            <?php
    session_start();
        $un = $_SESSION["gatekeeper"];
        $nm = htmlentities($_POST["location"]);
        $t = htmlentities($_POST["type"]);
        $d = htmlentities($_POST["description"]);
        $cr = htmlentities($_POST["country"]);
        $rg = htmlentities($_POST["region"]);
        $rm = htmlentities($_POST["recommended"]);


        $conn = new PDO ("mysql:host=localhost;dbname=gurungr;", "gurungr", "yoocoera");

                $results = $conn->query ("INSERT INTO places (username, name, type, description, country, region, recommended) VALUES ('$un', '$nm', '$t','$d', '$cr','$rg', '$rm')");

        if ($results->rowCount() == 0) {
            echo " error, insert failed"; 

        }

        else{ 

            echo " <p>You have successfully added a new place:D</p><br>";
            echo "<p><a href='addplaces.php'>Go Back...!</a></p>";
        }
    ?>
            
        </div>
        
    </body>
    
</html>