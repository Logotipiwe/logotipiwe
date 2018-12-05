<?php
require_once('php/PHPfunctions.php');
?>
<html>

<head>
    <title>Habib</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/HabibHeader.css">
    <link rel="stylesheet" href="css/HabibMenu.css">
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Main.css">
    <link rel="stylesheet" href="css/item.css">
</head>

<body>
    <?phprequire_once("parts/Head.php");?>
    <main>
        <?phprequire_once("parts/menu.php");?>
        <div class="main">
            <?php
            if($_GET['id'] == -1){
                echo "К сожалению такого товара больше не осталость :(";
            } else {
                echo "Покупка товара проведена успешно. Товар оплачен оформлением кредита на Вас в банке под 34% годовых. Товар будет доставлен к вам, где бы вы ни были, в течение пяти лет. Благодарим Вас за использование нашего магазина :)";
            }
            
            ?>
            <br>
            <br>
            <br>
            <a href="Index.php">Продолжить покупки!</a>
        </div>
    </main>

    
    <script src="../Jquery.js"></script>
    <script src="HabJS/MenuHead.js"></script>
</body>

</html>