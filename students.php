
<?php
require_once "db.php";

$sql = "SELECT * FROM students ORDER BY student_id ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

    <h2>Student List</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>

        <?php foreach ($students as $student) { ?>
            <tr>
                <td>
                    <?= htmlspecialchars($student["student_id"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($student["name"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($student["email"]) ?>
                </td>
                <td>
                    <?= htmlspecialchars($student["course"]) ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
