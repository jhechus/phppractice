<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario </title>
</head>
<body>

<form action="recibe.php" method="get" name="" id="" class="">
    <input type="text" placeholder="Nombre:" name="nombre">
    <br>

    <label for="Hombre"> Hombre </label>
    <input type="radio" name="sexo" value="hombre" id="Hombre">
    <br>

    <label for="Mujer"> Mujer </label>
    <input type="radio" name="sexo" value="hombre" id="Mujer">
    <br>

    <select name="year" id="">
        <option value="2000"> 2000 </option>
    </select>
    <br>

    <label for="terminos"> Aceptar Terminos </label>
    <input type="checkbox" name="terminos" id="terminos" value="ok">
    <br>

    <input type="submit" value="Enviar">

</form>
    
</body>
</html>