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
        
        <header>TripsWiki</header>
        
        <ul>
                <li><a href="mainindex.php" active>HOME</a></li>
                <li><a href="addplaces.php">ADD PLACES</a></li>
                <li><a href="searchandreviews.php">SEARCH PLACES</a></li>
                <li>
                 <?php
    if ( isset ($_SESSION["gatekeeper"]))
    {
        echo "<li><a href='logout.php'> Log out </a></li>";
    }
?>
                </li>
            </ul>
        
        <br>
        <br>
        
        <div class="wrapper1">
        
        <?php
        
            $conn = new PDO("mysql:host=localhost;dbname=gurungr;","gurungr", "yoocoera");
    
            $results = $conn->query("SELECT * from reviews where approved = 0");

            $row = $results->fetch();
        
            if($row == false)
            {
            echo "No Reviews to approve!";
            }
            else 
            {
           while($row)
            {
               echo "<p>$row[review]</p>";
               $row = $results->fetch();
               
               echo "<p><a href='approve_reviews.php?id=$row[id]'>Approve this review!</a></p>";
            }
            }
        
        ?>
        
        </div>
    </body>
    
</html>