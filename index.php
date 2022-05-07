<?php
$num1 =0;
$num2= 0;
$resultado=0;
$calcular='sumar';

If ( isset ($_GET['num1'],$_GET['num2'],$_GET['calcular'])) {
     $num1= $_GET['num1'];
    $num2= $_GET['num2'];
    $calcular= $_GET['calcular'];

    switch ($calcular) {
        case 'sumar':
            $resultado= $num1 + $num2;
            break;
        
        case '$restar':
            $resultado= $num1 - $num2;
            break;

        case 'multiplicar':
            $resultado= $num1 * $num2;
          break;    
        case 'dividir':
            $resultado= $num1 / $num2;
            break;  
    } 
}

?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form >
        <h3>Primer número</h3> <br>
        <input type="number" name="num1" value=<?= $num1 ?> required /> <br>
        <h3>Segundo número</h3> <br>
        <input type="number" name="num2" value=<?= $num2 ?> required /> <br>

       <select name="calcular">
           <option value="sumar" <?= ($calcular=='sumar')? 'Selected': ''; ?> >Sumar</option>
           <option value="restar" <?= ($calcular=='restar')? 'Selected': ''; ?>>Restar</option>
           <option value="multiplicar" <?= ($calcular=='multiplicar')? 'Selected': ''; ?>>Multiplicar</option>
           <option value="dividir" <?= ($calcular=='dividir') ? 'Selected': ''; ?>>Dividir</option>
       </select>
       <br> <br>
       <input type="submit" value="Calcular"> 
       <br><br>
       <p> El resultado es <?= $resultado ?> </p>
    </form> 
    
</body>
</html>