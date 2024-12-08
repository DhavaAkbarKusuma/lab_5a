<?php
$students = [
    [
        'Name' => 'Dhava',
        'Program' => 'BIP',
        'Age' => '20'
    ],
    [
        'Name' => 'Yusup',
        'Program' => 'BIS',
        'Age' => '20'
    ],
    [
        'Name' => 'Ahua',
        'Program' => 'BIT',
        'Age' => '20'
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo htmlspecialchars($student['Name']); ?></td>
                <td><?php echo htmlspecialchars($student['Program']); ?></td>
                <td><?php echo htmlspecialchars($student['Age']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
