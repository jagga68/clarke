 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Inheritance</title>
 </head>
 <body>
     <?php
        require('PremiumCheckingAccount.php');
        $account = new PremiumCheckingAccount();
        
        echo 'Minimum balance: ' . $account->minimumBalance . '<br>';
        $account->deposit(25);
        $account->withdraw(12);
        $account->transfer(15);

     ?>
 </body>
 </html>