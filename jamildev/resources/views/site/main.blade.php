<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from readycodeee.github.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 07:53:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Портфолио WEB-разработчика</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0 auto;
            padding: 0px;
            font-family: 'Akrobat';
        }

        .bgcolor {
            width: 100%;
            height: 100%;
            z-index: -100;
            position: absolute;
        }

        .logotype {
            max-width: 200px;
            max-height: 150px;
            margin-top: 70px;
            position: relative;
            z-index: 20;
        }

        .caption {
            z-index: 20;
        }

        .caption h4 {
            color: #f8b410;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: 'Akrobat';
            margin-top: 90px;
            font-weight: bold;
        }

        .btn {
            width: 60px;
            height: 60px;
            background-color: black;
            position: fixed;
            z-index: 100;
            cursor: pointer;
            top: 70px;
        }

        .btn div {
            display: block;
        }

        .btn:before, .btn:after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            opacity: 0;
            -webkit-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

        .btn:before {
            bottom: 0;
            left: 0;
            border-left: 1px solid white;
            border-top: 1px solid white;
            border-radius: 4px;
            -webkit-transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s;
            -o-transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s;
            transition: 0s ease opacity .8s, .2s ease width .4s, .2s ease height .6s;
        }

        .btn:after {
            top: 0;
            right: 0;
            border-right: 1px solid white;
            border-bottom: 1px solid white;
            border-radius: 4px;
            -webkit-transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s;
            -o-transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s;
            transition: 0s ease opacity .4s, .2s ease width, .2s ease height .2s;
        }

        .btn:hover:before, .btn:hover:after {
            height: 100%;
            width: 100%;
            opacity: 1;
        }

        .btn:hover:before {
            -webkit-transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s;
            -o-transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s;
            transition: 0s ease opacity 0s, .2s ease height, .2s ease width .2s;
        }

        .btn:hover:after {
            -webkit-transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s;
            -o-transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s;
            transition: 0s ease opacity .4s, .2s ease height .4s, .2s ease width .6s;
        }

        .sandwich {
            width: 45px;
            height: 22px;
            position: absolute;
            top: 17px;
            left: 7px;
            z-index: 150;
        }

        .sw-top, .sw-mid, .sw-foot {
            width: 45px;
            height: 3px;
            background: #ffffff;
            position: relative;
            border: none;
        }

        .sw-top {
            top: 1px;
            background: rgb(255, 255, 255);
            border: none;
            border-radius: 4px 4px 4px 4px;
            -webkit-transition: top 0.2s, -webkit-transform 0.5s;
            transition: top 0.2s, -webkit-transform 0.5s;
            -o-transition: transform 0.5s, top 0.2s;
            transition: transform 0.5s, top 0.2s;
            transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s;
            transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s;
        }

        .sw-mid {
            top: 7px;
            background: rgb(255, 255, 255);
            border: none;
            border-radius: 4px 4px 4px 4px;
            -webkit-transition: top 0.2s, -webkit-transform 0.5s;
            transition: top 0.2s, -webkit-transform 0.5s;
            -o-transition: transform 0.5s, top 0.2s;
            transition: transform 0.5s, top 0.2s;
            transition: transform 0.5s, top 0.2s, -webkit-transform 0.5s;
        }

        .sw-foot {
            top: 13px;
            background: rgb(255, 255, 255);
            border: none;
            border-radius: 4px 4px 4px 4px;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            -webkit-transition-delay: 0.1s;
            -o-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        .top-txt {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
            top: 0;
            left: 0;
        }

        .top-sur:before {
            content: "";
            display: inline-block;
            height: 40%;
            vertical-align: middle;
        }

        .top-sur {
            height: 100%;
        }

        .top-sur div {
            vertical-align: middle;
        }

        .sandwich.active .sw-top {
            top: 10px;
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        .sandwich.active .sw-mid {
            top: 7px;
            -webkit-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .sandwich.active .sw-foot {
            opacity: 0;
            top: 0;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .top-sur h1 {
            color: #f8b410;
            text-transform: uppercase;
            border: 4px solid #fff;
            padding: 15px 20px;
            font-family: 'Akrobat';
            letter-spacing: 3px;
            margin-bottom: 150px;
            display: inline-block;
        }

        .top-txt p {
            color: #f8b410;
            font-size: 18px;
            font-family: 'Akrobat';
            letter-spacing: 3px;
            font-weight: bold;
            display: inline-block;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css')  !!}"/>
    <link rel="stylesheet" type="text/css" href="{!!  asset('css/media.css') !!} "/>
    <link rel="stylesheet" type="images/x-icon" href="{!! asset('img/logo.html')  !!} "/>
    <!--chart-->
    <script src="{!! asset('js/jquery-3.2.1.min.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.malihu.PageScroll2id.min.js')!!}"></script>
    <script src="{!! asset('js/common.js')!!}"></script>
</head>
<body>
<div class="wrapper">
    <!-- ШАПКА -->
    <header id="header">
        <!--img src="img/bg.png" alt="Фон" class="bgcolor"-->
        <canvas>

        </canvas>
        <hr align="center" size="2" width="100%">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-4 logotype">
                    <a href="index.html"><img src="img/logo.png" alt="Логотип">&nbsp;</a>
                </div>
                <div
                    class=" col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1 caption text-center wow fadeInDown"
                    data-wow-offset="150">
                    <h4 class="titl">САЙТ-ПОРТФОЛИО веб-разработчика</h4>
                </div>
                <div class="btn col-md-offset-2 col-lg-offset-2 col-sm-offset-2 col-xs-offset-5" autofocus>
                    <div class="sandwich">
                        <div class="sw-top"></div>
                        <div class="sw-mid"></div>
                        <div class="sw-foot"></div>
                    </div>
                </div>
                <div class="menu" style="display: none;">
                    <ul>
                        <li><a href="#header" rel='m_PageScroll2id'>Главная<span></span></a></li>
                        <li><a href="#about" rel='m_PageScroll2id'>Обо мне<span></span></a></li>
                        <li><a href="#portfolio" rel='m_PageScroll2id'>Портфолио<span></span></a></li>
                        <li><a href="#contacts" rel='m_PageScroll2id'>Контакты<span></span></a></li>
                        <li><a href="{{route('home')}}" rel=''>Admin-Panel<span></span></a></li>
                    </ul>
                </div>
                <div class="top-txt">
                    <div class="top-sur text-center">
                        <div>
                            <h1>01001000 01001001 01011111 01000001 01001100 01001100 00100001</h1>
                        </div>
                        <div>
                            <p class="top-text wow fadeInUp" data-wow-offset="150">WEB-РАЗРАБОТЧИК /
                                BACK-END DEVELOPER</p>
                            <br>
                            <p class="top-text wow fadeInUp" data-wow-offset="150">ПРОГРАММИСТ PHP / C#</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ОБО МНЕ -->
    <hr align="center" size="2" width="100%">
    <section id="about">
        <div class="container">
            <div class="about">
                <div class="row">
                    <div class="content text-center">
                        <div class="wow fadeInUp" data-wow-offset="150">
                            <h2>Обо мне</h2>

                        </div>
                        <div class="some-about col-lg-4 col-md-4 col-sm-4 wow fadeInLeft" data-wow-offset="150">
                            <h3>Немного о себе</h3>
                            <img src="img/me1.png" alt="Лист" class="me1 ">
                            <p>Доброго времени суток,меня зовут Кулинич Иван
                                <br> Я занимаюсь web-разработкой с нуля,под ключ.
                                <br> Выполняю верстку и программирование сайтов,а так же доработку,добавляя полный
                                функционал на сайт!Верстаю адаптивную верстку с помощью Bootstrap,
                                <br>таким образом сайт получается красивым на любом устройстве,будь то комьютер,ноутбук
                                или телефон!
                            </p>
                        </div>
                        <div class="knowledge col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="150">
                            <h3>Знания и Умения</h3>
                            <img src="img/me2.png" alt="лист" class="me2">
                            <p>Знаю такие языки программирования,как:PHP , JavaScript.Языки разметки: HTML(5), таблицы
                                стилей CSS(3).
                                <br>Умею верстать адаптивные сайты под планшеты и мобильные устройства, фраемворк
                                Bootstrap. Также знаю библиотеку jQuery! </p>
                        </div>
                        <div class="self col-lg-4 col-md-4 col-sm-4 wow fadeInRight" data-wow-offset="150">
                            <h3>Самообразование</h3>
                            <img src="img/me3.png" alt="лист" class="me3">
                            <p>Курсы в интернете, видеокурсы, книги, документация, форумы, статьи...</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr align="center" size="2" width="100%">
            <div class="skils text-center">
                <div class="container">
                    <div class="row">
                        <div class="top-text-ab wow fadeInUp" data-wow-offset="150">
                            <h2>Профессиональные навыки</h2>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <h4>HTML5|CSS3</h4>
                            <div id="test-circle1"></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <h4>jQuery|JavaScript</h4>
                            <div id="test-circle2"></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <h4>PHP|MySQL</h4>
                            <div id="test-circle3"></div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <h4>Photoshop</h4>
                            <div id="test-circle4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ПОРТФОЛИО-->
    <hr align="center" size="2" width="100%">
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="article-potf text-center">
                    <div class="top-text-pt wow fadeInUp" data-wow-offset="150">
                        <h2>Портфолио</h2>

                    </div>
                    <div class="top-menu-pt">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="top-menu filter_div controls">
                                <ul class="inline">
                                    <li class="wow bounceInLeft filter active" type="button" data-filter=".all">Все
                                        работы
                                    </li>
                                    <li class="wow bounceInLeft filter" type="button" data-filter=".category-1">"под
                                        ключ"
                                    </li>
                                    <li class="wow bounceInRight filter" type="button" data-filter=".category-2">
                                        Верстка
                                    </li>
                                    <li class="wow bounceInRight filter" type="button" data-filter=".category-3">
                                        Прочее
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="Container" class="content-potfol container">
                        <div class="mix all category-2  category-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 work-cont">
                            <img src="img/work1.png" alt="Пример" class="work">
                            <div class="port-item-cont">
                                <h4>Птицефабрика Синявинская</h4>
                                <p>Краткое описание</p>
                                <button type="button" class="btn-more" data-toggle="modal" data-target="#modal-1">
                                    Подробнее
                                </button>
                            </div>
                        </div>
                        <div class="mix all category-2 col-lg-3 col-md-3 col-sm-3 col-xs-6 work-cont">
                            <img src="img/work2.png" alt="Пример" class="work">
                            <div class="port-item-cont">
                                <h4><br>Бетховен</h4>
                                <p>Краткое описание</p>
                                <button type="button" class="btn-more" data-toggle="modal" data-target="#modal-2">
                                    Подробнее
                                </button>
                            </div>
                        </div>
                        <div
                            class="mix all category-1 category-3 category-2 col-lg-3 col-md-3 col-sm-3 col-xs-6 work-cont">
                            <img src="img/work3.png" alt="Пример" class="work">
                            <div class="port-item-cont">
                                <h4><br>ATSC</h4>
                                <p>Краткое описание</p>
                                <button type="button" class="btn-more" data-toggle="modal" data-target="#modal-3">
                                    Подробнее
                                </button>
                            </div>
                        </div>

                        <div class="mix all category-2 col-lg-3 col-md-3 col-sm-3 col-xs-6 work-cont">
                            <img src="img/work4.png" alt="Пример" class="work">
                            <div class="port-item-cont">
                                <h4><br>Portfolio</h4>
                                <p>Краткое описание</p>
                                <button type="button" class="btn-more" data-toggle="modal" data-target="#modal-4">
                                    Подробнее
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--КОНТАКТЫ-->
    <hr align="center" size="2" width="100%">
    <section id="contacts">
        <div class="container">
            <div class="row">
                <div class="cont-comm text-center">
                    <div class="top-text-comm wow fadeInUp" data-wow-offset="150">
                        <h2>Контакты</h2>

                        <h4>Если у вас есть вопросы, я с радостью отвечу на них!<br>
                            Для этого свяжитесь со мной удобным для вас способом и я отвечу Вам в ближайшее время!</h4>
                    </div>
                    <div class="info">
                        <div class="col-md-3 col-sm-3 col-xs-6 wow bounceInLeft" data-wow-offset="100">
                            <div class="contact-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <h4>E-mail:</h4>
                                <p>zollex69@gmail.com</p>
                            </div>
                            <div class="contact-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-vk" aria-hidden="true"></i>
                                </div>
                                <h4>Вконтаке:</h4>
                                <a href="https://vk.com/vanchoice">https://vk.com/vanchoice</a>
                            </div>
                            <div></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 wow bounceInLeft" data-wow-offset="100">
                            <div class="contact-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                </div>
                                <h4>Web-сайт:</h4>
                                <a href="index.html">readycodeee.github.io</a>
                            </div>
                            <div class="contact-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-skype" aria-hidden="true"></i>
                                </div>
                                <h4>Skype:</h4>
                                <p>zollex69</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 wow bounceInRight" data-wow-offset="100">
                            <div class="top-text-message">
                                <h4>Так же Вы можете написать свое сообщения прямо здесь!<br>Вам необходио заполнить все
                                    поля!</h4>
                            </div>
                            <div class="message">
                                <form method="post" action="https://formspree.io/zollex69@gmail.com">
                                    <p>Ваше имя
                                        <br>
                                        <input type="text" size="32" required name="your_name" placeholder="Ваше имя">
                                    </p>
                                    <p>Ваш E-mail
                                        <br>
                                        <input type="email" size="32" required name="email"
                                               placeholder="example@mail.com">
                                    </p>
                                    <p>Ваше сообщение
                                        <br>
                                        <textarea type="text" name="comment" cols="34" rows="5" name="messages"
                                                  placeholder="Ваше сообщение"></textarea>
                                    </p>
                                    <p>
                                        <input type="submit" value="Send" class="btn-sub">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ПОДВАЛ-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-10">
                    <div class="text-info">
                        <p>© 2016 Кулинич Иван. Профессиональное создание сайтов</p>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 col-md-offset-6 col-sm-offset-6">
                    <div class="social">
                        <a href="https://vk.com/vanchoice">
                            <i class="fa fa-vk" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<div class="modal" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title">Подробнее</h3>
                <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="img-content">
                    <img src="img/pic-more1.png" alt="Синявинска Фабрика">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-danger" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title">Подробнее</h3>
                <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="img-content">
                    <img src="img/pic-more2.png" alt="Картинка сайта">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-danger" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title">Подробнее</h3>
                <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="img-content">
                    <img src="img/pic-more3.png" alt="Картинка сайта">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-danger" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title">Подробнее</h3>
                <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="img-content">
                    <img src="img/pic-more4.png" alt="Картинка сайта">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-danger" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
</body>
<link rel="stylesheet" href="{!! asset('css/style.css')!!}">
<link rel="stylesheet" href="{!! asset('css/animate.css')!!}">
<link rel="stylesheet" href="{!! asset('css/jquery.circliful.css')!!}">
<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css')!!}">
<script src="{!! asset('js/jquery.circliful.min.js')!!}"></script>
<script src="{!! asset('js/wow.min.js')!!}"></script>
<script src="{!! asset('js/mixitup.min.js')!!}"></script>

<style>
    * {
        margin: 0;
        padding: 0
    }

    body {
        background: #000;
    }

    canvas {
        display: block;
        width: 100% !important;
    }
</style>

<script>

    // Initialising the canvas
    var canvas = document.querySelector('canvas'),
        ctx = canvas.getContext('2d');

    // Setting the width and height of the canvas
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Setting up the letters
    var letters = '10';
    letters = letters.split('');

    // Setting up the columns
    var fontSize = 10,
        columns = canvas.width / fontSize;

    // Setting up the drops
    var drops = [];
    for (var i = 0; i < columns; i++) {
        drops[i] = 1;
    }

    // Setting up the draw function
    function draw() {
        ctx.fillStyle = 'rgba(0, 0, 0, .1)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        for (var i = 0; i < drops.length; i++) {
            var text = letters[Math.floor(Math.random() * letters.length)];
            ctx.fillStyle = '#0f0';
            ctx.fillText(text, i * fontSize, drops[i] * fontSize);
            drops[i]++;
            if (drops[i] * fontSize > canvas.height && Math.random() > .95) {
                drops[i] = 0;
            }
        }
    }

    // Loop the animation
    setInterval(draw, 33);

</script>

<!-- Mirrored from readycodeee.github.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Nov 2021 07:53:52 GMT -->
</html>
