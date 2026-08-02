<!DOCTYPE html>

<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>



<body>
    <h2>Calculadora</h2>

    <form method="POST" action="">
        <label>Número 1:</label><br>
        <input type="number" step="any" name="num1" required><br><br>

        <label>Número 2:</label><br>
        <input type="number" step="any" name="num2" required><br><br>

        <input type="submit" name="operacao" value="Somar">
        <input type="submit" name="operacao" value="Subtrair">
        <input type="submit" name="operacao" value="Multiplicar">
        <input type="submit" name="operacao" value="Dividir">
    </form>

    <br>




    <?php

    if (isset($_POST['operacao']) && isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = null;
        $erro = "";

        switch ($operacao) {
            case 'Somar':
                $resultado = $num1 + $num2;
                break;
            case 'Subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'Multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'Dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $erro = "Erro: Divisão por zero não é permitida!";
                }
                break;
        }



        if ($erro != "") {
            echo "<strong>" . htmlspecialchars($erro) . "</strong>";
        } elseif ($resultado !== null) {
            echo "<strong>Resultado: " . htmlspecialchars($resultado) . "</strong>";
        }
    }
    ?>


</body>

</html>

<!--me perdi mt e n entendi direito como faz essa porcaria mas pelo menos deu td certo. N entendi pq eu tô tendo problemas com o link q o terminal do vscode me disponiviliza, tive q pesquisar no gemini no código passado e nesse a url certa do meu server, o terminal fica dando uma url errada eu n entendi pq acontece isso, aqui no meu PC o link q funcionou foi o "http://localhost:8000/Atividade%201/questao12.php"-->