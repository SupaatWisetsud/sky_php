<?php 
    session_start();
    include("connect.php");
    $uid = $_SESSION["user_id"];

    $sql = "SELECT * FROM tb_order INNER JOIN tb_user ON tb_order.o_user = tb_user.user_id";

    $query = mysqli_query($con, $sql);
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

        <table style="margin: 0 auto" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>สินค้า</th>
                    <th>คนขาย</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?= $row["o_id"] ?></td>
                    <td>
                        <?php 
                            $order = json_decode($row["o_list"], JSON_UNESCAPED_UNICODE);
                            foreach($order as $key => $value): 
                        ?>
                            <p><?= $value["name"] ?></p>
                        <?php endforeach;?>
                    </td>
                    <td><?= $row["name"] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>