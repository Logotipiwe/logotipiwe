<html>
    <head>
        <title>Logotipiwe</title>
        <link href="css/indexStyle.css" rel="stylesheet">
        <link rel="shortcut icon" href="css/img/L.png" type="image/png">
        <meta charset="utf-8">
    </head>
    
    <body>
        <div class="header2">
            <div class="log_in">
                    <?php if($_COOKIE['login'] != '') {
                        echo "Вы вошли как " . $_COOKIE['login'] . " | <a href='php/PHPlogout.php'>Выйти</a>";
                    } else {
                        echo"Вы не вошли | <a href='SignUp.php'>Войти</a>";
                    }
                    ?>
            </div>
        </div>
        <header></header>
        <div class="main">
            <ul>
                <a href="SignUp.php"><li>
                    <b>Регистрация/Вход</b>
                    <div class="text">
                        Единый аккаунт для всех нижеперечисленных страничек. Можно и не регистрироваться, но тогда ничего нельзя будет сделать, так шо давай, это быстро.
                    </div>
                </li></a>
                <a href="switter/index.php"><li>
                        <b>switter.ru - Запостить что-нибудь</b>
                    <div class="text">
                        Эта страница представляет собой дико недоделанную ленту с постами. Сделать бы конечно ещё регистрацию и авторизацию... чтобы знать кто отправил пост, но это как-нить потом.
                    </div>
                </li></a>
                <a href="Habib/Index.php"><li>
                    <b>HabibExpress</b>
                    <div class="text">
                        Интернет-магазин с каталогом товаров, поиском, ещё чем-то, корзина ещё есть, че-то ещё может быть есть. Покупайте что хотите.
                    </div>
                    </li></a>
            </ul>
        </div>
        <script src="Jquery.js"></script>
        <script>
            $(window).scroll(function() {
                if ($(this).scrollTop() > screen.height/2){ //393
                    $('.header2').css('background-image', 'url(css/img/header2.png)')
                } else { 
                    $('.header2').css('background-image', 'none')
                }
            });
        </script>
    </body>
</html>