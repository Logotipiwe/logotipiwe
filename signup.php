<html>
    <head>
        <title>Вход</title>
        <meta charset="utf-8">
        <link href="css/SignUpStyle.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="head">
            <div class='link'><a href="index.php">На главную</a></div>
            <div class="log_in">
                <?php
                if($_COOKIE['login']!=''){
                    echo "Вы вошли, как ".$_COOKIE['login']. " | <a href='php/PHPlogout.php'>Выйти</a>";
                }
                ?>
            </div>
        </div>
        <div class="a">

            <?php
                if($_COOKIE['login'] != ''){
                    echo '<div class="Divtitle">Чтобы войти, надо сначала выйти :)</div>
                          <a href="php/PHPlogout.php"><input type="button" value="Выйти" style="margin-top:50px; cursor:pointer"></a>';
                } else {
                    echo '<div class="Divtitle">Войти</div>
    <form method="post" action="php/PHPsignin.php">
        <input name="InLogin" class="login" type="text" placeholder="Логин" autofocus>
        <input name="InPassword" class="password" type="text" placeholder="Пароль">
        <input class="submit" type="submit" value="Войти">
    </form>';
                }
            ?>
        </div>
        <div class="b">
            <div class="Divtitle">Зарегистрироваться</div>
            <form method="post" action="php/PHPsignup.php">
                    <input name='Reglogin'class="login" type="text" placeholder="Логин">
                    <input name='Regpassword' class="password" type="text" placeholder="Пароль">
                    <input class="submit" type="submit" value="Зарегистрироваться">
            </form>
        </div>
        <script src="Jquery.js"></script>
    </body>
</html>