<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
echo '$_SERVER';
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo '------------------------------------------------';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '$_REQUEST';
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
}
?>

</body>
</html>