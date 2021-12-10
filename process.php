<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <script>
    function home(){
        window.location='index.php';
    }
</script>
<style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            width: 50%;
            border: 1px solid;
        }
    </style>
</head>
<body>
<?php
    require_once './dado.php';
    
    $min = $_POST['min'];
    $max = $_POST['max'];
    
    
    $dado1 = new dado();

    $dado1->setMinNumDado($min);
    $dado1->setMaxNumDado($max);
    
    echo '<table>';
    for ($i=1; $i <= 12; $i++) { 
        echo '
            <th>Tirada ' . $i . '</th>';
        }
    
    echo '<tr>';

    for ($i=1; $i <= 12; $i++) { 
        echo ' 
            <td> ' . $dado1->tirarDado() . '</td>';
    }
    
    echo '</tr> </table>';

    echo '<p> Min: ' . $dado1->getMinNumDado() . '</p>'; 
    echo '<p> Max: ' . $dado1->getMaxNumDado() . '</p>';

    echo "<br/><input type='submit' name='refresh' value='Refresh' onclick='window.location.reload(true);'>";
?>


<br><br><input type="button" value="Volver" onclick="home()">

</body>
</html>



