

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="age" placeholder="Age" min="10" max="80">
    <br>
    <input type="number" name="distance" placeholder="distance (km)">
    <br>
    <button type="submit" name="btn_compute">Compute</button>
    
   </form>
</body>
</html>
    <?php
        include_once "fare.php"; 

            if (isset($_POST['btn_compute'])){
            $transpo = new Fare;

            $transpo->setAge($_POST['age']);
            $transpo->setDistance($_POST['distance']);
            $transpo->setFare();

            echo "Age: " . $transpo->getAge() . "years old. <br>";
            echo "Distance is " . $transpo->getDistance() . " km <br>";
            echo "The fare is " . $transpo->getFare();
        }
    ?>
   