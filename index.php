<?php
$classmates = array (
    '1' => "Than Hieu Ngo - Milan",
    '2' => "Libor Pluháček",
    '3' => "Štěpán Kolarovský",
    '4' => "Jan Hladík",
    '5' => "Sorin Eni",
    '6' => "Martin Lédl",
    '7' => "Šimon Siksta",
    '8' => "Jan Šlechta",
    '9' => "Jakub Vavrů - YEAYkub",
    '10' => "Martin Kokeš"
);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>závod</h2>
<?php
for ($i = 1; $i <= 10 ; $i++) {?>
 <?= $i?> . <?=$classmates[$i]?>
 <br>

<?php }

?>

</body>
</html>