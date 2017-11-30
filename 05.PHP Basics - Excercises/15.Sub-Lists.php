<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
<ul>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']))
{
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    for ($i = 1; $i <= $num1; $i++): ?>
  <li>List <?php echo $i ?></li>
        <?php for ( $k = 1; $k <= $num2; $k++): ?>
     <ul>
         <li>Element <?php echo $i . "." . $k?></li>
     </ul>
            <?php endfor; ?>

 <?php endfor;
}
?>
</ul>
</body>
</html>