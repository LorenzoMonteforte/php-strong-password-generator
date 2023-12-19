<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form action="password.php">
        <label for="length">Inserisci la lunghezza della password</label>
        <input id="length" name="length" type="number">
        <select name="whichCharacters">
            <option value="0">Lettere</option>
            <option value="1">Numeri</option>
            <option value="2">Caratteri</option>
            <option value="0,1">Lettere e numeri</option>
            <option value="0,2">Lettere e caratteri</option>
            <option value="1,2">Numeri e caratteri</option>
            <option value="0,1,2">Lettere, numeri e caratteri</option>
        </select>
        <button type="submit">Genera</button>
    </form>
</body>

</html>