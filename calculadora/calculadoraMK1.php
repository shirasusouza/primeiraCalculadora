<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha 1º Calculadora</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section id="calculadora">
    <h1>Calculadora</h1>
    <form method="POST" >
    <p>
        Informe 1º número: <input type="text" name="numero1">
        Informe 2º número: <input type="text" name="numero2">
    </p>
       <br>
    <p>escolha a operação a ser realizada </p>
<p>    <input id="seletor" type="radio" name="oper" value=01>Divisão
       <input id="seletor" type="radio" name="oper" value=02>Multiplicação
       <input id="seletor" type="radio" name="oper" value=03>Soma
       <input id="seletor" type="radio" name="oper" value=04>Subtração
</p>
       <br>
       <input id="enviar" type="submit">
    </form>
    <h2>O resultado é :</h2>
    <?php
    
    //divisão

    while($_POST["oper"]==1)
    {
      $x=$_POST["numero1"]/$_POST["numero2"];  
        echo "<p>$x</p>";
      break;    
    }

    //multiplicação
    while($_POST["oper"]==2)
    {
      $x=$_POST["numero1"]*$_POST["numero2"];  
      echo "<p>$x</p>";
      break;    
    }
    //soma
    while($_POST["oper"]==3)
    {
        $x=$_POST["numero1"]+$_POST["numero2"];  
        echo "<p>$x</p>";
      break;    
    }
    //subtração
    while($_POST["oper"]==4)
    {
        $x=$_POST["numero1"]-$_POST["numero2"];  
        echo "<p>$x</p>";
      break;   
        
        //by Silas Souza
        
    }
    ?>
</section>
</body>
</html>
