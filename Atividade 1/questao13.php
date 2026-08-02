<!--limitadores no código: 

estado e cidade não permitem q seja inserido no input números, aceita somente letras

a data mínima para cadastro é 01/01/1970 e a data máxima é 12/12/2030 (N consegue alterar para q impedisse de datas
antes ou depois dessas aparecessem, pq esse modelo de formulário é padrão do html 5, assim como a mensagem "O valor deve ser entre 12/12/2030 ou anterior", q aparece qnd é inserido uma data "errada" no campo de data de nascimento.

n é possível enviar um email q n contenha o símbolo "@" e q n contenha nenhum texto após o msm, justamente para evitar q caracteres errados sejam enviados no lugar de um endereço de email "real".

optei por ignorar customização, dessa vez...
-->


<?php


$dados = null;
$erroCidade = "";
$erroEstado = "";
$erroNascimento = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cidadeInput = trim($_POST["cidade"] ?? "");
    $estadoInput = trim($_POST["estado"] ?? "");
    $nascimentoInput = $_POST["nascimento"] ?? "";

    $valido = true;

    // Validação Data de Nascimento no PHP
    if ($nascimentoInput < "1970-01-01" || $nascimentoInput > "2030-12-12") {
        $erroNascimento = "A data deve estar entre 01/01/1970 e 12/12/2030.";
        $valido = false;
    }

    // Validação Cidade no PHP
    if (!preg_match("/^[a-zA-Zà-úÀ-Ú\s]+$/u", $cidadeInput)) {
        $erroCidade = "O campo Cidade deve conter apenas letras.";
        $valido = false;
    }

    // Validação Estado no PHP
    if (!preg_match("/^[a-zA-Zà-úÀ-Ú\s]+$/u", $estadoInput)) {
        $erroEstado = "O campo Estado deve conter apenas letras.";
        $valido = false;
    }

    if ($valido) {
        $dados = [
            "nome"        => htmlspecialchars($_POST["nome"] ?? ""),
            "email"       => htmlspecialchars($_POST["email"] ?? ""),
            "telefone"    => htmlspecialchars($_POST["telefone"] ?? ""),
            "nascimento"  => htmlspecialchars($nascimentoInput),
            "cidade"      => htmlspecialchars($cidadeInput),
            "estado"      => htmlspecialchars($estadoInput),
            "sexo"        => htmlspecialchars($_POST["sexo"] ?? ""),
            "curso"       => htmlspecialchars($_POST["curso"] ?? ""),
            "observacoes" => nl2br(htmlspecialchars($_POST["observacoes"] ?? ""))
        ];
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Cartão de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .campo {
            margin-bottom: 12px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 4px;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"], select, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .erro {
            color: red;
            font-size: 0.9em;
            margin-top: 4px;
        }
        .card {
            border: 2px solid #2c3e50;
            border-radius: 10px;
            padding: 20px;
            background-color: #ecf0f1;
            margin-top: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 8px;
        }
        .card p {
            margin: 8px 0;
        }
    </style>

</head>

<body>



    <h2>Formulário de Cadastro</h2>

    <form method="POST" action="">
        <div class="campo">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="campo">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="campo">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
        </div>

        <div class="campo">
            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" min="1970-01-01" max="2030-12-12" required>
            <?php if ($erroNascimento): ?>
                <div class="erro"><?= $erroNascimento ?></div>
            <?php endif; ?>
        </div>

        <div class="campo">
            <label for="cidade">Cidade:</label>
            <input 
                type="text" 
                id="cidade" 
                name="cidade" 
                pattern="[A-Za-zà-úÀ-Ú\s]+" 
                oninput="this.value = this.value.replace(/[^A-Za-zà-úÀ-Ú\s]/g, '')"
                title="Apenas letras e espaços são permitidos" 
                required
            >
            <?php if ($erroCidade): ?>
                <div class="erro"><?= $erroCidade ?></div>
            <?php endif; ?>
        </div>

        <div class="campo">
            <label for="estado">Estado:</label>
            <input 
                type="text" 
                id="estado" 
                name="estado" 
                maxlength="2" 
                placeholder="Ex: PR" 
                pattern="[A-Za-zà-úÀ-Ú\s]+" 
                oninput="this.value = this.value.replace(/[^A-Za-zà-úÀ-Ú\s]/g, '')"
                title="Apenas letras e espaços são permitidos" 
                required
            >
            <?php if ($erroEstado): ?>
                <div class="erro"><?= $erroEstado ?></div>
            <?php endif; ?>
        </div>

        <div class="campo">
            <label>Sexo:</label>
            <input type="radio" id="masculino" name="sexo" value="Masculino" required>
            <label for="masculino" style="display:inline;">Masculino</label>
            
            <input type="radio" id="feminino" name="sexo" value="Feminino">
            <label for="feminino" style="display:inline;">Feminino</label>
            
            <input type="radio" id="outro" name="sexo" value="Outro">
            <label for="outro" style="display:inline;">Outro</label>
        </div>

        <div class="campo">
            <label for="curso">Curso:</label>
            <select id="curso" name="curso" required>
                <option value="">Selecione...</option>
                <option value="Engenharia de Software">Engenharia de Software</option>
                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                <option value="Ciência da Computação">Ciência da Computação</option>
            </select>
        </div>

        <div class="campo">
            <label for="observacoes">Observações:</label>
            <textarea id="observacoes" name="observacoes" rows="4"></textarea>
        </div>

        <button type="submit">Cadastrar</button>
    </form>

    <?php if ($dados): ?>
        <div class="card">
            <h3>Cartão de Cadastro</h3>


            <p><strong>Nome:</strong> <?= $dados['nome'] ?></p>
            <p><strong>E-mail:</strong> <?= $dados['email'] ?></p>
            <p><strong>Telefone:</strong> <?= $dados['telefone'] ?></p>
            <p><strong>Data de Nascimento:</strong> <?= date('d/m/Y', strtotime($dados['nascimento'])) ?></p>
            <p><strong>Localidade:</strong> <?= $dados['cidade'] ?> - <?= strtoupper($dados['estado']) ?></p>
            <p><strong>Sexo:</strong> <?= $dados['sexo'] ?></p>
            <p><strong>Curso:</strong> <?= $dados['curso'] ?></p>
            <p><strong>Observações:</strong><br><?= $dados['observacoes'] ?></p>
        </div>
    <?php endif; ?>



</body>

</html>