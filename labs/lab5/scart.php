<?php
    include 'functions.php';
    session_start();
    
    if(isset($_POST['removeId'])){
        foreach($_SESSION['cart'] as $itemKey => $item) {
            if($item['id'] == $_POST['removeId']){
                unset($_SESSION['cart'][$itemKey]);
            }
        }
    }
    
    if (isset($_POST['itemId'])){
        foreach ($_SESSION['cart'] as &$item) {
            if($item['id'] == $_POST['itemId']){
                $item['quantity'] = $_POST['update'];
            }
        }
    }

?>