function get_all_tudien()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from tudien ORDER BY tiengtiep ASC";
    
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

//// HÀM LẤY TẤT CẢ user
function get_all_user()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from users ORDER BY created_at ASC";
    
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

//// *HÀM LẤY TẤT CẢ TỪ ĐIỂN limit 20row stt-giam
function get_all_tudien_limit()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from tudien ORDER BY stt DESC LIMIT 20";
    
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


//// HÀM LÀM TẤT CẢ TD - 4 ky tự
function mot_ky_tu()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from tudien where tiengtiep like '_' LIMIT 20";
    
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


//// HÀM LÀM TẤT CẢ TD - STT by desc
function get_all_tudien_stt()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Hàm kết nối
    connect_db();
    
    // Câu truy vấn lấy tất cả sinh viên
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
