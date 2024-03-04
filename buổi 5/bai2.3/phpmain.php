<?php
// Kiểm tra nếu file được upload
if (isset($_FILES['file'])) {
    // Lấy thông tin file
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    // Kiểm tra loại file
    if ($file_type == "image/jpeg" || $file_type == "image/png" || $file_type == "image/gif") {
        // Xử lý upload file
        move_uploaded_file($file_tmp, "tailieu/" . $file_name);
        echo "File uploaded successfully!";
    } else {
        echo "Chỉ cho phép upload file ảnh!";
    }
}
?>