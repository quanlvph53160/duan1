<?php
require_once 'ConnectDatabase.php';
class Product{
     //Khai báo thuộc tính kết CSDL
     public $connect;
     //Khai báo phương thức khơi tạo => Kết Nối với CSDL
     public function __construct()
     {
        $this->connect = new ConnectDatabase();
     }
     //Mỗi 1 câu lênh truy vấn hoặc thao tắc (thêm, sửa, xóa)
     // Thì cần sinh ra 1 pt mới
     // hiển thị tất cả dữ liệu của bảng product
     // tip luôn chạy câu lệnh sql lên mysql trước để xem kết quả
     public function getALLDataProduct(){
        $sql = "SELECT * FROM products;";
        // luôn luôn gọi đến hàm setQuery
        $this->connect->setQuery($sql);
        // Nếu là truy vấn thì gọi đến loaddata
        return $this->connect->loadData();
     }
     // Lấy dữ liệu theo id
     public function getIdDataProduct($id){
        $sql = "SELECT * FROM products WHERE id = ?;";
        // gọi đến hàm setQuery
        $this->connect->setQuery($sql);
        // nếu là câu truy vấn trẩ về 1 bản ghi
        // thì phải thêm vào loadData([tham so1, tham so2, ....], false)
        return $this->connect->loadData([$id],  false);
     }
     // ten dữ liệu
     public function setInsertDataProduct($id, $name, $price, $image, $quantity, $status){
        $sql = "INSERT INTO products VALUES (?,?,?,?,?,?)";
        $this->connect->setQuery($sql);
        // nếu đây câu lệnh thao tac (Thêm, sửa, xóa)
        // thì goi đến hàm execute
        return $this->connect->execute([$id, $name, $price, $image, $quantity, $status]);
    }
    public function updateProduct( $name, $price, $image, $quantity, $status, $id){
         $sql = "UPDATE `products` SET `name`= ?,`pirce`= ?,`image`= ?,`quantity`= ?,`status`= ? WHERE `id`= ?";
         $this->connect->setQuery($sql);
         return $this->connect->execute([$name, $price, $image, $quantity, $id]);
    }
   }
?>