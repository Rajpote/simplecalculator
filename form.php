<?php
@$value = $_GET['result'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        form{
            display: grid;
            justify-content: center;
        }
        .container{
            padding: 25px;
            margin: 100px 25px 25px 25px;
            border: 1px solid black;
        }
        .operation{
            display: flex;
            place-content: center;
            column-gap: 15px;
            margin: 10px 0;
        }
    </style>

</head>

<body>
    <form action="calcu.php" method="post">
        <div class="container">
            <div class="inputfield">
                <input type="number" name="num1" placeholder="Enter your 1st number"><br>
                <input type="number" name="num2" placeholder="Enter your 2nd number"><br>
            </div>
            <div class="operation">
                <input type="submit" name="cal" value="+">
                <input type="submit" name="cal" value="-">
                <input type="submit" name="cal" value="*">
                <input type="submit" name="cal" value="/"><br>
            </div>
            <div class="output">
                <input type="number" name="result" id="result " placeholder="<?php echo $value ?>"><br>
            </div>
        </div>
    </form>
</body>

</html>