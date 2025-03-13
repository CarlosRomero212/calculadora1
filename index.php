<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            padding: 10px;
            width: 100%;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding-top: 60px;
        }
        .calculadora {
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        input, select, button {
            margin: 5px;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Calculadora</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Calculadora en PHP</h1>
        <div class="calculadora">
            <form method="post">
                <input type="number" name="num1" required>
                <select name="operacion">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="num2" required>
                <button type="submit" name="calcular">Calcular</button>
            </form>
            <?php
                if (isset($_POST['calcular'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operacion = $_POST['operacion'];
                    $resultado = 0;

                    switch ($operacion) {
                        case '+': $resultado = $num1 + $num2; break;
                        case '-': $resultado = $num1 - $num2; break;
                        case '*': $resultado = $num1 * $num2; break;
                        case '/': 
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                            } else {
                                echo "<p>No se puede dividir por cero.</p>";
                            }
                            break;
                    }
                    echo "<p>Resultado: $resultado</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
