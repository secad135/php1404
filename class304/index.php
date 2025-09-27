<?php 
    $class304 = ["reza", "mohammad"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class304</title>
</head>
<body>
    <h1>list of students of class 304</h1>
    <ul>
    <?php foreach($class304 as $a): ?>
       <li><?= $a ?></li> 
        <?php endforeach ?>
        </ul>
</body>
</html>