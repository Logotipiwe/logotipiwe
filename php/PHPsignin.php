<?php
function back(){
    header("location:../SignUp.php");
}
if($_POST['InLogin']!="") {
    $sql = new mysqli("localhost","root", "pi", "logotipiwe");
    $sql->query ("SET NAMES 'UTF8'");
    $res = $sql->query ("SELECT * FROM `users` WHERE `Login` = '".$_POST['InLogin']."'");
    $row = $res->fetch_assoc();

    if($row['Password'] == $_POST['InPassword']) {
        setcookie('login',$row['Login'],0,'/','',0);
        header('location:../Index.php');
    } else {back();}

} else {
    back();
}
?>