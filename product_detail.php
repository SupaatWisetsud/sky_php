<?php

include("connect.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="menu">
            <a href="./employee.php">หน้าหลัก</a>
            <a href="./product.php">สินค้า</a>
            <a href="./logout.php">ออกจากระบบ</a>
        </div>
    </nav>

    <div class="row">
        <div class="sidemenu">
            <h6>ประเภท</h6>
            <a href="./products.php">ทั้งหมด</a>
            <?php

            $sql = "SELECT * FROM tb_type";
            $result = mysqli_query($con, $sql);
            while ($rs = mysqli_fetch_array($result)) {

            ?>
                <a href="http://localhost/furniture/pro.php?id=<?=$rs['id_type'] ?>"><?= $rs['name'] ?></a>
            <?php } ?>
        </div>
        <div class="col con">
            <div class="row">
                <div class="col"></div>
                <div class="col A">
                        <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM tb_product WHERE id_pro = $id";
                        $result = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($result);

                        ?>
                            <img src="<?= "img/" . $rs['pro_img']; ?>" style="width: 300px; height:300px;">
                            <h3> ชื่อสินค้า : <?= $rs['name_pro'] ?></h3>
                            <h5> ราคา : <?= $rs['price_pro'] ?> บาท </h5>
                            <p> ที่อยู่ : <?= $rs['pro_add'] ?></p>

                </div>
                <div class="col "></div>
            </div>

        </div>
</body>

</html>