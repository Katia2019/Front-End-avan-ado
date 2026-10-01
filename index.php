
<?php
echo "Olá, mundo!<br><hr>";


$nome = "Katia";
$idade = 41;


echo "Meu nome é $nome e tenho $idade anos.<br><hr>";

$x = 15;
$y = 20;
$soma = $x + $y;

echo "$soma<br><hr>";

$a = 15;
$b = 30;

echo "<br> A soma e: ".$a + $b;
echo "<br> A subtracao e: ".$a - $b;
echo "<br> A multi e: ".$a * $b;
echo "<br> A div e: ".$a / $b;
echo "<br><hr>";

$cidade = "Uberlandia";
$estado = "MG";

echo "Minha cidade é $cidade localizada no estado de $estado .<br><hr>";

$numero = -2;
if($numero > 0)
    {
        echo "esse numero é positivo";
    }
    else if($numero < 0)
        {
            echo "esse numero é negativo";
        }
    else {
        echo"esse numero é igual a zero";
    }
echo "<br><hr>";

$idade = 17;
if($idade > 18)
    {
        echo "Maior de idade";
    }
    else {
        echo"Menor de idade";
    }
echo "<br><hr>";


for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br><hr>";

$numero = 10;

while ($numero >= 1) {
    echo $numero . "<br>";
    $numero--;
}
echo "<br><hr>";

$nomes = ["Katia", "Gustavo", "Rafa", "Renan", "Clecia"];

echo "Primeiro nome: " . $nomes[0] . "\n";
echo "Último nome: " . end($nomes) . "\n";

echo "<br><hr>";

$comidas = ["arroz", "feijao", "carne", "farofa"];

for ($i = 0; $i < 4; $i++)
    {
        echo "Comida: $comidas[$i]<br>";
    }

foreach ($comidas as $comida)
    {
        echo "Comida ForEach: $comida <br>";
    }    
echo "<br><hr>";

function dobro($numero) {
    return $numero * 2;
}
$valor = 10;
$resultado = dobro($valor);
echo "O dobro de $valor é $resultado.";
echo "<br><hr>";

$nota1 = 7.5;
$nota2 = 5.0;
$nota3 = 6.5;
$media = ($nota1 + $nota2 + $nota3) / 3;
if ($media >= 6) {
    echo "A média está acima ou igual a 6.";
} else {
    echo "A média está abaixo de 6.";
}
echo "<br><hr>";

$numero = 3; 
echo "Tabuada do número $numero:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
echo "<br><hr>";

$precos = [19.90, 45.00, 99.99, 5.50, 120.00, 32.40];
$somaTotal = array_sum($precos);
echo "O valor total da soma é: R$ " . number_format($somaTotal, 2, ',', '.');
echo "<br><hr>";

function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } elseif ($num2 > $num1) {
        return $num2;
    } else {
        return "Os valores são iguais.";
    }
}
echo maiorNumero(10, 5);  // Retorna 10
echo "\n";
echo maiorNumero(3, 8);   // Retorna 8
echo "\n";
echo maiorNumero(4, 4);   // Retorna "Os valores são iguais."
echo "<br><hr>";


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Boas-Vindas</title>
</head>
<body>

    <h2>Formulário de Identificação</h2>
    
    <form method="POST" action="">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim($_POST['nome']);      
        $nomeSeguro = htmlspecialchars($nome);
                echo "<h3>Bem-vindo, $nomeSeguro!</h3>";
    }
    ?>

</body>
</html>

