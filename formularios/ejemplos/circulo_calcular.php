<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$radio = $_GET['radio'];
$area=3.1416 * pow($radio, 2);
echo "Area: " . $area;
?>


</body>
</html>