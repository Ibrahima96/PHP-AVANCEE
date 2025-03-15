<!DOCTYPE html>
<html lang="en">
    <?php    
    
    $_SESSION['name'] = 'Kamado Tanjiro';
    $_SESSION['email'] = 'kamado@tanjiro.com';

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Doc</title>
</head>
<body>
    <h1>Session Data</h1>
  <?php $myName =isset($_SESSION['name']) ? "Vous vous appellez {$_SESSION['name'] }" : "Votre nom please" ;   ?>
    
  <?php $myMail =isset($_SESSION['name']) ? "votre mail est {$_SESSION['email'] }" : "Saisir votre adress mail please" ; ?>
    <p><?php echo $myName; ?></p>
    <p><?php echo $myMail; ?></p>
    <a href="cookie.php">Go to cookie</a>
    
</body>
</html>