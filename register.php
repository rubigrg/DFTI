<!Doctype html>

<html>

    <head></head>
    
    <body>
    
        <?php

            session_start();
    $username = htmlentities($_POST["username"]);
    $password = htmlentities($_POST["password"]);
    $confPassword = htmlentities($_POST["confPassword"]);

$conn = new PDO("mysql:host=localhost;dbname=gurungr;", "gurungr","yoocoera");

$results = $conn->query("INSERT INTO users (username, password, isadmin) VALUES ('$username', '$password', 0)");
        
        echo "User Created Successful!";
        
        // Redirect to the main menu
        header ("Location: index.php");

        ?>
        
    </body>
    
</html>