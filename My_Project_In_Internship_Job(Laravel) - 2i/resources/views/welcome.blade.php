<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&display=swap" rel="stylesheet">  
        <!-- Styles / Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        
    </head>
    <body>
    <header class="header">
        <div class="header__logo">
            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M47.9822 21.7944H46.0207C45.2568 21.7944 44.5494 22.1941 44.1546 22.8485L36.5059 35.5452V22.8777C36.5059 22.2795 36.0217 21.7944 35.4232 21.7944H33.3276C32.7289 21.7944 32.243 22.2797 32.243 22.8777V41.3754C32.243 41.9732 32.7287 42.4566 33.3276 42.4566H35.2775C36.0394 42.4566 36.7466 42.0586 37.1414 41.4043L44.7903 28.7347V41.3754C44.7903 41.9732 45.276 42.4566 45.8749 42.4566H47.9822C48.5807 42.4566 49.0667 41.9732 49.0667 41.3754V22.8777C49.0667 22.2795 48.5805 21.7944 47.9822 21.7944ZM28.3381 39.1505H20.5354L25.2396 34.1978C26.5264 32.7882 27.4359 31.5538 27.9668 30.4938C28.4973 29.4336 28.7636 28.3934 28.7636 27.3722C28.7636 25.5081 28.1726 24.066 26.9949 23.0448C25.815 22.0215 24.1589 21.5111 22.0284 21.5111C20.6345 21.5109 19.3907 21.8079 18.2905 22.3981C17.1921 22.9901 16.3428 23.8057 15.74 24.8463C15.3532 25.518 15.089 26.2342 14.951 26.9973C14.8305 27.671 15.3398 28.2944 16.0279 28.2944L17.9599 28.2942C18.4927 28.2942 18.9415 27.9079 19.0367 27.3837C19.1514 26.7527 19.3924 26.2169 19.762 25.7762C20.2965 25.1375 21.0291 24.8171 21.9565 24.8171C22.8194 24.8169 23.4824 25.0814 23.9468 25.6051C24.4096 26.1293 24.6427 26.8517 24.6427 27.7702C24.6427 28.4419 24.423 29.1504 23.982 29.898C23.5405 30.645 22.8621 31.5206 21.9429 32.5224L16.1385 38.7017C15.5672 39.3095 15.2504 40.1113 15.2504 40.9442V41.3655C15.2504 41.9673 15.74 42.4566 16.3447 42.4566H28.3381C28.9406 42.4566 29.4303 41.9673 29.4303 41.3655V40.2436C29.4303 39.6396 28.9406 39.1505 28.3381 39.1505Z" fill="#000022"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8474 59.6407C7.25847 59.6407 4.34908 56.7319 4.34908 53.1435C4.34908 49.5551 7.25847 46.6461 10.8474 46.6461C14.4363 46.6461 17.3457 49.5551 17.3457 53.1435C17.3457 56.7319 14.4363 59.6407 10.8474 59.6407ZM43.7557 2.2473C44.5913 2.51919 44.9137 2.89257 44.052 3.84985L42.7675 5.13583C42.1519 5.75171 41.5232 5.71596 40.6401 5.36562C34.2566 3.29276 27.1115 3.49415 20.5087 6.4649C7.33752 12.3911 0.984812 27.2405 5.37423 40.6631C5.72541 41.5459 5.80665 42.1072 5.19128 42.7232L3.90652 44.0092C2.9501 44.8716 2.53138 44.6168 2.25865 43.7814C-4.02136 27.9746 3.20196 9.87398 18.8702 2.82425C27.0714 -0.865652 36.0038 -0.81461 43.7557 2.2473ZM20.2444 61.7527C19.4087 61.4808 19.0863 61.1072 19.9478 60.1502L21.2326 58.8642C21.8481 58.2481 22.4766 58.284 23.3599 58.6344C29.7434 60.7072 36.8885 60.5059 43.4913 57.5351C56.6625 51.6089 63.0152 36.7595 58.6258 23.3369C58.2746 22.4541 58.1934 21.8928 58.8088 21.2768L60.0935 19.9908C61.0499 19.1284 61.4687 19.3832 61.7414 20.2186C68.0214 36.0255 60.7979 54.126 45.1296 61.1758C36.9288 64.8657 27.9963 64.8146 20.2444 61.7527ZM53.1503 17.3438C49.5613 17.3438 46.652 14.4348 46.652 10.8464C46.652 7.25794 49.5613 4.34895 53.1503 4.34895C56.7392 4.34895 59.6486 7.25794 59.6486 10.8464C59.6486 14.4348 56.7392 17.3438 53.1503 17.3438ZM53.1503 13.3289C51.7791 13.3289 50.6673 12.2175 50.6673 10.8464C50.6673 9.47538 51.7791 8.36378 53.1503 8.36378C54.5216 8.36378 55.6332 9.47538 55.6332 10.8464C55.6332 12.2175 54.5216 13.3289 53.1503 13.3289ZM10.8474 55.6261C9.47602 55.6261 8.36446 54.5145 8.36446 53.1435C8.36446 51.7723 9.47602 50.6609 10.8474 50.6609C12.2186 50.6609 13.3303 51.7723 13.3303 53.1435C13.3303 54.5145 12.2186 55.6261 10.8474 55.6261Z" fill="#0044FF"/>
                </svg>
        </div>
        <div class="menu">  
            <a class="menu__element" href=""><b>Услуги</b></a>
            <a class="menu__element" href=""><b>Портфолио</b></a>
            <a class="menu__element" href="#contacts"><b>Контакты</b></a>
            <button class="menu__button">
                <i class="fa-solid fa-bars button__icon"></i>
                <p class="button__p">Меню</p>
            </button>
            <a class="menu__phone-icon" href="tel:+7 931 009-37-72">
            <i class="fa-solid fa-mobile-screen-button"></i>
            <b>+7 931 009-37-72</b>
            </a>
            <a class="menu__phone-icon-small" href="tel:+7 931 009-37-72">
            <i class="fa-solid fa-mobile-screen-button"></i>
            </a>
        </div>
    </header>
    <div class="cover">
        <div class="container">
            <p class="container__h1">Разработка веб-сервисов и сайтов с 2013 года</p>
            <a  class="container__phone-icon" href="tel:+7 931 009-37-72">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <b>+7 931 009-37-72</b></a>
        </div>
    </div>
