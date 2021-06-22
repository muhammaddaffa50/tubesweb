<?php
header('Content-Type: application/json');
include "../crud/db.php";

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT name, age, status FROM student WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);
?>