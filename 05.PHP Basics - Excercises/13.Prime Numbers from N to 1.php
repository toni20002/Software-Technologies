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
    for ($i = $n; $i > 0; $i--)
    {
        if  ($n % $i === 0)
        {
            echo $i ." its not prime fool<br/>";
        }
        else
            {
                echo $i ." its prime<br/>";
            }

    }
}
?>
</body>
</html>