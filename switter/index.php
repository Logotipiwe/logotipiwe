<html>

    <head>
        <title>Switter</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>

    <body>
        <header>
            <b>Switter.cum</b>
            <?php
            
            if($_COOKIE['login'] != ''){
                echo "<p>Вы вошли, как <a href='profile.php'>".$_COOKIE['login']."</a>. <a href='../php/phplogout.php'>Выйти</a></p>";
            } else {
                echo "<a href='../signup.php'>Войти | Зарегистрироваться</a>";
            }
            
            ?>
        </header>
        <main>
            <menu>
                <ul>
                    <li>Моя страница</li>
                    <li>Главная</li>
                    <li>Друзья</li>
                    <li>Сообщения</li>
                    <li>Новости</li>
                    <li></li>
                </ul>
            </menu>
        </main>
    </body>
</html>