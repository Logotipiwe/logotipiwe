<?php
$query = $_GET['search'];
$typeQ = $_GET['typeQuery'];
$sql = new mysqli('localhost','root','','habib');
$sql->query("SET NAMES 'UTF8'");

if($typeQ == 1){$SQLquery = 
"SELECT * FROM `goods`
LEFT JOIN `category`
ON  `goods`.`category` =  `category`.`id`
WHERE title = '".$query."'";}

if($typeQ == 0){$SQLquery =
"SELECT * FROM `goods`
LEFT JOIN `category`
ON  `goods`.`category` =  `category`.`id`
WHERE `goods`.`name` LIKE '%".$query."%'";}

$res = $sql->query ($SQLquery);
?>
<html>

    <head>
        <title>Habib</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/HabibHeader.css">
        <link rel="stylesheet" href="css/HabibMenu.css">
        <link rel="stylesheet" href="css/catalog.css">
        <link rel="stylesheet" href="css/item.css">
    </head>

    <body>
        <?php require_once("parts/head.php");?>
        <main>
            <div class="folders"></div>
            <div class="name">
                <?php
                if($typeQ == 1){echo $query." <span>".mysqli_num_rows($res)." товаров</span>";}
                if($typeQ == 0){echo "Поиск: ''".$query."'' <span>".mysqli_num_rows($res)." товаров</span>";}
                ?>
            </div>
            <div class="CatalogMain">
                <div class="select"></div>
                <div class="List">
                    <hr>
                    <div class="sort">
                        Сортировка по цене: <select><option>Не сортировать</option><option>По убыванию</option><option>По возрастанию</option></select>
                    </div>
                    <hr>
                    <div class="items">
                        <?php
                        $sql = new mysqli('localhost','root','','habib');
                        $sql->query("SET NAMES 'UTF8'");

                        if($typeQ == 1)
                        {$SQLquery = "
                        SELECT * FROM `goods`
                        LEFT JOIN `category`
                        ON  `goods`.`category` =  `category`.`id`
                        WHERE title = '".$query."'";}
                                                
                        if($typeQ == 0){$SQLquery = "
                        SELECT * FROM `goods`
                        LEFT JOIN `category`
                        ON  `goods`.`category` =  `category`.`id`
                        WHERE `goods`.`name` LIKE '%".$query."%'";}

                        $res = $sql->query ($SQLquery);
                        
                        while(($row = $res->fetch_assoc())!=false){
                            echo "<div class='item'>
                            <img src='css/img/goods/".$row['picture'].".png'>
                            <p class='ItemName'>".$row['name']."</p>
                            <p class='ItemPrice'>".$row['price']."</p>
                            <div class='buybutt'>
                                <input type='button' value='Купить в 1 клик'>
                                <input type='button' value='В корзину'>
                            </div>
                            <p class='ItemCount'>В наличии: ".$row['count']."</p>
                            </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        
        <script src="../Jquery.js"></script>
        <script src="HabJS/MenuHead.js"></script>
    </body>
</html>