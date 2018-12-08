<?php

function ItemCount($name){
    $sql = new mysqli('localhost','root','pi','habib');
    $sql ->query("SET NAMES 'UTF8'");
    $res = $sql->query("
    SELECT * FROM `goods`
    LEFT JOIN `category`
    ON `goods`.`category` = `category`.`id`
    WHERE `title` = '".$name."'");

    echo "<span>".$name."</span>"." ".mysqli_num_rows($res)."</span>";
}

?>
<menu>
            <ul class="CategoryList">
                <li>Ноутбуки и планшеты</li>
                <div class="sub-wrap">
                    <ul class="list-1">
                        <li class="li1"><b>Ноутбуки и аксессуары</b></li>
                        <li><?php ItemCount('Ноутбуки')?></li>
                        <li><?php ItemCount('Комплектующие для ноутбуков')?></li>
                        <li><?php ItemCount('Аксессуары для ноутбуков')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Планшеты, электронные книги и аксессуары</b></li>
                        <li><?php ItemCount('Планшеты')?></li>
                        <li><?php ItemCount('Планшеты с клавиатурой')?></li>
                        <li><?php ItemCount('Электронные книги')?></li>
                        <li><?php ItemCount('Аксессуары для планшетов')?></li>
                        <li><?php ItemCount('Тарифы для операторов')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Запчасти и ПО для ноутбуков и планшетов</b></li>
                        <li><?php ItemCount('Операционные системы')?></li>
                        <li><?php ItemCount('Офис и делопроизводство')?></li>
                        <li><?php ItemCount('Антивирусы')?></li>
                        <li><?php ItemCount('Мультимедиа и прочее')?></li>
                        <li><?php ItemCount('Дисплеи')?></li>
                    </ul>
                </div>
                <li>Смартфоны и смарт-часы</li>
                <div class="sub-wrap" style="margin-top:-92px">
                    <ul class="list-1">
                        <li class="li1"><b>Средства связи</b></li>
                        <li><?php ItemCount('Смартфоны')?></li>
                        <li><?php ItemCount('Сотовые телефоны')?></li>
                        <li><?php ItemCount('Стационарные сотовые телефоны')?></li>
                        <li><?php ItemCount('Смарт-часы и браслеты')?></li>
                        <li><?php ItemCount('Радиостанции')?></li>
                        <li><?php ItemCount('Тарифы операторов')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Аксессуары</b></li>
                        <li><?php ItemCount('Гарнитуры')?></li>
                        <li><?php ItemCount('Аксессуары для смартфонов и телефонов')?></li>
                        <li><?php ItemCount('Аксессуары для смарт-часов и браслетов')?></li>
                        <li><?php ItemCount('Зарядка и подключение')?></li>
                        <li><?php ItemCount('Прочие полезные аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Запчасти для смартфонов</b></li>
                        <li><?php ItemCount('Аккумуляторы для смартфонов')?></li>
                        <li><?php ItemCount('Дисплеи для смартфонов')?></li>
                    </ul>
                </div>
                <li>Компьютеры и периферия</li>
                <div class="sub-wrap" style="margin-top:-138px">
                    <ul class="list-1">
                        <li class="li1"><b>Компьютерные системы</b></li>
                        <li><?php ItemCount('Системные блоки')?></li>
                        <li><?php ItemCount('Моноблоки')?></li>
                        <li><?php ItemCount('Неттопы и компьютеры-флешки')?></li>
                        <li><?php ItemCount('Платформы')?></li>
                        <li><?php ItemCount('VR Станции')?></li>
                        <li><?php ItemCount('Серверы')?></li>
                        <li><?php ItemCount('Микрокомпьютеры')?></li>
                        <li><?php ItemCount('Тонкие клиенты')?></li>
                        <li><?php ItemCount('Серверное оборудование')?></li>
                        <li><?php ItemCount('Аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Периферия</b></li>
                        <li><?php ItemCount('Клавиатуры')?></li>
                        <li><?php ItemCount('Мониторы')?></li>
                        <li><?php ItemCount('Мыши')?></li>
                        <li><?php ItemCount('Копмлекты клавиатура+мышь')?></li>
                        <li><?php ItemCount('Графические планшеты')?></li>
                        <li><?php ItemCount('Внешние накопители данных')?></li>
                        <li><?php ItemCount('Веб-камеры')?></li>
                        <li><?php ItemCount('USB разветвители')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Программное обеспечение и аксессуары</b></li>
                        <li><?php ItemCount('Коврики и мышки')?></li>
                        <li><?php ItemCount('Очки для работы за ПК')?></li>
                        <li><?php ItemCount('Настольные крепления для мониторов')?></li>
                        <li><?php ItemCount('Кабели и переходники')?></li>
                        <li><?php ItemCount('Инструмент для монтажа и ремонта')?></li>
                        <li><?php ItemCount('Программное обеспечение')?></li>
                        <li><?php ItemCount('Полезные аксессуары')?></li>
                    </ul>
                </div>
                <li>Комплектующие для ПК</li>
                <div class="sub-wrap" style="margin-top:-184px">
                    <ul class="list-1">
                        <li class="li1"><b>Основные комплектующие</b></li>
                        <li><?php ItemCount('Процессоры')?></li>
                        <li><?php ItemCount('Материнские платы')?></li>
                        <li><?php ItemCount('Видеокарты')?></li>
                        <li><?php ItemCount('Оперативная память')?></li>
                        <li><?php ItemCount('Блоки питания')?></li>
                        <li><?php ItemCount('Корпуса')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Хранение данных и охлаждение</b></li>
                        <li><?php ItemCount('Охлаждение компьютера')?></li>
                        <li><?php ItemCount('Жесткие диски')?></li>
                        <li><?php ItemCount('SSD накопители')?></li>
                        <li><?php ItemCount('Аксессуары для накопителей')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Устройства расширения и апгрейд</b></li>
                        <li><?php ItemCount('Оптические приводы')?></li>
                        <li><?php ItemCount('Звуковые карты')?></li>
                        <li><?php ItemCount('Тюнеры для компьютера')?></li>
                        <li><?php ItemCount('Платы видеозахвата')?></li>
                        <li><?php ItemCount('Контроллеры')?></li>
                        <li><?php ItemCount('Моддинг')?></li>
                    </ul>
                </div>
                <li>Телевизоры и медиа</li>
                <div class="sub-wrap" style="margin-top:-230px">
                    <ul class="list-1">
                        <li class="li1"><b>Телевизоры и аксессуары</b></li>
                        <li><?php ItemCount('Телевизоры')?></li>
                        <li><?php ItemCount('Кронштейны для телевизоров')?></li>
                        <li><?php ItemCount('Тумбы и стойки для ТВ')?></li>
                        <li><?php ItemCount('Видеокабели и переходники')?></li>
                        <li><?php ItemCount('Рамки для телевизоров')?></li>
                        <li><?php ItemCount('Клавиатуры для телевизоров')?></li>
                        <li><?php ItemCount('Беспроводные HDMI передатчики')?></li>
                        <li><?php ItemCount('Модули Wi-Fi для телевизоров')?></li>
                        <li><?php ItemCount('Пульты ДУ и аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Медиа и аксессуары</b></li>
                        <li><?php ItemCount('Домашние кинотеатры')?></li>
                        <li><?php ItemCount('Саундбары')?></li>
                        <li><?php ItemCount('Медиаплееры')?></li>
                        <li><?php ItemCount('Стационарные Blu-Ray плееры')?></li>
                        <li><?php ItemCount('Протативные DVD плееры')?></li>
                        <li><?php ItemCount('Проекторы')?></li>
                        <li><?php ItemCount('Экраны для проекторов')?></li>
                        <li><?php ItemCount('Фильмы')?></li>
                        <li><?php ItemCount('Крепления для аудио-видео техники')?></li>
                        <li><?php ItemCount('Подписки на онлайн-кинотеатры')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Оборудование для ТВ</b></li>
                        <li><?php ItemCount('Приставки для цифрового ТВ')?></li>
                        <li><?php ItemCount('Комплект спутникового телевидения')?></li>
                        <li><?php ItemCount('Телевизионные антенны')?></li>
                        <li><?php ItemCount('Усилители ТВ сигнала')?></li>
                        <li><?php ItemCount('Антенные кабели')?></li>
                        <li><?php ItemCount('Антенные сплиттеры')?></li>
                        <li><?php ItemCount('Антенные переходники')?></li>
                    </ul>
                </div>
                <li>Игры и приставки</li>
                <div class="sub-wrap"></div>
                <li>Аудиотехника</li>
                <div class="sub-wrap"></div>
                <li>Фото-видеоаппаратура</li>
                <div class="sub-wrap"></div>
                <li>Офисная мебель и техника</li>
                <div class="sub-wrap"></div>
                <li>Сетевое оборудование</li>
                <div class="sub-wrap"></div>
            </ul>
        </menu>