function getALlTudienBySTTDESC()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connectDB();
    
    // Câu truy vấn lấy tất cả từ điển
    $sql = "select * from tudien ORDER BY stt DESC";
    
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();
    
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    
    // Trả kết quả về
    return $result;
}
