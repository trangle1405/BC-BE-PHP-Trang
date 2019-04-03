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

<body>
    <form method="POST">
        <div class="calculate">
        Product Description:

            <input type="text" name="productDescription">
            <br><br>
            List Price:
            <input type="number" name="listPrice">
            <br><br>
            Discount Percent: 
            <input type="number" name="discountPercent">
            <br><br>
            <input type="submit" value="calculate">
        </div>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $listPrice = $_POST["listPrice"];
        $discountPercent = $_POST["discountPercent"];
        echo "Discount Amount: ".$listPrice*$discountPercent*0.01."<br>";
        echo "Discount Price: ".($listPrice-$listPrice*$discountPercent*0.01);
    };
    ?>
</body>

</html>