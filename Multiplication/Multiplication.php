<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #db614a;
        }

        img {
            color: #000;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>&times;</th>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; 

            for ($j = 1; $j <= 12; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>