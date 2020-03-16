//// Hàm Kết Nối Database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'minhquy1_qtudien', 'minhquy1_pass', 'minhquy1_qtudien') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}