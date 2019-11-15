<?php
$options = [
    'expires' => date('U') + 1,
    'samesite' => 'Strict'
];
setcookie('my-cookie', 'some value', $options);
header('Content-type: application/json');
echo json_encode(['cookie-set' => true]);
