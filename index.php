<?php

$a = $b = 1;

if (isset($_GET['number'])) {

    while ($a < $_GET['number']) {
        $c = $a;
        $a = $a + $b;
        $b = $c;
    }

    if ($a > $_GET['number']) {
        echo "Задуманное число - '" . $_GET['number'] ."' не входит в последовательность Фибоначчи";
    }    else {
        if ($a == $_GET['number']) {
            echo "Задуманное число - '" . $_GET['number'] ."' входит в последовательность Фибоначчи";
        }
    }

}

echo '
<form>
   <p>Введите любое число:</p>
   <p><input type="number" name="number"></p>
   <p><input type="submit" value="Отправить"></p>
</form>
';