<br><hr>    

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select, button { padding: 8px; font-size: 16px; }
        .resultado { margin-top: 20px; padding: 10px; background-color: #f0f0f0; border-left: 5px solid #007BFF; display: inline-block; }
        .erro { color: red; background-color: #ffe6e6; border-left: 5px solid red; }
    </style>
</head>
<body>

    <h2>Calculadora PHP</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label for="num1">Número 1:</label>
            <input type="number" step="any" name="num1" id="num1" required value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>">
        </div>

        <div class="form-group">
            <label for="operacao">Operação:</label>
            <select name="operacao" id="operacao" required>
                <option value="soma" <?php echo (isset($_POST['operacao']) && $_POST['operacao'] == 'soma') ? 'selected' : ''; ?>>Soma (+)</option>
                <option value="subtracao" <?php echo (isset($_POST['operacao']) && $_POST['operacao'] == 'subtracao') ? 'selected' : ''; ?>>Subtração (-)</option>
                <option value="multiplicacao" <?php echo (isset($_POST['operacao']) && $_POST['operacao'] == 'multiplicacao') ? 'selected' : ''; ?>>Multiplicação (*)</option>
                <option value="divisao" <?php echo (isset($_POST['operacao']) && $_POST['operacao'] == 'divisao') ? 'selected' : ''; ?>>Divisão (/)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="num2">Número 2:</label>
            <input type="number" step="any" name="num2" id="num2" required value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>">
        </div>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
        
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
        $operacao = $_POST['operacao'];
        
        $resultado = "";
        $erro = false;

        if ($num1 === false || $num2 === false) {
            $resultado = "Por favor, insira valores numéricos válidos.";
            $erro = true;
        } else {
            switch ($operacao) {
                case 'soma':
                    $resultado = $num1 + $num2;
                    $simbolo = "+";
                    break;
                case 'subtracao':
                    $resultado = $num1 - $num2;
                    $simbolo = "-";
                    break;
                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    $simbolo = "*";
                    break;
                case 'divisao':
                    if ($num2 == 0) {
                        $resultado = "Erro: Não é possível dividir por zero.";
                        $erro = true;
                    } else {
                        $resultado = $num1 / $num2;
                        $simbolo = "/";
                    }
                    break;
                default:
                    $resultado = "Operação inválida.";
                    $erro = true;
            }
        }

        if ($erro) {
            echo "<div class='resultado erro'><strong>$resultado</strong></div>";
        } else {
            echo "<div class='resultado'>Resultado: <strong>$num1 $simbolo $num2 = $resultado</strong></div>";
        }
    }
    ?>

</body>
</html>

<br><hr> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Idade</title>
</head>
<body>

    <h2>Cadastro de Idade</h2>
    
    <form method="POST" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label><br>
        <input type="number" id="ano_nascimento" name="ano_nascimento" min="1900" max="<?php echo date('Y'); ?>" required><br><br>

        <input type="submit" value="Calcular Idade">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $ano_nascimento = intval($_POST['ano_nascimento']);
        
        $ano_atual = date('Y');
        
        $idade = $ano_atual - $ano_nascimento;
        
        $maioridade = ($idade >= 18) ? "possui 18 anos ou mais" : "não possui 18 anos ou mais";
        
        echo "<h3>Resultado:</h3>";
        echo "<p>Olá, <strong>$nome</strong>! Sua idade aproximada é <strong>$idade anos</strong> e você <strong>$maioridade</strong>.</p>";
    }
    ?>

</body>
</html>

<br><hr> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .destaque {
            background-color: #e2f0d9;
            font-weight: bold;
        }
        .total {
            font-weight: bold;
            background-color: #f1f1f1;
        }
        .info-box {
            width: 50%;
            padding: 10px;
            background-color: #fff;
            border-left: 5px solid #28a745;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <h2>Lista de Produtos Cadastrados</h2>

    <?php
    
    $produtos = [
        ["nome" => "Notebook Dell", "preco" => 4500.00],
        ["nome" => "Smartphone Samsung", "preco" => 2500.00],
        ["nome" => "Monitor Gamer 24'", "preco" => 1200.00],
        ["nome" => "Teclado Mecânico", "preco" => 350.00],
        ["nome" => "Mouse Sem Fio", "preco" => 150.00]
    ];
 
    $valorTotal = 0;
    $maiorPreco = 0;
    $produtoMaisCaro = "";

    foreach ($produtos as $produto) {
        $valorTotal += $produto["preco"];
        
        if ($produto["preco"] > $maiorPreco) {
            $maiorPreco = $produto["preco"];
            $produtoMaisCaro = $produto["nome"];
        }
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <?php 
                $classeDestaque = ($produto["nome"] === $produtoMaisCaro) ? 'class="destaque"' : ''; 
                ?>
                <tr <?php echo $classeDestaque; ?>>
                    <td><?php echo $produto["nome"]; ?></td>
                    <td>R$ <?php echo number_format($produto["preco"], 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            
            <tr class="total">
                <td>Valor Total</td>
                <td>R$ <?php echo number_format($valorTotal, 2, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

    <div class="info-box">
        <p><strong>Produto mais caro:</strong> <?php echo $produtoMaisCaro; ?> (R$ <?php echo number_format($maiorPreco, 2, ',', '.'); ?>)</p>
    </div>

</body>
</html>

<br><hr> 