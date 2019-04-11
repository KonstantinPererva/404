<?php

define("VER_JS", '1.22');
define("VER_CSS", '1.31');

$starts = [
  "triathlon" => [
    [ "name"     => "IRONMAN 70.3 GDYNIA",
      "country"  => "Poland",
      "city"     => "Gdynia",
      "date"     => "19 Авнуста 2019",
      "distance" => "Триатлон 1900 / 90 / 21.1",
      "reg-link" => "#",
      "id"       => "1",
      "symbol"   => "т",
    ],

    ["name"     => "Dnipro Triathlon Fest 2019",
      "country"  => "Украина",
      "city"     => "Днепр",
      "date"     => "08 Июня 2019",
      "distance" => "Триатлон 800 / 20 / 5",
      "reg-link" => "#",
      "id"       => "2",
      "symbol"   => "т",
    ],

    /*["name"     => "Полтава Триатлон Спринт",
      "country"  => "Украина",
      "city"     => "Полтава",
      "date"     => "Июнь 2019",
      "distance" => "Триатлон 800 / 20 / 5",
      "reg-link" => "#",
      "id"       => "3",
      "symbol"   => "т",
    ],*/

    ["name"     => "IRON WAY Kharkiv Man sprint",
      "country"  => "Украина",
      "city"     => "Харьков",
      "date"     => "Июль 2019",
      "distance" => "Триатлон 800 / 20 / 5",
      "reg-link" => "#",
      "id"       => "4",
      "symbol"   => "т",
    ],

    ["name"     => "IRONMAN ITALY EMILIA-ROMAGNA",
      "country"  => "Italy",
      "city"     => "Cervia",
      "date"     => "21 Сентября 2019",
      "distance" => "Дистанция 3.8 / 180 / 42.2",
      "reg-link" => "#",
      "id"       => "5",
      "symbol"   => "т",
    ],

    ["name"     => "IRON WAY 70.3",
      "country"  => "Украина",
      "city"     => "Харьков",
      "date"     => "Август 2019",
      "distance" => "Триатлон 1900 / 90 / 21.1",
      "reg-link" => "#",
      "id"       => "6",
      "symbol"   => "т",
    ],

  ],
  "marathon"  => [
    [
      "name"     => "Kharkiv Half Marathon",
      "country"  => "Украина",
      "city"     => "Харьков",
      "date"     => "24 Марта 2019",
      "distance" => "Бег 21.1 км.",
      "reg-link" => "#",
      "id"       => "8",
      "symbol"   => "м",
    ],
    [
      "name"     => "ZHYTLOBUD-1 Kharkiv International Marathon",
      "country"  => "Украина",
      "city"     => "Харьков",
      "date"     => "14 Апреля 2019",
      "distance" => "Бег 42.2 км.",
      "reg-link" => "#",
      "id"       => "9",
      "symbol"   => "м",
    ],
    [
      "name"     => "Athens Marathon",
      "country"  => "Греция",
      "city"     => "Афины",
      "date"     => "ноябрь 2019",
      "distance" => "Бег 42.2 км.",
      "reg-link" => "#",
      "id"       => "7",
      "symbol"   => "м",
    ],
  ],
];
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PKK35VH');</script>
	<!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script>
		if (window.innerWidth > 1200) {
			document.write(
				"<link href='./js/onepage-scroll/onepage-scroll.css' rel='stylesheet' type='text/css'>"
			);
		}
  </script>
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="./css/style.css?<?= VER_CSS; ?>">
  <link rel="stylesheet" href="./gulp/app/css/style.css">

  <title>Team 404 подготовка к марафону и триатлону в Харькове</title>
<meta name="description" content="Стань Ironman, марафонцем, пловцом и просто здоровым счастливым человеком под руководством профессиональных тренеров Team404"/>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKK35VH"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


<div class="main">
  <!-- start -->
  <section data-slide="start" class="start flex-box slide">

    <header class="flex-box">
      <div class="logo">
        <img src="img/logo.png" alt="logo" title="logo">
      </div>
      <div class="phone" data-phone="+380938476795">+38 093 847 67 95</div>
      <div class="social">
        <a href="https://www.instagram.com/team404.official/" target="_blank">
        <span>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 169.063 169.063"
             xml:space="preserve">
          <g>
            <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
              c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
              c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
              c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
            <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
              C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
              c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
            <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
              c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
              C135.661,29.421,132.821,28.251,129.921,28.251z"/>
          </g>
      </svg>
      </span>
        </a>
        <a href="https://www.youtube.com/channel/UCAPvzH2uFQUxwivVq4KhFOw" target="_blank">
        <span>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 512 512" xml:space="preserve">
	<g>
		<path d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
			c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
			C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
			c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
			c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
			C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z"/>
	</g>
