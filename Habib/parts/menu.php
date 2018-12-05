<?php

function ItemCount($name){
    $sql = new mysqli('localhost','root','','habib');
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
                        <li><?ItemCount('Ноутбуки')?></li>
                        <li><?phpItemCount('Комплектующие для ноутбуков')?></li>
                        <li><?phpItemCount('Аксессуары для ноутбуков')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Планшеты, электронные книги и аксессуары</b></li>
                        <li><?phpItemCount('Планшеты')?></li>
                        <li><?phpItemCount('Планшеты с клавиатурой')?></li>
                        <li><?phpItemCount('Электронные книги')?></li>
                        <li><?phpItemCount('Аксессуары для планшетов')?></li>
                        <li><?phpItemCount('Тарифы для операторов')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Запчасти и ПО для ноутбуков и планшетов</b></li>
                        <li><?phpItemCount('Операционные системы')?></li>
                        <li><?phpItemCount('Офис и делопроизводство')?></li>
                        <li><?phpItemCount('Антивирусы')?></li>
                        <li><?phpItemCount('Мультимедиа и прочее')?></li>
                        <li><?phpItemCount('Дисплеи')?></li>
                    </ul>
                </div>
                <li>Смартфоны и смарт-часы</li>
                <div class="sub-wrap" style="margin-top:-92px">
                    <ul class="list-1">
                        <li class="li1"><b>Средства связи</b></li>
                        <li><?phpItemCount('Смартфоны')?></li>
                        <li><?phpItemCount('Сотовые телефоны')?></li>
                        <li><?phpItemCount('Стационарные сотовые телефоны')?></li>
                        <li><?phpItemCount('Смарт-часы и браслеты')?></li>
                        <li><?phpItemCount('Радиостанции')?></li>
                        <li><?phpItemCount('Тарифы операторов')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Аксессуары</b></li>
                        <li><?phpItemCount('Гарнитуры')?></li>
                        <li><?phpItemCount('Аксессуары для смартфонов и телефонов')?></li>
                        <li><?phpItemCount('Аксессуары для смарт-часов и браслетов')?></li>
                        <li><?phpItemCount('Зарядка и подключение')?></li>
                        <li><?phpItemCount('Прочие полезные аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Запчасти для смартфонов</b></li>
                        <li><?phpItemCount('Аккумуляторы для смартфонов')?></li>
                        <li><?phpItemCount('Дисплеи для смартфонов')?></li>
                    </ul>
                </div>
                <li>Компьютеры и периферия</li>
                <div class="sub-wrap" style="margin-top:-138px">
                    <ul class="list-1">
                        <li class="li1"><b>Компьютерные системы</b></li>
                        <li><?phpItemCount('Системные блоки')?></li>
                        <li><?phpItemCount('Моноблоки')?></li>
                        <li><?phpItemCount('Неттопы и компьютеры-флешки')?></li>
                        <li><?phpItemCount('Платформы')?></li>
                        <li><?phpItemCount('VR Станции')?></li>
                        <li><?phpItemCount('Серверы')?></li>
                        <li><?phpItemCount('Микрокомпьютеры')?></li>
                        <li><?phpItemCount('Тонкие клиенты')?></li>
                        <li><?phpItemCount('Серверное оборудование')?></li>
                        <li><?phpItemCount('Аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Периферия</b></li>
                        <li><?phpItemCount('Клавиатуры')?></li>
                        <li><?phpItemCount('Мониторы')?></li>
                        <li><?phpItemCount('Мыши')?></li>
                        <li><?phpItemCount('Копмлекты клавиатура+мышь')?></li>
                        <li><?phpItemCount('Графические планшеты')?></li>
                        <li><?phpItemCount('Внешние накопители данных')?></li>
                        <li><?phpItemCount('Веб-камеры')?></li>
                        <li><?phpItemCount('USB разветвители')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Программное обеспечение и аксессуары</b></li>
                        <li><?phpItemCount('Коврики и мышки')?></li>
                        <li><?phpItemCount('Очки для работы за ПК')?></li>
                        <li><?phpItemCount('Настольные крепления для мониторов')?></li>
                        <li><?phpItemCount('Кабели и переходники')?></li>
                        <li><?phpItemCount('Инструмент для монтажа и ремонта')?></li>
                        <li><?phpItemCount('Программное обеспечение')?></li>
                        <li><?phpItemCount('Полезные аксессуары')?></li>
                    </ul>
                </div>
                <li>Комплектующие для ПК</li>
                <div class="sub-wrap" style="margin-top:-184px">
                    <ul class="list-1">
                        <li class="li1"><b>Основные комплектующие</b></li>
                        <li><?phpItemCount('Процессоры')?></li>
                        <li><?phpItemCount('Материнские платы')?></li>
                        <li><?phpItemCount('Видеокарты')?></li>
                        <li><?phpItemCount('Оперативная память')?></li>
                        <li><?phpItemCount('Блоки питания')?></li>
                        <li><?phpItemCount('Корпуса')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Хранение данных и охлаждение</b></li>
                        <li><?phpItemCount('Охлаждение компьютера')?></li>
                        <li><?phpItemCount('Жесткие диски')?></li>
                        <li><?phpItemCount('SSD накопители')?></li>
                        <li><?phpItemCount('Аксессуары для накопителей')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Устройства расширения и апгрейд</b></li>
                        <li><?phpItemCount('Оптические приводы')?></li>
                        <li><?phpItemCount('Звуковые карты')?></li>
                        <li><?phpItemCount('Тюнеры для компьютера')?></li>
                        <li><?phpItemCount('Платы видеозахвата')?></li>
                        <li><?phpItemCount('Контроллеры')?></li>
                        <li><?phpItemCount('Моддинг')?></li>
                    </ul>
                </div>
                <li>Телевизоры и медиа</li>
                <div class="sub-wrap" style="margin-top:-230px">
                    <ul class="list-1">
                        <li class="li1"><b>Телевизоры и аксессуары</b></li>
                        <li><?phpItemCount('Телевизоры')?></li>
                        <li><?phpItemCount('Кронштейны для телевизоров')?></li>
                        <li><?phpItemCount('Тумбы и стойки для ТВ')?></li>
                        <li><?phpItemCount('Видеокабели и переходники')?></li>
                        <li><?phpItemCount('Рамки для телевизоров')?></li>
                        <li><?phpItemCount('Клавиатуры для телевизоров')?></li>
                        <li><?ItemCount('Беспроводные HDMI передатчики')?></li>
                        <li><?ItemCount('Модули Wi-Fi для телевизоров')?></li>
                        <li><?ItemCount('Пульты ДУ и аксессуары')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Медиа и аксессуары</b></li>
                        <li><?ItemCount('Домашние кинотеатры')?></li>
                        <li><?ItemCount('Саундбары')?></li>
                        <li><?ItemCount('Медиаплееры')?></li>
                        <li><?ItemCount('Стационарные Blu-Ray плееры')?></li>
                        <li><?ItemCount('Протативные DVD плееры')?></li>
                        <li><?ItemCount('Проекторы')?></li>
                        <li><?ItemCount('Экраны для проекторов')?></li>
                        <li><?ItemCount('Фильмы')?></li>
                        <li><?ItemCount('Крепления для аудио-видео техники')?></li>
                        <li><?ItemCount('Подписки на онлайн-кинотеатры')?></li>
                    </ul>
                    <ul class="list-1">
                        <li class="li1"><b>Оборудование для ТВ</b></li>
                        <li><?ItemCount('Приставки для цифрового ТВ')?></li>
                        <li><?ItemCount('Комплект спутникового телевидения')?></li>
                        <li><?ItemCount('Телевизионные антенны')?></li>
                        <li><?ItemCount('Усилители ТВ сигнала')?></li>
                        <li><?ItemCount('Антенные кабели')?></li>
                        <li><?ItemCount('Антенные сплиттеры')?></li>
                        <li><?ItemCount('Антенные переходники')?></li>
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