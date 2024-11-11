<?php
    //require_once 'models/ConnectDatabase.php';
    //$con = new ConnectDatabase();
    // Tất cả file mode sẽ nằm trước
    // sau đó mới đến controller
    require_once 'models/Product.php';
    require_once 'controllers/ProductControllers.php';
    // $data = new Product();
    // $data->setInsertDataProduct(null, 'Bánh Bò', 12000, 'anh1.png', 50, 1);
    // var_dump($data->getALLDataProduct());
    //var_dump($data->getIdDataProduct(1));
    // $cPro = new ProductControllers();
    // $cPro->listProduct();
    // $cPro->addProduct();
    $luachon = isset($_GET['act'])?  $_GET['act'] : "/";

    switch ($luachon){
        case 'listProduct':
            $cPro = new ProductControllers();
            $cPro->listProduct();
            break;
        case 'addProduct':
            $cPro = new ProductControllers();
            $cPro->addProduct();
            break;
        case 'editProduct':
            $cPro = new ProductControllers();
            $cPro->editProduct();
            break;
        default:
            $cPro = new ProductControllers();
            $cPro->listProduct();
            break;    

    }
?>