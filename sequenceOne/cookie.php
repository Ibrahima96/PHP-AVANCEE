<!DOCTYPE html>

<?php  

$nomCookie = "usuario";
$userCookie="Birame Diagne";
$setcookie = setcookie($nomCookie, $userCookie, time() + 3600);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie Doc</title>
</head>
<body>
    <?php $retVal = isset($userCookie) ? "bonjour {$userCookie}" : "nom defini" ;?>
    <h1> <?php echo $retVal; ?> </h1>
</body>
</html>