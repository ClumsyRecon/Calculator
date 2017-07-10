<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">

    </script>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="number" name="num1" value="0">
      <select name="operator">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="divide">/</option>
        <option value="multiply">*</option>
      </select>
      <input type="number" name="num2" value="0">
      <input type="submit" value="=">
      <span>
        <?php
        if($_POST != null) {
          $op = $_POST['operator'];
          if($op === 'plus') {
            echo $result = $_POST['num1'] + $_POST['num2'];
          }
          if ($op === 'minus') {
            echo $result = $_POST['num1'] - $_POST['num2'];
          }
          if ($op === 'divide') {
            echo $result = round($_POST['num1'] / $_POST['num2'], 2);
          }
          if ($op === 'multiply') {
            echo $result = $_POST['num1'] * $_POST['num2'];
          }
        } else {
          echo '0';
        }
        ?>
      </span>
    </form>
  </body>
</html>
