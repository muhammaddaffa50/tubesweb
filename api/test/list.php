<?php
header('Content-Type: application/json');
include "../db.php";

$stmt = $db->prepare("SELECT id, name, age, status FROM student");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>