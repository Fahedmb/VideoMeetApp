<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['route'] === 'start') {
        echo json_encode(['status' => 'success', 'message' => 'Call started']);
    } elseif ($_GET['route'] === 'end') {
        echo json_encode(['status' => 'success', 'message' => 'Call ended']);
    } else {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid route']);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}