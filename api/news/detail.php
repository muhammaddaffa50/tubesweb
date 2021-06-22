<?php
header('Content-Type: application/json');
include "db.php";

$Id = (int) $_POST['Id'];

$stmt = $db->prepare("SELECT * FROM news WHERE Id = ?");
$stmt->execute([$Id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);
?>