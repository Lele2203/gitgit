<?php
// api/index.php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Dữ liệu chuyến xe (Mock Data)
$trips = [
    [
        "id" => 1,
        "from" => "Sài Gòn", 
        "to" => "Đà Lạt", 
        "time" => "22:00", 
        "price" => "300.000đ", 
        "type" => "Giường nằm"
    ],
    [
        "id" => 2, 
        "from" => "Sài Gòn", 
        "to" => "Đà Lạt", 
        "time" => "08:00", 
        "price" => "280.000đ", 
        "type" => "Ghế ngồi"
    ],
    [
        "id" => 3, 
        "from" => "Sài Gòn", 
        "to" => "Nha Trang", 
        "time" => "21:00", 
        "price" => "350.000đ", 
        "type" => "Limousine"
    ],
    [
        "id" => 4, 
        "from" => "Sài Gòn", 
        "to" => "Vũng Tàu", 
        "time" => "07:00", 
        "price" => "150.000đ", 
        "type" => "Hoa Mai"
    ],
    [
        "id" => 5, 
        "from" => "Hà Nội", 
        "to" => "Đà Lạt", 
        "time" => "05:00", 
        "price" => "1.200.000đ", 
        "type" => "Máy bay"
    ]
];

// Trả về kết quả JSON
echo json_encode([
    "status" => "success",
    "total" => count($trips),
    "data" => $trips
]);
?>