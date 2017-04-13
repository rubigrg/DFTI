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
            $placeID=htmlentities($_POST["place"]);
           
    ?>
    
    <head></head>

    <body>
    
    <form method="post" action="">
          <input type="hidden" name="PlaceID" value="<?php echo $placeID ?>"> 
    </form>
    
    </body>

</html>