</svg>
      </span>
        </a>
        <a href="https://www.facebook.com/Team404-1601179950004340/?modal=admin_todo_tour" target="_blank">
        <span>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 310 310" xml:space="preserve">
      <g id="">
        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
          c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
          V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
          C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
          c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
      </g>
      </svg>
      </span>
        </a>
      </div>
    </header>

    <div class="content">

      <div class="mobile-menu">
        <svg id="open-menu" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 53 53" xml:space="preserve">
          <path d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z"/>
              <path d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z"/>
              <path d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z"/>
        </svg>

        <svg id="close-menu" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
             xmlns:xlink="http://www.w3.org/1999/xlink">
          <g>
            <path fill="#1D1D1B"
                  d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
          </g>
        </svg>
      </div>

      <div class="menu">
        <nav data-animated="fadeInLeft" class="flex-box my-animate">
          <ul>
<!--            <li data-index-slide="1"><a href="#start">Главная</a></li>-->
            <li data-index-slide="2"><a href="#team">Команда</a></li>
            <li data-index-slide="3"><a href="#philosophy">Философия</a></li>
            <li data-index-slide="4"><a href="#directions">Направления</a></li>
            <li data-index-slide="5"><a href="#cost">Стоимость</a></li>
            <li data-index-slide="6"><a href="#directions-coach">Тренеры</a></li>
            <li data-index-slide="7"><a href="#start-map">Карта основных стартов</a></li>
            <!--<li data-index-slide="8"><a href="#shop">магазин</a></li>-->
            <li data-index-slide="8"><a href="#sponsors">Спонсоры</a></li>
            <!--<li>новости</li>-->
            <!--<li>приложение</li>-->
          </ul>
        </nav>
      </div>

      <div class="slider-content">
        <h2 data-animated="fadeInRight" class="slider-title my-animate">OLD YOU<br>NOT FOUND</h2>

        <h3 data-animated="fadeIn" class="slider-title-small my-animate delay-1s">Подготовка к триатлону, марафону и <span class="slider-title-small__mark">IRONMAN</span> с любого уровня</h3>

        <p data-animated="fadeIn" class="slider-text my-animate delay-1s faster">Team 404 – команда, в которой под руководством профессиональных тренеров, каждый, вне зависимости от исходного уровня, сможет стать Ironman, марафонцем, пловцом и просто здоровым счастливым человеком.</p>

        <div>
          <a href="#" class="btn-tur my-animate delay-1s" data-animated="fadeIn">
            <span class="btn-tur__text">Присоединиться к команде</span>
          </a>
        </div>
      </div>

      <div class="banners"></div>
    </div>


  </section>

  <!-- team -->
  <section data-slide="team" class="team flex-box slide">
    <div class="name-block"><span>Команда</span></div>

    <div class="content flex-box">

      <div class="team-info">
        <div class="title-team">Больше, чем люди,<br>тренирующиеся вместе</div>
        <div class="title-des"><strong>team404</strong> - место, где в тебя поверят и поддержат любые твои безумства. В
          команду не берут кого попало, команда- это почти семья. Вне зависимости от уровня подготовки и целей, именно
          здесь ты найдешь тех, кто должен быть рядом для комфортного достижения цели.
        </div>

        <div class="m-team-photo">
          <img src="./img/team.jpg" alt="team404">
        </div>

        <div class="team-statistic">
          <div class="statistic-text">В команде сегодня:</div>
          <div data-animated="fadeInUp" class="flex-box statistic-data my-animate">
            <div>
              <p class="st-num">2</p>
              <p class="st-text">проф.<br>тренера</p>
            </div>
            <div>
              <p class="st-num">6</p>
              <p class="st-text">финишеров<br>IRONMAN</p>
            </div>
            <div>
              <p class="st-num">20+</p>
              <p class="st-text">финишеров<br>1/2 IRONMAN</p>
            </div>
            <div>
              <p class="st-num">20+</p>
              <p class="st-text">пробежавших<br>марафон</p>
            </div>
            <div>
              <p class="st-num">50+</p>
              <p class="st-text">счастливых<br>учеников</p>
            </div>
          </div>
          <div class="go-in-team flex-box">
            <p class="statistic-text">и это только начало...</p>
            <div>
              <a class="btn-tur ppf">
                  <span class="btn-tur__text">Хочу в team404</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="team-photo"></div>
    </div>
  </section>

  <!-- philosophy -->
  <section data-slide="philosophy" class="philosophy flex-box slide">

    <div class="name-block"><span>Философия</span></div>

    <div class="content">
      <p data-animated="fadeInRight" class="philosophy-big-text flex-box my-animate">Мы в <span>team404</span>
        считаем,<br>
        что нет ничего важнее<br>
        для команды, чем <span>люди</span></p>
      <p>Каждая успешная команда строится вокруг
        профессионального тренера и состоит из крутых спортсменов.
      </p>
      <p>И мы тут сейчас не про результаты на соревнованиях,
        а про атмосферу в коллективе и огромную поддержку
        со всех сторон внутри team404.</p>
    </div>

  </section>

  <!-- directions -->
  <section data-slide="directions " class="directions flex-box slide">
    <div class="black-overlay"></div>
    <div class="name-block">
      <span>Направления</span>
      <div class="switch">
        <span class="active" data-content="triathlon">Триатлон</span>
        <span data-content="run">Бег</span>
      </div>
    </div>
    <!-- triathlon -->
    <div class="content dir-triathlon">
      <div class="direction-triathlon">
        <div class="triathlon-description">
          <div class="directions-title">Триатлон</div>
          <div data-animated="fadeIn" data-delay="300" class="directions-subtitle my-animate">Плавание. Вело. Бег.</div>
          <div data-animated="fadeInUp" data-delay="300" class="directions-text my-animate">Триатлон объединяет в себе
            три популярных и любимых всеми вида спорта. Гармоничное развитие организма во всех направлениях, масса
            здоровья и незабываемые эмоции от соревнований на любом уровне привели его к огромной популярности среди
            любителей в Европе и США. Триатлон в Харькове еще совсем молод, но с каждым месяцем число занимающихся в
            team404 растет почти так же быстро, как уровень результатов наших учеников.
          </div>
          <div class="ironman-block">
            <div class="ironman-title">Iron<span>m</span>an</div>
            <div class="ironman-subtitle">соревнования, о которых мечтает каждый спортсмен.</div>
            <div class="iroman-distances">
              <div><img src="/img/swim.png" alt="">
                <span>3,9 км</span>
              </div>
              <div><img src="/img/velo.png" alt="">
                <span>180 км</span>
              </div>
              <div><img src="/img/run.png" alt="">
                <span>42,2 км</span>
              </div>
            </div>
            <p>В нашей команде преодоление IRONMAN становится реальностью уже через 1-2 года занятий триатлоном.</p>
          </div>
        </div>

        <div class="triathlon-photo">
        </div>
      </div>
    </div>


    <!-- run -->
    <div class="content dir-run">
      <div class="direction-triathlon">
        <div class="triathlon-description">
          <div class="directions-title">Бег</div>
          <div data-animated="fadeIn" data-delay="300" class="directions-subtitle my-animate">
            Если хочешь быть сильным — бегай,<br>
            хочешь быть красивым — бегай,<br>
            хочешь быть умным — бегай.</div>
          <div data-animated="fadeInUp" data-delay="300" class="directions-text my-animate" style="margin-bottom: 50px">
            Беговые тренировки в Харькове стали культовым спортивным направлением совсем недавно. Многие на сегодняшний день вышли на улицу и начали заниматься этим прекрасным видом спорта. Но мало кто делает это обдуманно и полезно.
          </div>
          <div class="ironman-block">
            <div class="ironman-title" style="margin-bottom: 15px">МАРАФОН 42,195 км.</div>
            <div class="ironman-subtitle">
              легендарная дистанция, о которой (тайно)<br>
              мечтает каждый бегун-любитель*</div>
            <p>В team404 подготовка к марафону с нуля<br>
              занимает около 1 года.</p>
            <p style="margin-top: 50px">* всего 1% людей преодолевают хотя бы 1 марафон</p>
          </div>
        </div>

        <div class="triathlon-photo">
        </div>
      </div>
    </div>
  </section>

  <!-- cost -->
  <section data-slide="cost" class="cost flex-box slide">
    <div class="name-block">
      <span>Стоимость</span>
      <div class="switch">
        <span data-content="triathlon" class="active">Триатлон</span>
        <span data-content="run">Бег</span>
      </div>
    </div>
    <div class="content cost-triathlon">
      <div class="flex-box">
        <div class="cost-price">
          <p>150 <span><sup>$</sup>/<sub>мес</sub></span></p>
          <div class="discount">
            <p><span>скидка 20%</span> при оплате за год</p>
          </div>
        </div>
        <div class="cost-description">
          <div class="cost-title">Что входит</div>
          <ul class="cost-text">
            <li>идивидуальный план подготовки</li>
            <li>обучение экономичной и безопасной технике</li>
            <li>персональные и групповые тренировки по плаванию, вело, бегу</li>
            <li>командная экипировка (велоформа, трисьют, футболка, кепка)</li>
            <li>консультации по питанию и составление диеты</li>
            <li>питание на ironman и подводящих стартах</li>
            <li>консультации по фармакологической поддержке</li>
            <li>ответы на все околоспортивные вопросы</li>
          </ul>
        </div>
      </div>
      <button type="button" class="white-btn ppf">Записаться</button>
    </div>
    <div class="content cost-run">
      <div class="flex-box">
        <div class="cost-price">
          <p>150 <span><sup>$</sup>/<sub>мес</sub></span></p>
          <div class="discount">
            <p><span>скидка 20%</span> при оплате за год</p>
          </div>
        </div>
        <div class="cost-description">
          <div class="cost-title">Что входит</div>
          <ul class="cost-text">
            <li>идивидуальный план подготовки</li>
            <li>обучение экономичной и безопасной технике</li>
            <li>персональные и групповые тренировки</li>
            <li>командная экипировка</li>
            <li>консультации по питанию и составление диеты</li>
            <li>питание на марафон и подводящих стартах</li>
            <li>консультации по фармакологической поддержке</li>
            <li>ответы на все околоспортивные вопросы</li>
          </ul>
        </div>
      </div>
      <button type="button" class="white-btn ppf">Записаться</button>
    </div>

  </section>

  <!-- coach -->
  <section data-slide="directions-coach" class="directions-coach flex-box slide">

    <div class="name-block"><span>Тренеры</span></div>

    <div class="content">
      <div class="flex-box">
        <div class="coach1">
          <div data-animated="fadeInLeft" class="trainer-photo my-animate">
            <img src="./img/coach.png" alt="coach">
          </div>
          <div class="trainer-description">
            <div class="trainer-name">Владимир Остриков</div>
            <div class="trainer-text">
              Более 12 лет в триатлоне<br>
              Более 6 лет тренерского опыта<br>
              Неоднократный чемпион Украины по триатлону среди юношей<br>
              КМС по триатлону<br>
              КМС по плаванию<br>
              Окончил академию физической культуры<br>
              По его планам тренируются все ученики  team404, результаты вы видите
            </div>
            <div class="social">
        <span>
          <a href="https://www.instagram.com/ostrikov_coach_team404" target="_blank">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 169.063 169.063"
                 xml:space="preserve">
            <g>
              <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
              <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
              <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                C135.661,29.421,132.821,28.251,129.921,28.251z"/>
            </g>
        </svg>
          </a>
        </span>
              <span>
          <a href="https://www.facebook.com/profile.php?id=100011584982670" target="_blank">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 310 310" xml:space="preserve">
      <g id="">
        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
          c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
          V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
          C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
          c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
      </g>
      </svg>
          </a>
        </span>
            </div>
          </div>
        </div>
        <div class="coach2">
          <div class="trainer-description">
            <div class="trainer-name">Игорь Поливаный</div>
            <div class="trainer-text">
              Лидер team404<br>
              рекордсмен Украины как самый молодой IRONMAN в истории<br>
              Серебряный призер лиги IRON WAY 2018<br>
              Один из сильнейших триатлетов-любителей страны<br>
              Двукратный IRONMAN с лучшим результатом 9.56<br>
              Победитель IRON WAY Kharkiv Sprint 2018<br>
              Будущий участник чемпионата мира на Гавайях
            </div>
            <div class="social">
        <span>
          <a href="https://www.instagram.com/ostrikov_coach_team404" target="_blank">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 169.063 169.063"
                 xml:space="preserve">
            <g>
              <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
              <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
              <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                C135.661,29.421,132.821,28.251,129.921,28.251z"/>
            </g>
        </svg>
          </a>
        </span>
              <span>
          <a href="https://www.facebook.com/profile.php?id=100011584982670" target="_blank">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 310 310" xml:space="preserve">
      <g id="">
        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
          c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
          V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
          C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
          c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
      </g>
      </svg>
          </a>
        </span>
            </div>
          </div>
          <div data-animated="fadeInRight" class="trainer-photo my-animate">
            <img src="./img/coach2.png" alt="coach">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- start map -->
  <section data-slide="start-map" class="start-map flex-box slide">
    <div class="name-block"><span>Карта стартов</span></div>
    <div class="content">
      <div class="start-map-main">
        <div class="map-img">
          <img src="img/map.png" alt="Карта стартов">
          <?php foreach($starts['triathlon'] as $start): ?>
            <div class="point" id="p<?= $start['id'] ; ?>"><span><?= $start['symbol'] ; ?></span></div>
          <?php endforeach; ?>

          <?php foreach($starts['marathon'] as $start): ?>
            <div class="point" id="p<?= $start['id'] ; ?>"><span><?= $start['symbol'] ; ?></span></div>
          <?php endforeach; ?>
          <div class="point" id="kharkov" data-id="p4,p6,p8,p9"><span>k</span></div>
        </div>
        <div class="start-map-left-block">
          <div class="start-map-title">
            Главные старты<br>
            сезона 2019
          </div>
          <div class="start-mobile">
            <div class="start-list-block">
              <div class="point"><span>т</span></div><span>Триатлон</span>
              <br>
              <div class="start-list">
                <?php $i = 1; ?>
                <?php foreach($starts['triathlon'] as $start): ?>
                  <div class="about-start-mobile">
                    <div class="title-start">
                      <?= $start['name']; ?>
                    </div>
                    <div data-id="p<?= $start['id']; ?>" class="des-start">
                      <div>
                        <div>Название</div>
                        <div class="des-start-name"><?= $start['name']; ?></div>
                      </div>
                      <div>
                        <div>Страна</div>
                        <div><?= $start['country']; ?></div>
                      </div>
                      <div>
                        <div>Город</div>
                        <div><?= $start['city']; ?></div>
                      </div>
                      <div>
                        <div>Дата</div>
                        <div class="des-start-date"><?= $start['date']; ?></div>
                      </div>
                      <div>
                        <div>Дистанция</div>
                        <div class="des-start-distance"><?= $start['distance']; ?></div>
                      </div>
                      <?php if (!empty($start['reg-link'])) : ?>
                        <div>
                          <div>На старт</div>
                          <div><a href="<?= $start['reg-link']; ?>">зарегистрироваться</a></div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="start-list-block">
              <div class="point"><span>м</span></div><span>Марафон</span>
              <br>
              <div class="start-list">
                <?php foreach($starts['marathon'] as $start): ?>
                  <div class="about-start-mobile">
                    <div class="title-start">
                      <?= $start['name']; ?>
                    </div>
                    <div data-id="p<?= $start['id']; ?>" class="des-start">
                      <div>
                        <div>Название</div>
                        <div><?= $start['name']; ?></div>
                      </div>
                      <div>
                        <div>Страна</div>
                        <div><?= $start['country']; ?></div>
                      </div>
                      <div>
                        <div>Город</div>
                        <div><?= $start['city']; ?></div>
                      </div>
                      <div>
                        <div>Дата</div>
                        <div><?= $start['date']; ?></div>
                      </div>
                      <div>
                        <div>Дистанция</div>
                        <div><?= $start['distance']; ?></div>
                      </div>
                      <?php if (!empty($start['reg-link'])) : ?>
                        <div>
                          <div>На старт</div>
                          <div><a href="<?= $start['reg-link']; ?>">зарегистрироваться</a></div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </div>

            </div>
          </div>
        </div>
        <div class="start-map-description">

          <div class="about-start-title">
            О старте
          </div>
          <?php foreach($starts['triathlon'] as $start): ?>
            <div class="about-start">
              <div class="des-start">
                <div>
                  <div>Название</div>
                  <div><?= $start['name']; ?></div>
                </div>
                <div>
                  <div>Страна</div>
                  <div><?= $start['country']; ?></div>
                </div>
                <div>
                  <div>Город</div>
                  <div><?= $start['city']; ?>4</div>
                </div>
                <div>
                  <div>Дата</div>
                  <div><?= $start['date']; ?></div>
                </div>
                <div>
                  <div>Дистанция</div>
                  <div><?= $start['distance']; ?></div>
                </div>
                <?php if (!empty($start['reg-link'])) : ?>
                  <div>
                    <div>На старт</div>
                    <div><a href="<?= $start['reg-link']; ?>">зарегистрироваться</a></div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <?php break; ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="start-map-bottom">
        <div class="start-training">
          <div>
            <p>Готовься к любому из них<br>
              вместе с нами</p>
          </div>
          <div>
            <button class="black-btn ppf">начать подготовку</button>
          </div>
        </div>
        <div class="warning">
          <div class="warning-img">
            <img src="/img/!.png" alt="">
          </div>
          <div>
            <p>team404 не работает с людьми, купившими
              слоты на старт без согласования с тренером</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- shop -->
  <!--<section data-slide="shop" class="shop flex-box slide">

    <div class="name-block">
      <span data-name="product-list">Магазин</span>
      <span data-name="payment">Оплата</span>
      <span data-name="deliver">Досавка</span>
    </div>

    <div class="content product-list">
      <div data-animated="fadeInLeft" class="product p1 my-animate">

        <p class="name-product">Футболка</p>

        <div class="img-product">
          <img src="./img/shirt.png" alt="shirt-team404">
        </div>
        <div class="product-options">
          <p class="price-product">350 грн.</p>
          <div class="option">
            <p class="name-option">Состав:</p>
            <p class="val-option">100% Хлопок</p>
          </div>
          <div class="btn-product">
            <button type="button" class="black-btn ppf">Купить</button>
          </div>
        </div>
      </div>
      <div class="join">

        <div data-animated="fadeInDown" class="product p2 my-animate">

          <p class="name-product">Кепка</p>

          <div class="img-product">
            <img src="./img/cap.png" alt="cap-team404">
          </div>
          <div class="product-options">
            <p class="price-product">250 грн.</p>
            <div class="option">
              <p class="name-option">Состав:</p>
              <p class="val-option">100% Хлопок</p>
            </div>
            <div class="btn-product">
              <button type="button" class="black-btn ppf">Купить</button>
            </div>
          </div>
        </div>

        <div data-animated="fadeInUp" class="product p3 my-animate">

          <p class="name-product">Носки</p>

          <div class="product-options">
            <p class="price-product">100 грн.</p>
            <div class="option">
              <p class="name-option">Состав:</p>
              <p class="val-option">100% Хлопок</p>
            </div>
            <div class="btn-product">
              <button type="button" class="black-btn ppf">Купить</button>
            </div>
          </div>
          <div class="img-product">
            <img src="./img/socks.png" alt="socks-team404">
          </div>
        </div>

      </div>
    </div>

    <div class="content payment">
      <h3>Оплата</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam asperiores atque aut, commodi culpa
        cum cupiditate delectus dicta dignissimos dolor dolores eaque eos esse explicabo incidunt inventore laudantium
        magni maxime minus mollitia odit officia officiis praesentium provident quam qui repudiandae, sit soluta tempora
        tempore tenetur unde veniam, voluptate voluptates voluptatum. Adipisci aliquid animi dolore dolorem ducimus,
        eaque ipsa iste itaque modi officiis quidem rem repellat, ut vero voluptatum. Aliquid cumque dignissimos dolorem
        eaque enim, esse et libero maiores nam, provident quaerat quia quisquam quo quos vel? Animi consectetur fugiat
        nam nostrum ut! Atque culpa debitis dolore placeat quas?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta dolorum enim fuga incidunt ipsam
        ipsum iusto neque qui, quos. Accusamus aspernatur, deleniti dolore dolorum ipsam itaque maxime non perspiciatis,
        quos ratione recusandae tempora tempore vitae? Animi, error, harum illo impedit iusto modi nihil odit sapiente
        suscipit, tempora temporibus ullam?</p>

    </div>

    <div class="content deliver">
      <h3>Доставка</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nulla quae quis sequi. Aliquam, at
        deserunt dolor exercitationem illo, ipsa obcaecati quo repellendus repudiandae suscipit tempore tenetur ut
        voluptas. Debitis eaque expedita itaque neque, nobis quas quia quos repudiandae saepe totam? Alias amet autem
        commodi consequatur dicta ducimus in ipsa ipsam itaque, iure laborum molestiae nam non placeat porro repellat
        sapiente similique tenetur voluptate voluptates. Distinctio eligendi harum inventore ipsum laudantium maxime
        mollitia quia? Accusantium, culpa et eum fugiat laborum nihil praesentium quibusdam vero? Dicta dolorum earum
        impedit in itaque, magnam necessitatibus neque nobis, odio officiis pariatur quaerat qui quis.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, reiciendis?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, animi quidem totam unde voluptatum?
        Ab alias aliquam amet consectetur corporis, deleniti doloremque ea error eum ipsum libero maiores necessitatibus
        officia quam quibusdam repudiandae similique vitae! Facilis incidunt optio perferendis?</p>
    </div>


  </section>-->

  <!-- sponsors -->
  <section data-slide="sponsors" class="sponsors flex-box slide">

    <div class="name-block"><span>Спонсоры</span></div>

    <div class="content">

      <div data-animated="fadeIn" data-delay="250" class="sponsor my-animate">
          <div class="logo-sponsor">
            <a href="https://veloplaneta.com.ua" target="_blank">
              <img src="./img/sponsor1.png" alt="Велопланета">
            </a>
          </div>
          <div class="text-sponsor">
            <p><a href="https://veloplaneta.com.ua" target="_blank">Велоинвентарь и экипировка</a></p>
          </div>
      </div>

      <div data-animated="fadeIn" data-delay="500" class="sponsor my-animate">
        <div class="logo-sponsor">
          <a href="https://www.cannondale.com/en/International" target="_blank">
            <img src="./img/sponsor4.png" alt="Сannondale">
          </a>
        </div>
        <div class="text-sponsor">
          <p><a href="https://www.cannondale.com/en/International" target="_blank">Спонсор</a></p>
        </div>
      </div>

      <div data-animated="fadeIn" data-delay="700" class="sponsor my-animate">
        <div class="logo-sponsor">
          <a href="https://www.patreon.com/javascriptninja" target="_blank">
            <img src="./img/sponsor2.png" alt="JavaScriptNinja">
          </a>
        </div>
        <div class="text-sponsor">
          <p><a href="https://www.patreon.com/javascriptninja" target="_blank">Спонсор</a></p>
        </div>
      </div>

      <div data-animated="fadeIn" data-delay="1000" class="sponsor my-animate">
        <div class="logo-sponsor">
          <a href="http://www.akvarena.com.ua" target="_blank">
            <img src="./img/sponsor3.png" alt="Акварена">
          </a>
        </div>
        <div class="text-sponsor">
          <p><a href="http://www.akvarena.com.ua" target="_blank">Тренировочная база</a></p>
        </div>
      </div>

      <div data-animated="fadeIn" data-delay="1200" class="sponsor my-animate">
        <div class="logo-sponsor">
          <a href="http://www.kunaiconsulting.com" target="_blank">
            <img src="./img/sponsor5.png" alt="Kunai">
          </a>
        </div>
        <div class="text-sponsor">
          <p><a href="http://www.kunaiconsulting.com" target="_blank">Спонсор</a></p>
        </div>
      </div>

    </div>

    <div class="become-sponsor">
      <p>Как стать спонсором?</p>
      <a href="team404_presentation-sponsor_preview.pdf">
        <button type="button" class="white-btn">Скачать презентацию</button>
      </a>
    </div>


  </section>

</div>

<!-- pp form -->
<div class="pp-form">
  <div class="overlay"></div>

  <div class="form">

    <div class="close">
      <svg id="close-pp-form" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
           xmlns:xlink="http://www.w3.org/1999/xlink">
        <g>
          <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
        </g>
      </svg>
    </div>

    <form action="">
      <label for="">
        <input name="name" type="text" placeholder="Виктор">
      </label>
      <label for="">
        <input name="phone" type="text" placeholder="+38 (0__) ___-__-__">
      </label>
      <input type="hidden" name="send">
      <button type="button" class="white-btn">Отправить</button>
    </form>
  </div>
</div>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="./js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="./js/onepage-scroll/jquery.onepage-scroll.js"></script>
<script src="./js/layouts.js?<?= VER_JS; ?>"></script>

</body>
</html>



