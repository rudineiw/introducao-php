<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>aula11-imc</title>
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

            echo "<p>Seu IMC é $imc</p>";
            if($imc < 18.5) {
                echo "<p>Abaixo do peso normal!</p>";
            } else if ($imc < 25) {
                echo "<p>Peso normal!</p>";
            } else if ($imc < 30) {
                echo "<p>Excesso de peso!</p>";
            } else if ($imc < 35) {
                echo "<p>Obesidade classe 1!</p>";
            } else if ($imc < 40) {
                echo "<p>Obesidade classe 2!</p>";
            } else {
                echo "<p>Obesidade classe 3!</p>";
            }
        }
        ?>

    </body>
</html>