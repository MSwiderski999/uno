<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Generator</title>
</head>
<body>
    <?php
    include("selection.php");
    ?>
    <form method="post">
        <label>Select color</label><br>
        Blue<input type="radio" name="color" value="blue">
        Green<input type="radio" name="color" value="green">
        Red<input type="radio" name="color" value="red">
        Yellow<input type="radio" name="color" value="yellow">
    </form>
</body>
</html>