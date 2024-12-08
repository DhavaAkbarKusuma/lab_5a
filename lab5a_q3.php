<?php
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'No' => $i,
            'Multiplier' => $multiplier,
            'Answer' => $i * $multiplier,
        ];
    }
    return $results;
}

$multiplier = 2;
$tableData = multiplication($multiplier);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row): ?>
            <tr>
                <td><?php echo $row['No']; ?></td>
                <td><?php echo $row['Multiplier']; ?></td>
                <td><?php echo $row['Answer']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
