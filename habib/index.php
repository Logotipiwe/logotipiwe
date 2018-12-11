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
    <?php
        require_once("parts/head.php");
    ?>
    <main>
        <?php
            require_once("parts/menu.php");
        ?>
        <div class="main">
            <div class="shitfuck"></div>
            <b>Наши самые дорогущие товары</b>
            <div class="goods">
                <?php
                    $res = SQLquery("SELECT * FROM goods ORDER BY `price` DESC LIMIT 0,9");
                    while(($row = $res -> fetch_assoc()) != false){
                        if($row['count']>0){
                            $count = "В наличии: ".$row['count'];
                            $dis = "";
                        } else{$count = "Нет в наличии"; $dis = " disabled";}
                        echo "<div class='item' id='" .$row['id']. "'>
                        <img src='css/img/goods/" .$row['picture']. ".png'>
                        <p class='ItemName'>" .$row['name']. "</p>
                        <p class='ItemPrice'>" .$row['price']. "</p>
                        <div class='buybutt'>
                            <form method='POST' action='php/PHPbuy1click.php'>
                                <input".$dis." type='button' value='В корзину'>
                                <input type='hidden' name='BuyId' value='" .$row['id']. "'>
                                <input".$dis." type='button' name='buy1click' value='Купить в 1 клик'>
                            </form>
                        </div>
                        <p class='ItemCount'>".$count."</p>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </main>

    
    <script src="../Jquery.js"></script>
    <script src="HabJS/MenuHead.js"></script>
    <script src="HabJS/item.js"></script>
</body>

</html>
