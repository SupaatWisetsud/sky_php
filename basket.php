<?php
include("connect.php");
session_start();
if (isset($_GET['update']) && isset($_GET['id'])) {

    $id = $_GET['id'];

    if ($_GET['op'] == '-') {
        $_SESSION['cart'][$id]['count'] = (int) $_SESSION['cart'][$id]['count'] - 1;
        $_SESSION['cart'][$id]['total'] = (int) $_SESSION['cart'][$id]['count'] * (int) $_SESSION['cart'][$id]['price'];

        if ((int) $_SESSION['cart'][$id]['count'] == 0) {
            unset($_SESSION['cart'][$id]);
        }
    } else {

        $_SESSION['cart'][$id]['count'] = 1 + (int) $_SESSION['cart'][$id]['count'];
        $_SESSION['cart'][$id]['total'] = (int) $_SESSION['cart'][$id]['count'] * (int) $_SESSION['cart'][$id]['price'];
    }

    header("Location: basket.php");
}

if (isset($_GET['delete']) && isset($_GET['id'])) {

    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    header("Location: basket.php");
}

if (isset($_GET['delete_all'])) {
    unset($_SESSION['cart']);
    header("Location: basket.php");
}
if (isset($_GET['confrim'])) {
    $json = json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
    $id = $_SESSION['user_id'];

    $sql = "INSERT INTO tb_order(o_list, o_user) VALUES ('$json', '$id')";

    if (mysqli_query($con, $sql)) {
        echo "สั่งซื้อสินค้าเสร็จสิ้น";
    } else {
        echo "เกิดข้อผิดพลาด";
    }
    unset($_SESSION['cart']);
    header("Location: basket.php");
}
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
                <a href="http://localhost/furniture/pro.php?id=<?= $rs['id_type'] ?>"><?= $rs['name'] ?></a>
            <?php } ?>
        </div>
        <div class="col con">

            <div class="all">

                <div>
                    <h1 style="color: #333">ตะกร้าสินค้า</h1>
                </div>
                <div class="list-member">
                    <table style="margin: 0 auto; width: 80%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคา/ชิ้นละ</th>
                                <th>ราคารวม</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION["cart"])) : ?>
                                <?php foreach ($_SESSION["cart"] as $key => $value) : ?>
                                    <form method="get">
                                        <tr>
                                            <td><?= $key ?></td>
                                            <td><?= $value["name"] ?></td>
                                            <td style="display: flex; justify-content: space-around; align-items: center">

                                                <a href="?id=<?= $value['id'] ?>&op=-&update" class="btn danger"> - </a>
                                                <p><?= $value["count"] ?></p>
                                                <a href="?id=<?= $value['id'] ?>&op=+&update" class="btn success"> + </a>

                                            </td>
                                            <td><?= $value['price'] ?></td>
                                            <td><?= $value['total'] ?></td>
                                            <td>
                                                <a href="?delete&id=<?= $value['id'] ?>" class="btn danger">ลบ</a>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <div style="margin-top: 10px">
                        <a href="?confrim" class="btn success">ยืนยันการสั่งซื้อ</a>
                        <a href="?delete_all" class="btn danger">ยกเลิกรายการ</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>