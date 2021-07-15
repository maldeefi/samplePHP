<?php

echo "(c) ";
$v1 = "Ali";
$v2 = "Nisham";
echo $v1 . $v2;
echo "<br>";

$num1 = 100;
$num2 = 5;
echo $num1 * $num2;
?>

<form action="index.php" method="post">
    First name: <input type="text" name="fname" value="Input value here">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["fname"]; ?>

</body>
</html>