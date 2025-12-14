<?php
// backend/index.php
header("Access-Control-Allow-Origin: *"); // Cho phép FE truy cập
header("Content-Type: application/json; charset=UTF-8");

$response = [
    "status" => "success",
    "message" => "Xin chào! Đây là dữ liệu từ Backend PHP trên InfinityFree.",
    "time" => date("Y-m-d H:i:s")
];

echo json_encode($response);
?>