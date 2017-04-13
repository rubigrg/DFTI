<!Doctype html>

<?php
    session_start();
?>

<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>TripsWiki</title>
    
</head>

        
        <div id="wrapper">
        
            <header style="color: white">TripsWiki</header>
   
            
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
    
    <body background = "images/travell.jpg">   
        
        <div class="wrapper">
        
            <?php

    $type = htmlentities($_GET["type"]);
    
    

    $conn = new PDO("mysql:host=localhost;dbname=gurungr;","gurungr", "yoocoera");
    
    $results = $conn->query("SELECT * from places where type = '$type'");
        $row = $results->fetch();
        if ($row == false)
			
{
        echo "<h1>No Results Found!</h1>";
}
        else
{  
	while ($row) 
	{

        echo "<h3>Results Found:</h3>";
        echo "<p><a href='searchandreviews.php'>Back to Search...!</a></p><br>";
		echo "<h4>$row[name] </p></h4>";
		echo "<p>Type: $row[type]</p>";
		echo "<p>Country: $row[country]</p>" ; 
		echo "<p>Region: $row[region] </p>" ; 
		echo "<p>Username: $row[username] </p>";
		echo "<p>Recommended: $row[recommended]</p>";
		echo "<p>Description: $row[description] </p> "; 
        echo "<td></td>";
        echo "<p><a href='reviews.php?place=$row[ID]'>Write a review</a></p>";
        echo "<p><a href='showreviews.php?place=$row[ID]'>View Reviews</a></p>";
        echo "<p><a href='recommend.php?PlaceID=$row[ID]'>Recommend this place</a></p><br><br>";
    
		
		$row= $results->fetch();
	}
    
}
   
?>   
    
    
            
        </div>
    
    </body>

    
</html>
