

<?php
        
    $id = htmlentities($_GET["id"]);

    $conn = new PDO("mysql:host=localhost;dbname=gurungr;","gurungr", "yoocoera");
    
    $results = $conn->query("UPDATE reviews SET approved=1 where id='$id'"); 
    header ("Location: admin.php");
    //echo "Review Approved Successfully!";
            
?>