<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('comment.php');
        $comment = new Comment ("This is some text", random_int(10000,90000));
    ?>
    <p>
        <?php echo $comment->userId . ':' . $comment->text; ?>
    </p>
</body>
</html>