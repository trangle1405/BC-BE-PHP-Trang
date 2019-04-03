<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  </head>
  <style type="text/css">
    .calculate {
        height: 200px;
        width: 400px;
        margin: 0;
        border: 1px #CCC solid;
        padding: 10px;
    }
</style>
  <body>
    <form action="calculate.php" method="POST">
        <div class="calculate">
      <h2>Simple Calculator</h2>
      First operand:
      <input type="number" name="firstOperand" />
      <br /><br />
      Oprator:
      <select name="calculation">
        <option value="addition">addition</option>
        <option value="subtraction">subtraction</option>
        <option value="multiplication">multiplication</option>
        <option value="division">division</option>
      </select>
      <br /><br />
      Second operand:
      <input type="number" name="secondOperand" />
      <br /><br />
      <input type="submit" value="summit">
    </div>
    </form>

  </body>
</html>
