<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dado</title>
    
</head>
<body>

    <form action="process.php" method="post">
        <label for="min">Inserta un numero >0 </label><br>
        <input type="number" id="min" name="min" placeholders="Inserta un numero >0" /> <br> <br>
        <label for="max">Inserta un numero <=12 </label><br>
        <input type="number" id="max" name="max" placeholders="Inserta un numero <=12"/>
        <input type="submit" value="Enviar"/>
    </form>

</body>
</html>