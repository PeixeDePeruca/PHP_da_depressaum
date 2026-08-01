<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>



    <h2>Calculadora de IMC</h2>

    <form method="POST" action="">
        <label>Peso (kg):</label><br>
        <input type="number" step="0.1" name="peso" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>

        <input type="submit" value="Calcular IMC"><br><br>
    </form>

    <?php


    if (isset($_POST["peso"]) && isset($_POST["altura"])) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2, ',', '.');


            echo "Seu IMC é: " . $imcFormatado;
        } else {


            echo "Por favor, insira uma altura válida! ";
        }
    }
    ?>

</body>
</html>

<!--LEMBRETE PRA TESTAR ESSA PORCARIA Q DEMOROU FAZER (APERTA F1>>>>>>ESCREVA "SIMPLE" DAÍ ELE JÁ VAI PUXAR O RESTO [SIMPLE BRROSER: SHOW]  CLICA NESSA DROGA>>>>DAÍ RODA O CÓDIGO C:\php\php.exe -S localhost:8000 [pelo menos na minha máquina local] e então pega o link doo terminal e cola nesse tal simples browser-->