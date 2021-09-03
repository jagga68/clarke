<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract methods</title>
</head>
<body>
    <?php

        require('Cylinder.php');
        require('Sphere.php');

        $cylinder = new Cylinder(['radius' => 5, 'height' => 10]);
        $cylinderVolume = $cylinder->volume();

        print_r($cylinderVolume); echo '<br>';

        $sphere = new Sphere(['radius' => 5]);
        $sphereVolume = $sphere->volume();

        print_r($sphereVolume); echo '<br>';


    ?>
</body>
</html>