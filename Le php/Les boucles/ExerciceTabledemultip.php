<!DOCTYPE html>
<html>

<head>
    <title>Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                for ($i = 0; $i <= 9; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i <= 9; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 0; $j <= 9; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>