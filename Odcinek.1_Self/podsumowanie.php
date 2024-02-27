<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $paczek=$_POST["paczki"];
    $grzebien=$_POST["grzebien"];
    $paczek=$paczek*0.99;
    $grzebien=$grzebien*1.29;
    $wynik=$paczek+$grzebien;
    ?>

<h1>Podsumowanie zamówienia</h1>
    <table>
    <tr>
    <td>Pączek (0.99PLN/szt)</td>
    <td>
        <?php
        echo $paczek;
        ?>
    </td>
  </tr>
  <tr>
    <td>Grzebień (1.29PLN/szt)</td>
    <td>
        <?php
        echo $grzebien;
        ?>
    </td>
  </tr>
  <tr>
    <td>SUMA</td>
    <td>
        <?php
        echo $wynik." PLN";
        ?>
    </td>
  </tr>
    </table>
    <br><br>
<a href="index.php">Powrót</a>
</body>
</html>
