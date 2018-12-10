<header>
        <div class="upInfo">
            <?php
                if($_COOKIE['login'] != '') echo "<div class='log_in'>Вы вошли как ".$_COOKIE['login']." | <a href='../php/PHPlogout.php'> Выйти</a></div>"; else echo "<div class='log_in'><a href='../signup.php'>Войти</a></div>";
                ?>
            <a href="../index.php"><input type="button" value="На главную"></a>
            <p>(работаем пока включен сервер)</p>
            <p>8-800-555-35-35</p>
            <div class="loc">
                <p>Норильск</p>
                <img src="../css/img/location.png" height="30px" width="30px">
            </div>
        </div>
        <div class="upSearch">
            <a href="http://logotipiwe/Habib/index.php"><b>HabibExp</b></a>
            <form action="catalog.php" id='searchForm' method="get">
                <input type="text" id="typeQuery" name="typeQuery">
            </form>
            <div class="search">
                <input form="searchForm" id="search" name="search" type="text" placeholder="Поиск товаров среди более чем over9001">
                <div class="Enter" onclick="$('#searchForm').submit();">
                    <img src="../css/img/search.png" height="25px" width="25px">
                </div>
            </div>
            <a href="Cart.php"><button>Корзина</button></a>
        </div>
    </header>