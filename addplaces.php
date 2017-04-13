<!Doctype html>
  
<html>
     <?php
        session_start();
        if(!isset ($_SESSION["gatekeeper"]))
        {
            echo "Please <a href='index.php'>LOGIN</a> to access...";
        }
        else
        {
           
    ?>
<head>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>TripsWiki</title>
    
</head>

    <body background="images/travel3.jpg" opacity="0.5;">
        
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

            <div class="col-sm-3">
                
            </div>
          
            <fieldset>
                <legend>Add a new place details:</legend>
                <br>
                <form method="post" action="addnewplaces.php">
                    Name: <input type="text" name="location"><br>
                    <br>
                    Type:<select name="type" id="type">
                          <option value="Hotel">Hotel</option>
                          <option value="City">City</option>
                          <option value="Historical Site">Historical Site</option>
                          <option value="Bar">Bar</option>
                          <option value="Restaurant">Restaurant</option>
                          <option value="Beach">Beach</option>
                          <option value="Mountain">Mountain</option>
                    </select><br>
                    <br>
                    Description:<input type="text" name="description" maxlength="500"> <br>
                    <br>
                    
                    Country: <input type="text" name="country"><br>
                    <br>
                    
                    Region: <input type="text" name="region"><br>
                    <br>
                    
                    Recommend: <input type="text" name="recommend"><br>
                    <br>
                    <input type="submit" value="Add a place!" />
                </form>
            </fieldset>
           
            
        </div>

        
    </body>
    <?php
    }
    ?>

</html>