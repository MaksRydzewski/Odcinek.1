<!DOCTYPE html>
<html lang="pll">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Zamówienie online</h1>

    <form action="podsumowanie.php" method="post">
        <label for="paczki">Ile pączków (0.99 PLN/szt):</label>
        <input type="text" name="paczki"><br><br>
        <label for="paczki">Ile grzebieni (1.29 PLN/szt):</label>
        <input type="text" name="grzebien"><br><br>
        <input type="submit" value="Wyślij zamówienie">
    </form>
</body>
</html>
