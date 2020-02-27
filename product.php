<?php 
    session_start();
    include("connect.php");
    $uid = $_SESSION["user_id"];
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
                $result = mysqli_query($con,$sql);
                while($rs = mysqli_fetch_array($result)){
            
            ?>
            <a href="#"><?= $rs['name'] ?></a>
                <?php } ?>
        </div>
        <div class="col con">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="search">
                        <input type="text" name="search">
                        <button class="btn btn-primary">ค้นหา</button>
                    </div>
                </div>
                
                <div class="col "></div>
            </div>
            <div class="all">
                <div class="product">
                    <img src="./img/zn64u1.jpg" alt="" style="width: 150px; height:150px;"><br>
                    <label>ชุดโซฟาเบด – 187 CM</label><br>
                    <button class="btn btn-success" onClick="Javascript:window.location.href = './product_detail.php';">เพิ่มเติม</button>
                </div>
               
                

            </div>


        </div>
    </div>
</body>

</html>