<?php
$op = $_POST['operator'];
if($op === 'plus') {
  echo $result = $_POST['num1'] + $_POST['num2'];
}
if ($op === 'minus') {
  echo $result = $_POST['num1'] - $_POST['num2'];
}
if ($op === 'divide') {
  echo $result = $_POST['num1'] / $_POST['num2'];
}
if ($op === 'multiply') {
  echo $result = $_POST['num1'] * $_POST['num2'];
}
?>
