<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <style type="text/css">
    .calculate {
        height: 150px;
        width: 400px;
        margin: 0;
        border: 1px #CCC solid;
        padding: 10px;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
    </style>
    <form method="POST">
        <div class="calculate">
            Inventment Amount:

            <input type="number" name="inventment">
            <br><br>
            Yearly Interest Rate:
            <input type="number" name="yearlyInterest">
            <br><br>
            Number of Years:
            <input type="number" name="numberOfTheYear">
            <br><br>
            <input type="submit" value="calculate">
        </div>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $inventment = $_POST["inventment"];
    $yearlyInterest = $_POST["yearlyInterest"];
    $numberOfTheYear = $_POST["numberOfTheYear"];
    echo $inventment + $inventment * $yearlyInterest * $numberOfTheYear;
}
?>
</body>

</html>