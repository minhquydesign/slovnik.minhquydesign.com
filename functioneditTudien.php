//// HÀM SỬA TỪ ĐIỂN REQUIRE TUDIEN-EDIT.PHP
function editTudien($tudien_id, $tudien_tiengviet, $tudien_tiengslovak, $tudien_destiengviet, $student_destiengslovak, $tudien_loai, $student_tienganh)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connectDB();
    
    // Chống SQL Injection
    $tudien_tiengviet       = addslashes($tudien_tiengviet);
    $tudien_tiengtiep        = addslashes($tudien_tiengslovak);
    $tudien_destiengviet   = addslashes($tudien_destiengviet);

    $tudien_loai   = addslashes($tudien_loai);

    $student_destiengtiep   = addslashes($student_destiengslovak);
    $student_tienganh   = addslashes($student_tienganh);
    
    // Câu truy vấn sửa
    $sql = "
    UPDATE tudien SET
    tiengviet = '$tudien_tiengviet',
    tiengtiep = '$tudien_tiengtiep',
    destiengviet = '$tudien_destiengviet',
    loai = '$tudien_loai',
    destiengtiep = '$student_destiengtiep',
    tienganh = '$student_tienganh'

    WHERE stt = $tudien_id
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
