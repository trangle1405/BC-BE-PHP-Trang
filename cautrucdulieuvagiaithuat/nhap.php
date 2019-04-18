
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Nhap so</h1>
<form method="post">
    <input type="text" name="add">
    <input type="submit" value="Translate">
</form>
<?php
function lessThan10($number)
{
    switch ($number[strlen($number) - 1]) {
        case 1:
            return "one";
            break;
        case 2:
            return "two";
            break;
        case 3:
            return "three";
            break;
        case 4:
            return "four";
            break;
        case 5:
            return "five";
            break;
        case 6:
            return "six";
            break;
        case 7:
            return "seven";
            break;
        case 8:
            return "eight";
            break;
        case 9:
            return "nine";
            break;
        default;
            return "out ability";
            break;
    }
}
function during10to19($number)
{
    switch ($number[strlen($number) - 1]) {
        case 0 :
            return "ten";
            break;
        case 1:
            return "eleven";
            break;
        case 2:
            return "twelve";
            break;
        case 3:
            return "thirteen";
            break;
        case 4:
            return "fourteen";
            break;
        case 5:
            return "fifteen";
            break;
        case 6:
            return "sixteen";
            break;
        case 7:
            return "seventeen";
            break;
        case 8:
            return "eighteen";
            break;
        case 9:
            return "nineteen";
            break;
    }
}
function during20to90($number)
{
    switch ($number[strlen($number) - 2]) {
        case 2:
            return "twenty";
            break;
        case 3:
            return "thirty";
            break;
        case 4:
            return "forty";
            break;
        case 5:
            return "fifty";
            break;
        case 6:
            return "sixty";
            break;
        case 7:
            return "seventy";
            break;
        case 8:
            return "eighty";
            break;
        case 9:
            return "ninety";
            break;
    }
}
function during100to900($number)
{
    switch ($number[strlen($number) - 3]) {
        case 1:
            return "one  hundred";
            break;
        case 2 :
            return "two hundred";
            break;
        case 3 :
            return "three hundred";
            break;
        case 4 :
            return "four hundred";
            break;
        case 5 :
            return "five hundred";
            break;
        case 6 :
            return "six hundred";
            break;
        case 7 :
            return "seven hundred";
            break;
        case 8 :
            return "eight hundred";
            break;
        case 9 :
            return "nine hundred";
            break;
    }
}
function during1000to900($number)
{
    switch ($number[strlen($number) - 4]) {
        case 1 :
            return "one thousand";
            break;
        case 2:
            return "two thousand";
            break;
        case 3:
            return "three thousand";
            break;
        case 4:
            return "four thousand";
            break;
        case 5:
            return "five thousand";
            break;
        case 6:
            return "six thousand";
            break;
        case 7:
            return "seven thousand";
            break;
        case 8:
            return "eight thousand";
            break;
        case 9:
            return "nine thousand";
            break;
    }
}
function twoNumber($number)
{
    if ($number % 10 == 0) {
        return during20to90($number);
    } else if ($number >= 10 && $number < 20) {
        return during10to19($number);
    } else {
        return during20to90($number) . " " . lessThan10($number);
    }
}
function threeHundred($number)
{
    if ($number % 100 == 0) {
        return during100to900($number);
    } else if ($number[strlen($number) - 2] == 0) {
        return during100to900($number) . " " . lessThan10($number[strlen($number) - 1]);
    } else {
        return during100to900($number) . " and " . twoNumber($number[strlen($number) - 2] . $number[strlen($number) - 1]);
    }
}
function fourNumber($number)
{
    if ($number % 1000 == 0) {
        return during1000to900($number);
    }
    else if ($number[strlen($number) - 3] == 0) {
        return during1000to900($number) . " and " . twoNumber($number[strlen($number) - 2] . $number[strlen($number) - 1]);
    }
    else if ($number[strlen($number) - 2] == 0 && $number[strlen($number) - 3] == 0) {
        return during1000to900($number)." and ".lessThan10($number[strlen($number)-1]);
    }
    else{
        return during1000to900($number)." and ".threeHundred($number[strlen($number)-3].$number[strlen($number)-2].$number[strlen($number)-1]);
    }
}
function changenumbertoleter($number)
{
    if (strlen($number) > 5) {
        echo "out of ability";
    }
    if(strlen($number)==4){
        echo fourNumber($number);
    }
    if (strlen($number) == 3) {
        echo threeHundred($number);
    }
    if (strlen($number) == 2) {
        echo twoNumber($number);
    }
    if (strlen($number) == 1) {
        echo lessThan10($number);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["add"];
    changenumbertoleter($number);
}
?>
</body>
</html>