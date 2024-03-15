<?php

do {
    $randomNumber = rand(1, 100);
} while ($randomNumber % 7 != 0);

echo "Сгенерированное число, кратное 7: $randomNumber";

?>