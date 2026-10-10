
<?php
require_once "db.php";

$students = [
    ["Prince", "prince@gmail.com", "Computer"],
    ["Smit", "smit@gmail.com", "Computer"],
    ["Ayush", "ayush@gmail.com", "Computer"]
];

$sql = "INSERT INTO students (name, email, course)
        VALUES (?, ?, ?)";

$stmt = $pdo->prepare($sql);

foreach ($students as $student) {
    $stmt->execute($student);
}

echo "Prince, Smit and Ayush Added Successfully!";
?>
