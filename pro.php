<?php

include("connect.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tb_product WHERE id_type = $id";

if (isset($_POST["btn_search"])) {
    $search = $_POST["search"];
    $sql = "SELECT * FROM tb_product WHERE id_type = $id && name_pro LIKE '$search%' ";
}
$result2 = mysqli_query($con, $sql);

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
            <a href="./basket.php">ตระกร้าสินค้า</a>
            <a href="./logout.php">ออกจากระบบ</a>
        </div>
    </nav>

    <div class="row">
        <div class="sidemenu">
            <h6>ประเภท</h6>
            <a href="./products.php">ทั้งหมด</a>
            <?php

            $result = mysqli_query($con, "SELECT * FROM tb_type");
            while ($rs = mysqli_fetch_array($result)) {

            ?>
                <a href="http://localhost/furniture/pro.php?id=<?= $rs['id_type'] ?>"><?= $rs['name'] ?></a>
            <?php } ?>
        </div>
        <div class="col con">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form method="post">
                        <div class="search">
                            <input type="text" name="search">
                            <button class="btn btn-primary" name="btn_search">ค้นหา</button>
                        </div>
                    </form>
                </div>
                <div class="col "></div>
            </div>
            <div class="all">
                <?php

                while ($rs = mysqli_fetch_array($result2)) {

                ?>
                    <div class="product">

                        <img src="<?= "img/" . $rs['pro_img']; ?>" alt="" style="width: 150px; height:150px;"><br>
                        <label><?= $rs['name_pro'] ?></label><br>
                        <button class="btn btn-success" onClick="Javascript:window.location.href = 'http://localhost/furniture/product_detail.php?id=<?= $rs['id_pro'] ?>';">เพิ่มเติม</button>
                        <a href="keep.php?id=<?= $rs['id_pro'] ?>&name=<?= $rs['name_pro'] ?>&price=<?= $rs['price_pro'] ?>">หยิบใส่ตระกร้า</a>
                    </div>
                <?php } ?>

            </div>


        </div>
    </div>
</body>

</html>