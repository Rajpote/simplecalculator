<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

switch ($cal) {
    case "+":
        $value = $num1 + $num2;
        break;
    case "-":
        $value = $num1 - $num2;
        break;
    case "*":
        $value = $num1 * $num2;
        break;
    case "/":
        $value = $num1 / $num2;
        break;

    default:
        $value = "error";
        break;
}

// echo "The output is " . $value;
header("location:form.php?result=$value");
?>
