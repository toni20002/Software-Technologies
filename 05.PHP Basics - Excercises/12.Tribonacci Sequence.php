<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])) {
    $n = $_GET['num'];
    $a = 0;
    $b = 0;
    $c = 0;
    for ($i = 0; $i < $n; $i++)
    {
        $a++;
       for ($k = 0; $k < $n; $k++)
       { $b;
           for ($j = 0; $j < $n; $j++)
           {

           }
       }
    }
}

?>
</body>
</html>