<!Doctype html>
<?php
    session_start();
?>

<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>TripsWiki</title>
    
</head>

            <header>TripsWiki</header>
   
            
             <ul>
                <li><a href="mainindex.php" active>HOME</a></li>
                <li><a href="addplaces.php">ADD PLACES</a></li>
                <li><a href="searchandreviews.php">SEARCH PLACES</a></li>
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
            </ul>

    <body bgcolor="lightgrey">   
        
        <div class="wrapper1">
            
            <?php
        
        $pl = htmlentities($_GET["place"]);

    $conn = new PDO("mysql:host=localhost;dbname=gurungr;","gurungr", "yoocoera");
    
    $results = $conn->query("SELECT * from reviews where placeID = '$pl'");
        $row = $results->fetch();
        if ($row == false)
			
        {
                echo "<h6><img src='images/noresults.png' margin-left='50%'></h6><br><br>";
                echo "<p><a href='searchandreviews.php'>Back to search...!</a></p>";
        }
                else
        {  
            while ($row) 
            {
                echo "<h2>Reviews for placeID= $row[placeID]:</h2> <br> ";
                echo "<p>$row[review]</p>";

                $row= $results->fetch();
            }

                    echo "<p><a href='searchandreviews.php'>Back to Search...!</a></p>";
        }

        ?>   
 
        </div>
    
    </body>

    
</html>
