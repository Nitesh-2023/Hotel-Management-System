<?php
    if(isset($_POST['ORD_ID']) && isset($_POST['ITEM_ID']) && isset($_POST['QUANTITY']) && isset($_POST['ITEM_RATE']) && isset($_POST['TOTAL']) && isset($_POST['MOB'])):
    $ordid = $_POST['ORD_ID'];                                                                                           
    $itemid = $_POST['ITEM_ID'];
    $quantity = $_POST['QUANTITY'];
    $itemrate = $_POST['ITEM_RATE'];
    $total = $_POST['TOTAL'];
    $M = $_POST['MOB'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO ORDERS(ord_id,item_id,MOB,quantity,item_rate,total) VALUES('".$ordid."','".$itemid."','".$M."', '".$quantity."','".$itemrate."','".$total."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into ORDERS table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die(); 
    endif; 
?>
