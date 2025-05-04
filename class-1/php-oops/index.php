<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS</title>
</head>
<body>
    
    <?php 

        echo DB_HOST . '<br/>';

        echo $Admin->name . '<br/>';

        echo $Admin->getAdminName() . '<br/>';

        echo $Admin->getAdminNameAndMessage ('Hello there!') . '<br/>';

        echo $Admin->getAdminEmail() . '<br/>';

        echo Employee::getEmployeeName();

        $User = new User();
        echo $User->getUserName();

    ?>
    
    
    <?php
    
        /**
         * 1. Declaring classes and Instantiating Objects
         * 2. Access Modifiers (public, protected, private)
         * 3. Methods and Properties
         * 4. Static Methods and Properties
         * 5. Constructors and Destructors
         * 6. Inheritance
         * 
        */
    
    ?>
</body>
</html>