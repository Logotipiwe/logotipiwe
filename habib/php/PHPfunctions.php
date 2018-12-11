<?php
function SQLquery($query){
    $ip = "localhost";
    $user = "root";
    $password = "pi";
    $DBname = "habib";
    $encode = "UTF8";

    $sql = new mysqli($ip, $user, $password, $DBname);
    $sql->query("SET NAMES '".$encode."'");
    $res = $sql->query($query);
    $sql->close();
    return $res;
}
?>
