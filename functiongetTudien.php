//// HÀM LẤY 1 TỪ ĐIỂN CÓ BIẾN TRUYỀN VÀO
function getTudien($tudienID)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Chạy hàm kết nối
    connectDB();
    
    // Câu truy vấn lấy 1 từ điển
    $sql = "select * from tudien where stt = {$tudienID}";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Nếu có kết quả thì đưa vào biến kết quả $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    // Trả kết quả về
    return $result;
}
//// END HÀM LẤY 1 TỪ ĐIỂN CÓ BIẾN TRUYỀN VÀO
