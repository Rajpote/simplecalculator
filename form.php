<?php
@$value = $_GET['result'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calcu.php" method="post">
        <input type="number" name="num1" placeholder="Enter your 1st number"><br>
        <input type="number" name="num2" placeholder="Enter your 2nd number"><br>
        
        <input type="submit" name="cal" value="+">
        <input type="submit" name="cal" value="-">
        <input type="submit" name="cal" value="*">
        <input type="submit" name="cal" value="/"><br>
        <input type="number" name="result" id="result " placeholder="<?php echo $value?>"><br>
    </form>
</body>
</html>