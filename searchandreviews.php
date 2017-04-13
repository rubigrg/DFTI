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

    <body background="images/search.jpg">
        
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
           
         
            
          <fieldset>
                <legend>Enter interest type:</legend>
              <br>
              <br>

                <form method="get" action="search.php">
          Interest Type: <br>
                    <br><input type="text" name="type" placeholder="e.g. Beach, Hotel, Bar...">
                    <br>
              <br><input type="submit" value="Search!" />
          </form>
            </fieldset>
                
                
            </div>
  

        
    </body>
    <?php
    }
    ?>

</html>