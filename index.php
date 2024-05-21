<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificador de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
        }
        label {
            font-weight: bold;
            margin-right: 5px;
        }
        input[type="text"] {
            padding: 8px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin: 10px 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Identificador de Números</h2>
        <form action="" method="post">
            <label for="numeros">Digite os números separados por vírgula:</label>
            <input type="text" name="numeros" id="numeros" required>
            <br>
            <button type="submit">Verificar</button>
        </form>
        <?php
function isPrime($number) {
    // Verificando se o número é menor ou igual a 1
    if ($number <= 1) {
        return false;
    }
    
    // Verificando se o número é divisível por qualquer número além de 1 e ele mesmo
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST["numeros"];

    // Dividindo a string de números em um array
    $numeros_array = explode(",", $numeros);

    foreach ($numeros_array as $numero) {
        // Removendo espaços em branco e convertendo para número
        $numero = trim($numero);

        echo "<p>Número: $numero</p>";

        // Verificando se o número é par ou ímpar
        if ($numero % 2 == 0) {
            echo "<p>O número $numero é par.</p>";
        } else {
            echo "<p>O número $numero é ímpar.</p>";
        }

        // Verificando se o número é redondo ou não
        if ($numero == round($numero)) {
            echo "<p>O número $numero é redondo.</p>";
        } else {
            echo "<p>O número $numero não é redondo.</p>";
        }

        // Verificando se o número é neutro, positivo ou negativo
        if ($numero > 0) {
            echo "<p>O número $numero é positivo.</p>";
        } elseif ($numero < 0) {
            echo "<p>O número $numero é negativo.</p>";
        } else {
            echo "<p>O número $numero é neutro.</p>";
        }
        
        
        }
    }
?>

    </div>
</body>
</html>