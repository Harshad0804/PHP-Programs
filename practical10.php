<!DOCTYPE html> 
<html> 
<head> 
    <title>Prime Sum Checker</title> 
</head> 
<body> 
    <form method="post"> 
        Enter first number: <input type="number" name="a" required><br> 
        Enter second number: <input type="number" name="b" required><br> 
        Enter third number: <input type="number" name="c" required><br> 
        <input type="submit" value="Check"> 
    </form> 
 
    <?php 
    function isPrime($num) { 
        if ($num < 2) return false; 
        for ($i = 2; $i <= sqrt($num); $i++) { 
            if ($num % $i == 0) return false; 
        } 
        return true; 
    } 
 
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) { 
        $sum = $_POST['a'] + $_POST['b'] + $_POST['c']; 
        echo "Sum = $sum<br>"; 
        echo isPrime($sum) ? "Sum is Prime" : "Sum is Not Prime"; 
    } 
    ?> 
</body> 
</html> 