<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Pattaya|Yanone+Kaffeesatz" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="jquery-3.3.1.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="swiper/css/swiper.min.css">
        <script src="slider.js"></script>
        <script src="swiper/js/swiper.min.js"></script>
    </head>
    <body>
        <?php
        $key='ru';
        if(strlen($_GET['lid']) > 0)
        {
            $key = $_GET['lid'];
        }

        $arr['ru'] = array(
        'text1' => 'Главная',
        'text2' => 'Наш день',
        'text3' => 'Полезная информация',
        'text4' => 'Предпочтения и пожелания',
        'text5' => 'Приглашаем вас',
        'text6' => 'Оксана + Андрей',
        'text7' => 'Мы очень хотим разделить радость этого дня с вами!',
        'text8' => 'Территория',
        'text9' => 'Когда',
        'text10' => '9 июня, воскресенья, 2019',
        'text11' => 'Венчание в 13:00',
        'text12' => 'Торжество в 15:00',
        'text13' => 'Где',
        'text14' => 'Храм Святого Николая Чудотворца на водах',
        'text15' => 'ул. Набережно-крещатицкая, 8-а',
        'text16' => 'Киев, Украина',
        'text17' => 'Как добраться',
        'text18' => 'С места венчания в "Sobi club" будет организован трансфер. Как добраться до "Sobi club", если вас не будет на венчании -',
        'text19' => 'смотрите тут',
        'text20' => 'На територии находится пляж:) можно смело брать плавательные костюмы и добавлять атмосферы в наш общий праздник :)',
        'text21' => 'Смотреть карту',
        'text22' => 'Дорогие друзья, если у вас есть желание или того требует традиция подарить цветы на свадьбу, просим воздержаться,поскольку очень жаль,что они завянут по приезду с нашего свадебного путешествия и мы не успеем насладиться их красотой',
        'text23' => 'Вместо этого есть альтернатива, такая себе игра : можно подарить бутылочку сухого вина. Этому, кстати, будет уделено некоторое время на мероприятии',
        'text24' => 'Имеется ввиду, что мы не привязываем вас к определенному стилю или цвету. Однако, для общей атмосферы, хотели бы попросить прийти в одежде пастельных тонов. Спасибо:)',
        'text25' => 'В жизни есть счастливые и радостные моменты, которые хочется разделить с дорогими людьми. Поэтому мы приглашаем вас открыть вместе с нами новую страницу книги нашей жизни.',
        // 'text26' => 'Подтвердите,пожалуйста, свое присутствие на празднике до 30.04.2019',
        'text27' => 'Обрадуйте нас своим присутствием! :)',
        'text28' => '&copy 2019 Оксана и Андрюша. Сайт создан с любовью',
        );
        $arr['en'] = array(
            'text1' => 'Main',
            'text2' => 'Our Day',
            'text3' => 'Useful information',
            'text4' => 'Wishes and preferences',
            'text5' => 'We invite you',
            'text6' => 'Oksana + Andrew',
            'text7' => 'We\'d really like to separate gladness of this day with you!',
            'text8' => 'Territory',
            'text9' => 'When',
            'text10' => 'June 9, Sunday, 2019',
            'text11' => 'Church wedding at 13:00',
            'text12' => 'Celebration at 15:00',
            'text13' => 'Where',
            'text14' => 'St. Nicholas Church on the river',
            'text15' => 'Naberezhno-Khreshatytska str., 8-а',
            'text16' => 'Kyiv, Ukraine',
            'text17' => 'How to get',
            'text18' => 'A transfer will be organized from the place of church wedding to the "Sobi Club". How to get to "Sobi Club" if you are not at the church wedding -',
            'text19' => 'see here',
            'text20' => 'There is a beach nearby:) you can take swimming dresses and add atmosphere in our common holiday:)',
            'text21' => 'See the map',
            'text22' => 'Dear friends, if you have a desire or if the tradition requires giving flowers for wedding, we ask to abstain, it would be a pity, that they would wilt on arrival from our honeymoon and we will not have time to enjoy their beauty',
            'text23' => 'Instead, there is an alternative, such a game: you can give a bottle of dry wine. This, by the way, will be given some time at the event.',
            'text24' => 'Means, that we don\'t attach you to certain style and color. However, for overall atmosphere, would like to ask you to come in the clothes of pastel tones. Thank\'s:)',
            'text25' => 'In the life there are happy and joyful moments which want to separate with lovely people. Therefore we invite you to open a new page of the book of our life together with us.',
            // 'text26' => 'Confirm, please, your presence at the celebration before 30.04.2019',
            'text27' => 'Make us happy with your presence! :)',
            'text28' => '&copy 2019 Оксана и Андрюша. Developed with love',
        );
        ?>
        <section class="banner">
            <div class="overlay">
                <header class="clearfix">
                    <nav id="menu">
                        <div class="logo">AlO</div>
                        <ul>
                            <li><?php echo $arr[$key]['text1'];?></li>
                            <li><a href="#wedding"><?php echo $arr[$key]['text2']?></a></li>
                            <li><a href="#get"><?php echo $arr[$key]['text3']?></a></li>
                            <li><a href="#wish"><?php echo $arr[$key]['text4']?></a></li>
                            <li><a href="#invitation"><?php echo $arr[$key]['text5']?></a></li>
                        </ul>
                        <!-- <div></div><a href="?lid=ru">Русский</a><br><a href="?lid=en">English</a> -->
                        <!-- <div class="logo-right">OlA</div> -->
                    </nav>
                </header>
                <h1><?php echo $arr[$key]['text6']?></h1>
                <div class="banner-date">
                    <p><?=$arr[$key]['text7']?></p>
                    <span>09.06.2019</span>
                </div>
            </div>
        </section>
    <wrapper class = "grid-wrapper">
        <div id="wedding"class="our-wedding">
            <h2><?php echo $arr[$key]['text2']?></h2>
            <div class="our-wedding_grid">
                <div class="when">
                    <h3><?php echo $arr[$key]['text9']?></h3>
                    <span><?php echo $arr[$key]['text10']?></span>
                    <span><?php echo $arr[$key]['text11']?></span>
                    <span><?php echo $arr[$key]['text12']?></span>
                </div>
                <div class="where">
                    <h3><?php echo $arr[$key]['text13']?></h3>
                    <span><?php echo $arr[$key]['text14']?></span>
                    <span><?php echo $arr[$key]['text15']?></span>
                    <span><?php echo $arr[$key]['text16']?></span>
                </div>
            </div>
        </div>
        <div id="get" class="how-get">
            <div class="how-get_overlay">
                <div>
                    <h2><?php echo $arr[$key]['text3']?><br></h2>
                    <h3><?php echo $arr[$key]['text17']?></h3>
                    <div>
                        <span><?php echo $arr[$key]['text18']?><a class="view-map look-here"><?php echo $arr[$key]['text19']?></a>. </span>
                    </div>
                    <h3><?php echo $arr[$key]['text8']?></h3>
                    <div>
                        <span><?php echo $arr[$key]['text20']?></span>
                    </div>
                    <a class="view-map view-map_btn"><?php echo $arr[$key]['text21']?></a>
                </div>
            </div>
        </div>
        <div class="g-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2533.253755279317!2d30.5356313516794!3d50.58523667939367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d48637000bf7%3A0xb35f59f06ea54714!2z0JfQsNCz0L7RgNC-0LTQvdGL0Lkg0LrQu9GD0LEgU29iaSBDbHVi!5e0!3m2!1sru!2sua!4v1554403556474!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="wish" class="wishes">
            <h2><?php echo $arr[$key]['text4']?></h2>
            <div class="wishes-grid">
                <div class="flowers">
                    <img src="images/flowers.png" alt="">
                    <p><?php echo $arr[$key]['text22']?></p>
                </div>
                <div class="wine">
                    <img src="images/wine2.png" alt="">
                    <p><?php echo $arr[$key]['text23']?></p>
                </div>
                <div class="dress">
                    <div class="dress_noCode">
                        <img src="images/calm.png" alt="">
                        <p>there's<br> <span>NO <br>DRESS CODE</span></p>
                    </div>
                    <p><?php echo $arr[$key]['text24']?></p>
                </div>
            </div>
        </div>
        <div id="invitation" class="invite">
            <div class="invite_overlay">
                <div>
                    <h2><?php echo $arr[$key]['text5']?></h2>
                    <h3><?php echo $arr[$key]['text25']?></h3>
                    <!--<span><?php echo $arr[$key]['text26']?></span>-->
                    <br><span><?php echo $arr[$key]['text27']?></span>
                </div>
            </div>
        </div>
        <footer>
            <span>#OksanaAndAndrew</span>
            <p><?php echo $arr[$key]['text28']?></p>
        </footer>
    </wrapper>
  </body>
    <script>
        $(document).ready(function(){
            $("#menu").on("click","a", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();
                //забираем идентификатор бока с атрибута href
                var id  = $(this).attr('href'),
                //узнаем высоту от начала страницы до блока на который ссылается якорь
                    top = $(id).offset().top;
                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1000);
            });
            $(function() {
                $('.view-map').click(function() {
                    $('.g-map').toggleClass('g-map_show');
                });
            });
            (function () {
                var _overlay = document.getElementsByClassName('how-get');
                var _clientY = null; // remember Y position on touch start

                _overlay.addEventListener('touchstart', function (event) {
                    if (event.targetTouches.length === 1) {
                        // detect single touch
                        _clientY = event.targetTouches[0].clientY;
                    }
                }, false);

                _overlay.addEventListener('touchmove', function (event) {
                    if (event.targetTouches.length === 1) {
                        // detect single touch
                        disableRubberBand(event);
                    }
                }, false);

                function disableRubberBand(event) {
                    var clientY = event.targetTouches[0].clientY - _clientY;

                    if (_overlay.scrollTop === 0 && clientY > 0) {
                        // element is at the top of its scroll
                        event.preventDefault();
                    }

                    if (isOverlayTotallyScrolled() && clientY < 0) {
                        //element is at the top of its scroll
                        event.preventDefault();
                    }
                }

                function isOverlayTotallyScrolled() {
                    // https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions
                    return _overlay.scrollHeight - _overlay.scrollTop <= _overlay.clientHeight;
                }
            }())
        });
    </script>
</html>