<?php
require_once('PHPfunctions.php');

$res = SQLquery("SELECT * FROM `goods` WHERE `id` = ".$_POST['BuyId']."");
$row = $res->fetch_assoc();
if($row['count'] > 0){
    $newCount = $row['count'] - 1;
    SQLquery("UPDATE  `habib`.`goods` SET  `count` =  '".$newCount."' WHERE  `goods`.`id` =".$_POST['BuyId']."");
    $id = $_POST['BuyId'];
} else {
    $id = -1;
}
header('Location: ../Buy1click.php?id='.$id.'');
?>