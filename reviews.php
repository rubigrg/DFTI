<!Doctype html>

<html>
      <?php
        session_start();
        if(!isset ($_SESSION["gatekeeper"]))
        {
            echo "Please Login to <a href='index.php'>continue</a>.";
        }
        else
        {
            $placeID=htmlentities($_GET["place"]);
           
    ?>
<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>TripsWiki</title>
    
</head>

    <body background="images/review.jpg" width="">
        
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
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
               
             <span>Reviews will be approved by Admin!</span>
             <br>
             <br>
             <br>
            <fieldset>
                <legend>Review a place:</legend>
                <form method="post" action="writereviews.php">
                    <input type="hidden" name="PlaceID" value="<?php echo $placeID ?>" >
            <input type="hidden" name="PlaceName" value="">
            Review: <br><textarea type="text" name="review" rows="8" cols="25"></textarea> <br>
            <br>
            <input type="submit" value= "Submit">
            </form>
            </fieldset>
            
        </div>

    </body>
    <?php
    }
    ?>

</html>