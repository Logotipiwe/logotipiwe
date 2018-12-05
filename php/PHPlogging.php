<?php
switch ($_POST['action']){
    case 'show':
        if(isset($_COOKIE['login'])){
            echo $_COOKIE['login'];
        }
        break;
}