<?php
// backend/index.php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$projects = [
    [
        "id" => 1,
        "name" => "Xây dựng Website E-commerce",
        "manager" => "Nguyễn Văn A",
        "deadline" => "2025-12-31",
        "status" => "In Progress",
        "progress" => 65
    ],
    [
        "id" => 2,
        "name" => "App Mobile Quản lý Kho",
        "manager" => "Trần Thị B",
        "deadline" => "2026-01-15",
        "status" => "Pending",
        "progress" => 10
    ],
    [
        "id" => 3,
        "name" => "Nâng cấp hệ thống Server",
        "manager" => "Lê Văn C",
        "deadline" => "2025-11-20",
        "status" => "Completed",
        "progress" => 100
    ]
];

echo json_encode([
    "status" => "success",
    "total" => count($projects),
    "data" => $projects
]);
?>