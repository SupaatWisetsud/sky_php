<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="main.css">
</head>


<body>
    <div class="jumbotron text-center head" style="margin-bottom:0">
        <h1>ร้านมีตังเฟอร์นิเจอร์</h1>
        <p>สาขาบุรีรัมย์</p>
    </div>


    <nav>
        <div class="menu">
            <a href="./product.php">สินค้า</a>
            <a href="./logout.php">ออกจากระบบ</a>
        </div>
    </nav>


    <div class="w3-content w3-section" style="max-width:750px">
        <img class="mySlides" src="img/หน้าแรก1.jpg" style="width:100%">
        <img class="mySlides" src="img/หน้าแรก2.jpg" style="width:100%">
        <img class="mySlides" src="img/หน้าแรก3.jpg" style="width:100%">
        <img class="mySlides" src="img/หน้าแรก4.jpg" style="width:100%">
    </div>
    <img src="" alt="">


</body>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

</html>