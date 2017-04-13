<!Doctype html>

<html> 
    
<?php
    session_start();
    $pl = htmlentities($_POST["PlaceID"]);
    $rw = htmlentities($_POST["review"]);
    $un = htmlentities($_SESSION["gatekeeper"]);
    $rd = htmlentities($_POST["reviewdate"]);

    $conn = new PDO ("mysql:host=localhost;dbname=gurungr;", "gurungr", "yoocoera");

    $results = $conn->query ("INSERT INTO reviews (placeID, review, username) VALUES ($pl, '$rw', '$un')");

            echo "You've successfully added a new review! <br> <br>";
            echo "<input type='hidden' name='id' value='$id' /> ";
            echo "<input type='hidden' name='placeID' value='$pl'/> ";
            echo "<input type='hidden' name='username' value='$un'/> ";

            echo "<a href='searchandreviews.php'>Go back!!!...</a>";
        ?>
    
</html>