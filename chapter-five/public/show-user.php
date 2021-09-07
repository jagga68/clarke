<?php

use App\Models\UserRepository;

require_once './../vendor/autoload.php';

$user = null;

if ($id = $_GET['id'] ?? false) {
    
    $repo = new UserRepository();
    $user = $repo->findById($id);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe User</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <?php if ($user): ?>
            <h3><?= "Name: {$user->getName()}, Email: {$user->getEmail()}"; ?></h3>
        <?php else: ?>
             <h3>User cannot be found with this id.</h3>
        <?php endif; ?> 
    </div>
</body>
</html>