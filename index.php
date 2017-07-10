<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="number" name="num1" value=<?php if($_POST != null) { echo $_POST['num1'];} else { echo '0';} ?>>
      <select name="operator">
        <option value="plus" <?php if($_POST != null) { if($_POST['operator'] == 'plus') { echo 'selected'; } } ?>>+</option>
        <option value="minus" <?php if($_POST != null) { if($_POST['operator'] == 'minus') { echo 'selected'; } } ?>>-</option>
        <option value="divide" <?php if($_POST != null) { if($_POST['operator'] == 'divide') { echo 'selected'; } } ?>>/</option>
        <option value="multiply" <?php if($_POST != null) { if($_POST['operator'] == 'multiply') { echo 'selected'; } } ?>>*</option>
      </select>
      <input type="number" name="num2" value=<?php if($_POST != null) { echo $_POST['num2'];} else { echo '0';} ?>>
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
