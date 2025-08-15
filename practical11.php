<!DOCTYPE html> 
<html> 
<head> 
    <title>Sum of Digits</title> 
</head> 
<body> 
    <form method="post">
        <h3>Enter a number</h3> 
        <input type="number" name="num" required> 
        <input type="submit" value="Find Sum of Digits"> 
    </form> 
 
    <?php 
    function sumOfDigits($num) { 
        $sum = 0; 
        while ($num > 0) { 
            $sum += $num % 10; 
            $num = floor($num / 10); 
        } 
        return $sum; 
    } 

    if (isset($_POST['num'])) { 
        $num = $_POST['num']; 
        echo "Sum of digits of $num is " . sumOfDigits($num); 
    } 
    ?> 
</body> 
</html> 