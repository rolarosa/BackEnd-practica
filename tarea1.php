<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarea 1</title>
</head>
<body>
    <?php
// ejercicio 1
echo "Hola mundo!!";
?>

<?php
//ejercicio 2
$precio1 = 10;
$precio2 = 20;

$suma = $precio1 + $precio2;
echo "el resultado es " . $suma;
?>

<?php
//Ejercicio 3
echo "1 2 3 4 5 6 7 8 9 10";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <?php
    //Ejercicio 4
    echo "Hola mundo!!";
    ?>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
</head>
<body>
    <?php
    //Ejercicio 5
    $ruta = " https://lanoticia.com/wp-content/uploads/2021/07/AdobeStock_280800797-scaled.jpeg ";
    ?>
    <img src = " <?php echo $ruta; ?> ">
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 6</title>
</head>
<body>
    <select>
    <?php
    //Ejercicio 6
    echo "<br/>";
    echo "Hecho con for <br/>";
       
    for($i = 1;$i<=10;$i++) {
    
    echo '<option value="'.$i.'"> ' . $i . ' </option>'
    ;}
    
?>
 </select>
</body>
</html>







    
</body>
</html>