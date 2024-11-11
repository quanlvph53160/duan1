<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?act=addProduct"><button>Thêm</button></a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Giá</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Trạng thái</td>
            <td>HÀnh động</td>
        </tr>   
    <?php
    // var_dump($listPro);
    foreach ($listPro as $value){
    ?>
        <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->pirce ?></td>
            <td><img src="<?php echo $value->image ?>" alt="" srcset="" width="50px" height="50px"></td>

            <td><?php echo $value->quantity ?></td>
            <td><?php echo $value->status ?></td>
            <td>
                <a href="?act=editProduct&id=<?php echo $value->id ?>"><button>Sửa</button></a>
                <button>Xóa</button>
            </td>
        </tr>
        <?php } ?>
    </table>
    <h1> Đây là trang chủ</h1>
</body>
</html>