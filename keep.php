<?php 
    session_start();
    if( !isset($_GET["id"]) && !isset($_GET["name"]) && !isset($_GET["price"]) ) header("Location: products.php");

    if (isset($_GET['id']) && $_GET['id'] != '') {

        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
    
        if (isset($_SESSION["cart"][$id])) {
    
            $_SESSION["cart"][$id]['count'] = 1 + (int) $_SESSION["cart"][$id]['count'];
            $_SESSION["cart"][$id]['total'] = (int) $_SESSION["cart"][$id]['count'] * (int) $_SESSION["cart"][$id]['price'];
    
        } else {
    
            $_SESSION["cart"][$id]['id'] = $id;
            $_SESSION["cart"][$id]['name'] = $name;
            $_SESSION["cart"][$id]['count'] = 1;
            $_SESSION["cart"][$id]['price'] = $price;
            $_SESSION["cart"][$id]['total'] = $price;
        }
        
        header("Location: basket.php");
    }
?>