<footer class="footer">
        <div class="contacts" id="contacts">
            <div class="contacts__group1">
                <p class="contacts__group1-p">ОТДЕЛ ПРОДАЖ</p>
                <div class="contacts__group1-contacts">
                <div class="contacts__group1_phone-number"><a href="" class="contacts__group1_phone-number-p">+7 931 009-37-72</a></div>
                    <div class="contacts__group1_social-media">
                        <a class="contacts__group1_social-media-telegram" href="">
                            <i class="fa-solid fa-paper-plane"></i>                            
                                    <p>
                                        Telegram
                                    </p> 
                                </a>
                        <a class="contacts__group1_social-media-whatsapp" href="">
                            <i class="fa-brands fa-whatsapp"></i>
                                <p>
                                    Whatsapp
                                </p> 
                            </a>
                </div>
                </div>
            </div>
            <div class="contacts__group2">
                <p class="contacts__group2-p">СЕРВИСНЫЙ ЦЕНТР</p>
                <div class="contacts__group2_contacts">
                <div class="contacts__group2_phone-number"><a href="" class="contacts__group2_phone-number-p">+7 931 009-37-74</a></div>
                    <div class="contacts__group2_social-media">
                        <a class="contacts__group2_social-media-telegram" href="">
                            <i class="fa-solid fa-paper-plane"></i>                             
                                    <p>
                                        Telegram
                                    </p> 
                                </a>
                        <a class="contacts__group2_social-media-whatsapp" href="">
                            <i class="fa-brands fa-whatsapp"></i>
                                <p>
                                    Whatsapp
                                </p> 
                            </a>
                </div>
                </div>
            </div>
            <div class="contacts__mail-and-time">
                <a href="" class="contacts__mail-and-time-mail">mail@studio2i.ru</a>
                <p href="" class="contacts__mail-and-time-time">По будням с 10:00 до 19:00 (по Москве)</p>
            </div>
            </div>
        <div class="footer__copyrights" id="footer__copyrights">
            <p class="footer__copyrights-p">© 2013–2025 Диджитал-агентство 2И</p>
            <p class="footer__copyrights-p2">ИП Артамонов Иван Сергеевич<br> ОГРНИП 316470400116880</p>
        </div>

</footer>
</body>
</html>
