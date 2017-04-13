<!Doctype html>

<html>

    <head></head>
    
    
    <body>
    
        
        <?php
            session_start();
           session_destroy();
            
            header("Location: index.php"); // Redirecting to home page
            
        ?>
        
        
    </body>
    
</html>