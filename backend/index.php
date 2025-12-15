<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Quản lý Dự án</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .container { margin-top: 50px; }
    </style>
</head>
<body>

    <h1 class="text-center text-danger mt-3">Chiều Thứ Hai - Ca 3</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">📋 Danh sách Dự án</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Dự án</th>
                                    <th>Quản lý</th>
                                    <th>Tiến độ</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody id="project-list">
                                <tr><td colspan="5" class="text-center">Đang tải dữ liệu...</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // ... (Code JS cũ giữ nguyên)
        function loadProjects() {
             fetch('/api/index.php') // Code cũ
             // ...
        }
        document.addEventListener("DOMContentLoaded", loadProjects);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>