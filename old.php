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
<br>
<br>
<?php

    $marks = [
        "Ali Nisham" => [
                            'Chemistry' => 75,
                            'English' => 80,
                            'Maths' => 45,
                        ],
        "Ahmed" => [
                            'Chemistry' => 10,
                            'English' => 20,
                            'Maths' => 45,
                        ],
        "Ibrahim" => [
                            'Chemistry' => 45,
                            'English' => 70,
                            'Maths' => 45,
                        ],

           ];
    
    foreach($marks as $student => $subjects){
        foreach($subjects as $subject => $marks) {
            echo "$student scored $marks in $subject";
            echo "<br>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Application Online</title>
</head>
<body>
    <br>
    <br>
    <form action="old.php" method="GET">
        First name: <input type="text" name="fname" value="First Name">
        Last Name: <input type="text" name="flastname" value="Last Name">
        <input type="submit" value="done">
    </form>
    <?php

    if (isset($_GET["fname"]) || isset($_GET["flastname"])){
        $fname = $_GET["fname"];    
        $flastname = $_GET["flastname"];
    }



    if (isset($fname)){
        echo "Welcome $fname $flastname";
    } else {
       echo "";
    }
    ?>



</body>
</html>