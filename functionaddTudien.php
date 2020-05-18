//// HÀM THÊM Từ điển - require /tudien-add.php - ̀5 biến truyền vào
function addTudien($tudien_tiengviet, $tudien_tiengslovak, $tudien_destiengviet, $tudien_loai,$tudien_nguoithem)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connectDB();
    
    // Chống SQL Injection
    $tudien_tiengviet = addslashes($tudien_tiengviet);
    $tudien_tiengslovak = addslashes($tudien_tiengtiep);
    $tudien_destiengviet = addslashes($tudien_destiengviet);
    $tudien_loai = addslashes($tudien_loai);
    $tudien_nguoithem = addslashes($tudien_nguoithem);
    
    // Câu truy vấn thêm
    $sql = "
    INSERT INTO tudien(tiengviet, tiengslovak, destiengviet, loai, nguoithem) VALUES
    ('$tudien_tiengviet','$tudien_tiengslovak','$tudien_destiengviet','$tudien_loai','$tudien_nguoithem')
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
