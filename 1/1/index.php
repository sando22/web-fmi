<!DOCTYPE html>
<html>
<body>

<h1 align="center">Multiplication table!</h1>

<table width="50%">
    <?php
    for ($outer = 1; $outer <= 9; $outer++) {
        echo "<tr>";

        for ($inner = 1; $inner <= 9; $inner++) {
            if ($outer == 1) {
                echo "<th>$inner</th>";
            } elseif ($inner == 1) {
                echo "<th>$outer</th>";
            } else {
                $result = $inner * $outer;
                echo "<td align='center'>$result</td>";
            }
        }

        echo "</tr>";
    } ?>
</table>
</body>
</html>