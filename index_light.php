<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Видео продакшн студия полного цикла">
    <meta name="keywords" content="видео продакшн, продакшн студия полного цикла, съемка рекламных роликов, aspirin production">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Segio Khodchenko">
    <meta name="copyright" content="Сайт студии ASPIRIN PRODUCTION">
    <link link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>ASPIRIN PRODUCTION</title>
    <link link rel="stylesheet" href="css/styles_light.css">
    <script src="http://www.youtube.com/player_api" id="YTAPI"></script>
</head>

<body>
    <header id="header">
        <nav class="navigation-menu" id="menu">
            <ul class="navigation-menu__list list">
                <li class="navigation-menu__item">
                    <a class="navigation-menu__link link" href="#main">о нас</a>
                </li>
                <li class="navigation-menu__item">
                    <a class="navigation-menu__link link" href="#showreel">шоурил</a>
                </li>
                <li class="navigation-menu__item">
                    <a class="navigation-menu__link link" href="#clients">клиенты</a>
                </li>
                <li class="navigation-menu__item">
                    <a class="navigation-menu__link link" href="#contacts">контакты</a>
                </li>
            </ul>
        </nav>
        <div class="header-logo">
            <div class="header-logo__picture-box">
                <img class="header-logo__picture full-logo" src="img/logo.png" alt="logo">
            </div>
            <div class="header-logo__label-box">
                <img class="header-logo__label full-logo" src="img/label.png" alt="label">
            </div>
            <button class="order-button header-button button">Заказать звонок</button>
        </div>
        <div class="bg-video">
                <!-- <iframe class="bg-video__content" width="560" height="315" src="https://www.youtube.com/embed/s4iVRKRknds?autoplay=1&amp;loop=1&amp;playlist=s4iVRKRknds&amp;controls=0&amp;showinfo=0&amp;rel=0&amp" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                <!-- <iframe class="bg-video__content" width="5600" height="3150" frameborder="0" allowfullscreen allow="autoplay; loop; encrypted-media" src="https://www.youtube.com/embed/s4iVRKRknds?autoplay=1&amp;loop=1&amp;playlist=s4iVRKRknds&amp;modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0"></iframe> -->
            <iframe id="mbYTP_bgndVideo" class="bg-video__content"  frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="640" height="360" src="https://www.youtube.com/embed/s4iVRKRknds?autoplay=1&amp;modestbranding=1&amp;loop=1&amp;playlist=s4iVRKRknds&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;version=3&amp;playerapiid=mbYTP_bgndVideo&amp;origin=http%3A%2F%2Faspirin-production.com&amp;allowfullscreen=true&amp;wmode=transparent&amp;iv_load_policy=3&amp;html5=1&amp;widgetid=1"></iframe>
        </div>
        <!-- <div class="bg-video">
            <video class="bg-video__content" autoplay="autoplay" loop="loop" muted="muted">
                <source src="video/ASPIRIN_zastavka_BTS.mov" type="video/mp4" />
            </video>
        </div> -->
        <div class="background-photo"></div>
        <div class="header-pattern pattern">
        </div>
        <div class="modal-window confirm-window" hidden>
            <div class="modal-window__screen confirm-window__screen">
                <p class="confirm-window__message">Спасибо! Мы свяжемся с вами незамедлительно.</p>
                <button class="confirm-window__button button">OK</button>
            </div>
        </div>
        <div class="modal-window tel-window" hidden>
            <div class="modal-window__screen tel-screen">
                <form class="modal-window__form tel-form" method="POST">
                    <input class="modal-window__input input-name" type="text" name="name" required placeholder="Ваше имя:">
                    <input class="modal-window__input input-tel" type="tel" name="tel" required placeholder="Перезвонить на номер:">
                    <input class="modal-window__submit" type="submit" value="отправить">
                </form>
            </div>
        </div>
        <div class="modal-window mail-window" hidden>
            <div class="modal-window__screen mail-screen">
                <form class="modal-window__form mail-form" method="POST">
                    <input class="modal-window__input" type="text" name="name" required placeholder="Ваше имя:*">
                    <input class="modal-window__input" type="email" name="email" required placeholder="Ваш E-MAIL:*">
                    <input class="modal-window__input" type="text" name="subject" placeholder="Тема">
                    <textarea class="modal-window__textarea" name="message" required placeholder="Ваше сообщение:*" cols="10" rows="10"></textarea>
                    <input class="modal-window__submit mail-submit" type="submit" value="отправить">
                </form>
            </div>
        </div>
        <!-- <a class="pickup__link link" href="#header" hidden> наверх </a> -->
    </header>
    <main id="main">
        <div class="main-wrapper">
            <div class="about section" id="about">
                <p class="about__describe">Предоставляем полный спектр услуг в области производства видео
                    продукции. Как продакшн студия полного цикла мы начинаем проект с
                    генерации идеи и заканчиваем постобработкой отснятого материала.
                    Мы занимаемся съемкой рекламных роликов, клипов, бэкстейджей,
                    корпоративных фильмов, съемкой различных ивентов, созданием анимации
                    и пр.
                </p>
                <div class="about__services-container">
                    <!-- <p class="about__services-pretitle">we provide</p>
                    <h3 class="about__services-title title">AMAZING SERVICES</h3> -->
                    <ul class="about__services-list list">
                        <li class="about__services-item about__services-item--photo"><p class="about__services-subtitle">Креатив</p><p class="about__services-text">Работаем не только с готовыми сценариями. У нас много крутых идей!</p></li>
                        <li class="about__services-item about__services-item--video"><p class="about__services-subtitle">Реклама</p><p class="about__services-text">Мы любим делать рекламу, которая запоминается, рекламу, которая работает</p></li>
                        <li class="about__services-item about__services-item--create"><p class="about__services-subtitle">Корпоративные фильмы</p><p class="about__services-text">Производим продукт, помогающий сформировать хорошее отношение и доверие к компании</p></li>
                        <li class="about__services-item about__services-item--sound"><p class="about__services-subtitle">Ивенты и бэкстейджи</p><p class="about__services-text">Съемка масштабных мероприятий – это наш конёк!</p></li>
                        <li class="about__services-item about__services-item--animation"><p class="about__services-subtitle">Анимация</p><p class="about__services-text">Может быть как самостоятельной так и интегрированной в видео</p></li>
                        <li class="about__services-item about__services-item--graphic"><p class="about__services-subtitle">Озвучивание</p><p class="about__services-text">Создаем аудиоролики, адаптируем зарубежный контент и наоборот</p></li>
                    </ul>
                </div>
            </div>
            <div class="showreel section" id="showreel">
                    <h2 class="showreel__title title">ШОУРИЛ</h2>
                <video class="showreel__video" controls="controls" autoplay="1" loop="1" muted="1" style="max-width:100%;" poster="img/poster2.jpg">
                    <source src="video/ASPIRIN_PRODUCTION_SHOWREEL.mov" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
            </div>
            <div class="clients section" id="clients">
                <h2 class="clients__title title">КЛИЕНТЫ И ПАРТНЕРЫ</h2>
                <ul class="clients__list list">
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/ford.png" alt="ford">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/dynasiya.png" alt="dynasiya">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/jaguar.png" alt="jaguar">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/lucky_labs.png" alt="lucky_labs">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/landrover.png" alt="landrover">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/ar.png" alt="aqua-rodos">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/bmw.png" alt="bmw">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/bellagio.png" alt="bellagio">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/boris.png" alt="boris">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/bulv_font.png" alt="bulvar_fontanov">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/CBC.png" alt="city-beach-club">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/data-group.png" alt="data-group">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/domio.png" alt="domio">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/hyundai.png" alt="hyundai">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/porsche.png" alt="porsche">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/intellect_service.png" alt="intellect_service">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/kia.png" alt="kia">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/lipki.png" alt="lipki">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/mazda.png" alt="mazda">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/MKul.png" alt="kulikov">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/NB.png" alt="bolshakova">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/mercedes.png" alt="mercedes">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/portinvest.png" alt="portinvest">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/provita.png" alt="provita">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/prtime.png" alt="prtime">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/raben.png" alt="raben">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/raccoon.png" alt="raccoon">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/renault.png" alt="renault">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/rodos.png" alt="rodos">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/saatchi.png" alt="saatchi-saatchi">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/infopulse.png" alt="infopulse">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/scoda.png" alt="scoda">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/starcom.png" alt="starcom">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/suzuki.png" alt="suzuki">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/toyota.png" alt="toyota">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/udp.png" alt="udp">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/vls.png" alt="vls">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/volvo.png" alt="volvo">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/winner.png" alt="winner">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/staff-capital.png" alt="staff-capital">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/mitsubishi.png" alt="mitsubishi">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/adwise.png" alt="adwise">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/butcher.png" alt="butcher">
                    </li>
                    <li class="clients__item">
                        <img class="clients__picture" src="img/partners/premier.png" alt="premier">
                    </li>
                </ul>
            </div>
            <div class="contacts section" id="contacts">
                <h2 class="contacts__title title">Контакты</h2>
                <div class="contacts__container">
                    <div class="contacts__left-block">
                        <p class="contacts__adress">Киев, <br> ул. Гната Хоткевича, 12</p>
                        <p class="contacts__tel">+380 66 233 93 80</p>  
                        <p class="contacts__email">aspirin.prod@gmail.com</p> 
                    </div>
                    <div class="contacts__right-block">
                        <!-- <p class="contacts__text">Оставьте заявку и мы немедленно перезвоним вам или напишите нам лично:</p> -->
                        <button class="order-button contacts-button tel-button">Заказать звонок</button>
                        <button class="order-button contacts-button mail-button">Связаться с нами</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <div class="socials section">
                <h2 class="socials__title">FIND US ON SOCIAL MEDIA</h2>
                <div class="socials__container">
                    <a class="socials__link link socials__link link--facebook" target="_blank" href="https://www.facebook.com/AspirinProduction">
                        <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 506">
                            <path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"
                            />
                        </svg>facebook
                    </a>
                    <a class="socials__link link socials__link link--youtube" href="#">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="youtube" class="socials__ico" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                        </svg>youtube
                    </a>
                    <a class="socials__link link socials__link link--vimeo" target="_blank" href="https://vimeo.com/aspirinproduction">
                        <svg aria-hidden="true" data-prefix="fab" data-icon="vimeo-v" class="socials__ico" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z"></path>
                        </svg>vimeo
                    </a>
                    <a class="socials__link link socials__link link--instagram" href="#">
                        <svg class="socials__ico" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 516">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                            />
                        </svg>instagram
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="copyright__text">© 2018 Aspirin Production</p>
            <p class="copyright__author">made by Sergio Khodchenko</p>
        </div>
        <div class="footer-pattern pattern">
        </div>
    </footer>
    <script src="js/script.js"></script>
    <?php
    // несколько получателей
    $to  = 'sirogxod@gmail.com' . ', ';  // обратите внимание на запятую
    $to .= 'aspirin.prod@gmail.com';

    // тема письма
    $subject = 'Письмо с сайта ASPIRIN';

    // текст письма
    $message = 'Пользователь' . $_POST['name'] . ' отправил вам заявку:<br />' . $_POST['message'] . '<br />
    Связяться с ним можно по email или тел: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . $_POST['tel'] . '</a>'
    ;

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    // Дополнительные заголовки
    // $headers .= 'To: Иван <Ivan@example.com>' . "\r\n"; // Свое имя и email 
    $headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


    // Отправляем
    mail($to, $subject, $message, $headers);
    ?>
</body>

</html>