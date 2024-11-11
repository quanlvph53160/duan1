<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sửa sản phẩm</title> 
</head>
<body>
    <?php //var_dump($idPro); ?>
    <h1>Đây là trang Sửa </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php  echo $idPro->name; ?>">
        <label for="">Price</label>
        <input type="text" name="price" value="<?php  echo $idPro->pirce; ?>">
        <label for="">Image</label>
        <input type="file" name="image">
        <label for="">Quantyti</label>
        <input type="text" name="quantity" value="<?php  echo $idPro->quantity; ?>">
        <input type="submit" name="btn-submit" value="Gửi">
    </form>
</body>
</html>
