<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract classes</title>
</head>
<body>
    <?php

        require('Product.php');

        $product = new Product();
        $product->save();
        echo '<br>';

        
        require('User.php');

        $user = new User();
        $user->save();
        echo '<br>';



    ?>
</body>
</html>