<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
for ($i = 1; $i <= 5; $i++): ?>
<button><?php echo 1; ?>
</button>
<?php endfor; ?> <br/>
    <?php for ($k = 1; $k < 4; $k++):?>
        <button><?php echo 1?></button>
        <?php for ($j = 1; $j <= 4; $j++):?>
            <button><?php echo 0; ?></button>
            <?php endfor; ?><br/>
        <?php for ($m = 1; $m < 4; $m++): ?>
            <button><?php echo 1 ?></button>
            <?php endfor;?>
        <br/>
        <?php endfor; ?>
</body>
</html>