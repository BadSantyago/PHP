<?php
/*$class = array ('Alex', 'Anna', 'Cris', 'Denny', 'Mike', 'Jon', );
echo $class[0]; // Выведет Alex, массивы начинаются с 0 */
$oxo = array(
    array('x', ' ', 'o'),
    array('o', 'o', 'x'),
    array('x', 'o', ' ')
);
echo $oxo[1][2]; //Выведет x, так как [1] это строка, а [2] это столбец (счёт идёт с 0)