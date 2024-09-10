<?php
function isFibonacci($n) {
    if ($n < 0) return false;
    $a = 0;
    $b = 1;
    while ($a < $n) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    return $a == $n;
}

// Recebe o número do usuário
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    if (isFibonacci($number)) {
        echo "O número $number pertence à sequência de Fibonacci.";
    } else {
        echo "O número $number não pertence à sequência de Fibonacci.";
    }
} else {
    ?>
    <form method="post">
        Informe um número: <input type="number" name="number" required>
        <input type="submit" value="Verificar">
    </form>
    <?php
}
?>


