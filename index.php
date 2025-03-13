
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
   