<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula11-imc-solucao</title>
    </head>
    <body>

        <h1>Cálculo de IMC</h1>

        <p>Entre com o peso e altura:</p>

        <form action="">
            Peso em kilogramas: <input name="peso">
            <br>
            Altura em metros: <input name="altura">
            <br>
            <button>Calcular</button>
        </form>

        <?php 
        if( isset($_GET['peso']) && isset($_GET['altura']) ) {
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];
            
            $imc = $peso / ($altura * $altura);

            if($imc < 18.5) $msg = "Abaixo do peso normal!";
            else if ($imc < 25) $msg = "Peso normal!";
            else if ($imc < 30) $msg = "Excesso de peso!";
            else if ($imc < 35) $msg = "Obesidade classe 1!";
            else if ($imc < 40) $msg = "Obesidade classe 2!";
            else $msg = "Obesidade classe 3!";
            
            echo "<p>Seu IMC é $imc</p>";
            echo "<p>Sua classificação é: $msg</p>";
        }
        ?>

    </body>
</html>