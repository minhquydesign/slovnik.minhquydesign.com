//// HÀM XÓA 1 TỪ ĐIỂN
function deleteTudien($tudienID)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connectDB();
    
    // Câu truy sửa
    $sql = "
    DELETE FROM tudien
    WHERE stt = $tudienID
    ";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    return $query;
}
