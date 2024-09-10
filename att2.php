<?php
function countAOcurrences($text) {
    return substr_count(strtolower($text), 'a');
}

// Recebe a string do usuário
if (isset($_POST['text'])) {
    $inputString = $_POST['text'];
    $count = countAOcurrences($inputString);
    echo "A letra 'a' aparece $count vezes na string.";
} else {
    ?>
    <form method="post">
        Informe uma string: <input type="text" name="text" required>
        <input type="submit" value="Contar">
    </form>
    <?php
}
?>

