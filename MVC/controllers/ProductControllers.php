<?php
class ProductControllers{
    // Mỗi 1 chức năng sẽ có 1 phương thức riêng biệt
    // hiển thị tất cả dữ liệu 
    public function listProduct(){
        $mPro = new Product();
        $listPro = $mPro->getALLDataProduct();
        // var_dump($listPro);
        include_once 'views/list.php';
    }
    public function addProduct(){
        if(isset($_POST['btn-submit'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantyti = $_POST['quantyti'];
            // Thông số khi upload file
            //$_FILES['tenbien']['name']: Tên file upload
            //$_FILES['tenbien']['type']: Định dạng file upload
            //$_FILES['tenbien']['size']: Kich thuoc file upload
            //$_FILES['tenbien']['tmp_name']: Tên file (Tạm thời) khi được lưu trữ trên máy chủ
            //$_FILES['tenbien']['error']: Mã lỗi
            //$_FILES['tenbien']['full_path']: Đường dẫn đầy đủ do trình duyệt gửi
            var_dump($_FILES['image']);
            // upload ảnh
            // b1: lấy link đường dẫn thư mục chứa ảnh
            $target_dir = "images/";
            // b2: lấy tên file upload
            $name_img = $_FILES['image']['name'];
            // b3: ghép tên file upload với đường dẫn thư mục
            $target_path = $target_dir.$name_img;
            // b4: upload vào thư mục
            move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
            // thêm vào csdl
            $mPro = new Product();
            $check = $mPro->setInsertDataProduct(null,$name, $price, $target_path, $quantity,1);
        }
        include_once 'views/add.php';   
    }
    public function editProduct(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
            $mPro = new Product();
            $idPro = $mPro->getIdDataProduct($_GET['id']);
            if(isset($_POST['btn-submit'])){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                // Thông số khi upload file
                //$_FILES['tenbien']['name']: Tên file upload
                //$_FILES['tenbien']['type']: Định dạng file upload
                //$_FILES['tenbien']['size']: Kich thuoc file upload
                //$_FILES['tenbien']['tmp_name']: Tên file (Tạm thời) khi được lưu trữ trên máy chủ
                //$_FILES['tenbien']['error']: Mã lỗi
                //$_FILES['tenbien']['full_path']: Đường dẫn đầy đủ do trình duyệt gửi
                var_dump($_FILES['image']);
                // upload ảnh
                // b1: lấy link đường dẫn thư mục chứa ảnh
                $target_dir = "images/";
                // b2: lấy tên file upload
                $name_img = $_FILES['image']['name'];
                // b3: ghép tên file upload với đường dẫn thư mục
                $target_path = $target_dir.$name_img;
                // b4: upload vào thư mục
                move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
                // thêm vào csdl
                $mPro = new Product();
                $check = $mPro->updateProduct($name, $price, $target_path, $quantity,1,$_GET['id']);
            }
        }
        include_once 'views/edit.php';
    }
}
?>