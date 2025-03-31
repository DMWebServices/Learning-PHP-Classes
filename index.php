<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnning PHP Classes</title>

    <!-- Reset -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- Main --> 
     <link rel="stylesheet" href="css/main.css">
</head>
<body>

   <?php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);

    require_once '/Classes/Person.php';

    $person1 = new Person("Big", "Green" );
    echo $person1->isHuman;

    ?>

</body>
</html>
    


