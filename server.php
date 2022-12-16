<?php
$disks= file_get_contents('dischi.json');
$disksList = json_decode($disks, true);

header('Content-Type: application/json');
echo json_encode($disksList);
?>