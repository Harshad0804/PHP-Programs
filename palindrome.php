<!DOCTYPE html> 
<html> 
<head> 
    <title>Palindrome Checker</title> 
</head> 
<link rel="stylesheet" href="style.css">
<body> 
    <form method="post">
        <h3>ENTER YOUR STRING</h3> 
        <input type="text" name="string" required> 
        <input type="submit" value="Check Palindrome"> 
    </form> 
 
    <?php 
    if (isset($_POST['string'])) { 
        $string = $_POST['string']; 
        $rev = strrev($string); 
        if (strtolower($string) == strtolower($rev)) { 
            echo "$string is a Palindrome"; 
        } else { 
            echo "$string is Not a Palindrome"; 
        } 
    } 
    ?> 
</body> 
</html> 