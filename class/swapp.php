<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swap</title>
</head>
<body>
    <?php
   $num_one=8;
   $num_two=7;
   $num_three=6;
    echo "<b>original values:</b>
        num_one = $num_one
        num_two = $num_two
        num_three = $num_three
                <br>";
           
    $temp = $num_one;
    $num_one = $num_three;
    $num_three = $num_two;
    $num_two = $temp;
    echo "<br>swapped values:</br>
        num-one = $num_one<br>
        num_two = $num_two<br>
        num_three= $num_three<br>
                <br>";
    $prod = $num_one * $num_two * $num_three;
    echo "$num_one * $num_two * $num_three = $prod<br>";
    $ave = $prod / 3;
    echo "<br>the <b>average <b>is : $ave";
    ?>
</body>
</html>