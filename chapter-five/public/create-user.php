<?php

use App\Models\UserRepository;

require_once './../vendor/autoload.php';

$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $userRepo = new UserRepository();
    $success = $userRepo->save($_REQUEST);
}

$timezones = DateTimeZone::listIdentifiers(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Create User</title>
</head>
<body>
    <div class="container">
        <?php if($success): ?>
            <div class="alert alert-success">
                Success! The user has been added to the database!
            </div>
        <?php endif; ?>
        <form method="post" action="create-user.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
            <label for="user_timezone" class="form-label">Timezone</label>
            <select class="form-select" aria-label="User timezone" id="user_timezone" name="user_timezone">
                <option selected>Open this select menu</option>
                <?php foreach ($timezones as $timezone): ?>
                    <option value="<?= $timezone; ?>"><?= $timezone; ?></option>
                <?php endforeach; ?>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>