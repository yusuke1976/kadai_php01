<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $data = file_get_contents('data/data.txt');
    $lines = explode("\n", $data);

    echo "<table>";
    echo "<tr><th>時間</th><th>悩み</th><th>本のタイトル</th><th>理由</th></tr>";

    foreach ($lines as $line) {
        if (trim($line) !== '') {
            $parts = explode("/", $line);
            echo "<tr>";
            echo "<td>" . $parts[0] . "</td>";
            echo "<td>" . $parts[1] . "</td>";
            echo "<td>" . $parts[2] . "</td>";
            echo "<td>" . $parts[3] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>
</body>
</html>