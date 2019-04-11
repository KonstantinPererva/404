<?php
define("VER_JS", '1.0');
define("VER_CSS", '1.0');
; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Тренировки для похудения, быстрое похудение. Записаться на бесплатный фитнес.">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Экспресс фитнес Сафари Харьков, Днепр" />
  <meta property="og:description" content="Эффективные фитнес-тренировки для женщин" />
  <meta property="og:image" content="img/bg-main.jpg" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="css/style.css?<?= VER_CSS; ?>">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <title>Экспресс-фитнес Харьков, Днепр.</title>
</head>
<body>
<main>
  <div class="main-overlay"></div>
  <div class="container">
    <header class="logo">
      <img src="img/logo.png" alt="Сафари экспресс фитнес" title="Сафари экспресс фитнес">
    </header>

    <header class="main-title">
      <h1>экспресс<br>фитнес -</h1>
      <p>мы разработали формат<br>
        фитнес тренировок специально<br>
        для женщин</p>
    </header>

    <button type="button" class="ppf">хочу попробовать</button>

    <ul class="check-list">
      <li>
        <div class="circle">
          <img src="img/check.svg" alt="">
        </div>
        <p>тренировки в любое<br>удобное время</p>
      </li>
      <li>
        <div class="circle">
          <img src="img/check.svg" alt="">
        </div>
        <p>программа только<br>для женщин</p>
      </li>
      <li>
        <div class="circle">
          <img src="img/check.svg" alt="">
        </div>
        <p>захватывающая<br>атмосфера</p>
      </li>
    </ul>
  </div>
</main>

<div class="first-step">
  <div class="container">
    <div class="first-step-img">
      <img src="img/woman.jpg" alt="Сделать первый шаг к похудению" title="Сделать первый шаг к похудению">
    </div>
    <div class="first-step-content">
      <hr class="yellow-hr">
      <h2 class="title-block">Сделай первый шаг к своей цели с нами</h2>
      <div class="first-step-triggers">
        <div class="first-step-triggers-item">
          <img src="img/libra.png" alt="Быстро покухеть" title="Быстро похудеть">
          <section>
            <h3>Быстро похудеть:</h3>
            <p>C нами ты попрощаешься с лишними килограммами, отечностью и тяжелым дыханием.</p>
          </section>
        </div>
        <div class="first-step-triggers-item">
          <img src="img/waist.png" alt="Вернуть формы" title="Вернуть формы">
          <section>
            <h3>Вернуть формы:</h3>
            <p>Прокачаешь ноги, ягодицы, пресс — все зоны, которые так важны именно женщинам.</p>
          </section>
        </div>
        <div class="first-step-triggers-item">
          <img src="img/pulse.png" alt="Лучшее самочувствие" title="Лучшее самочувствие">
          <section>
            <h3>Лучшее самочувствие:</h3>
            <p>Похудеть на 20 килограмм за 2 дня не наша цель, ты будешь худеть так, чтобы сохранить результат навсегда.</p>
          </section>
        </div>
        <div class="first-step-triggers-item">
          <img src="img/headr.png" alt="Тонус" title="Тонус">
          <section>
            <h3>Тонус:</h3>
            <p>Тренируясь с нами ты научишь свой организм работать продуктивно (как часы).</p>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="carousel">

  <div class="mobile-container">
    <div class="title-block">
      Вы полны решимости максимум<br>
      на пару дней?<br>
      <span>А они уже смогли!</span>
    </div>
    <div class="mobile-slide-items">
      <div class="result-before-content">
        <div class="result-before-content-img">
          <img src="img/carousel/before1.jpg" alt="Результат до" title="Результат до">
        </div>
        <div>
          <header>
            <h3>До</h3>
            <p>Лишние килограммамы, отечностью и тяжелое дыхани.</p>
          </header>
        </div>
      </div>
      <div class="result-before-content mobile-result-after">
        <div class="result-before-content-img">
          <img src="img/carousel/after1.jpg" alt="Результат после" title="Результат после">
        </div>
        <div>
          <header>
            <h3>После</h3>
            <p>Лишние килограммамы, отечностью и тяжелое дыхани.</p>
          </header>
        </div>
      </div>
    </div>
  </div>

  <div class="slide-items">
    <div class="container">
    <div class="result-before">
      <div class="title-block">
        Вы полны решимости максимум<br>
        на пару дней?<br>
        <span>А они уже смогли!</span>
      </div>
      <div class="result-before-content">
        <div class="result-before-content-img">
          <img src="img/carousel/before1.jpg" alt="Результат до" title="Результат до">
        </div>
        <div>
          <header>
            <h3>До</h3>
            <p>Лишние килограммамы, отечностью и тяжелое дыхани.</p>
          </header>
        </div>
      </div>
    </div>
    <div class="result-after">
      <img src="img/carousel/after1.jpg" alt="Результат после" title="Результат после">
    </div>
  </div>
    <div class="container">
      <div class="result-before">
        <div class="title-block">
          Вы полны решимости максимум<br>
          на пару дней?<br>
          <span>А они уже смогли!</span>
        </div>
        <div class="result-before-content">
          <div class="result-before-content-img">
            <img src="img/carousel/before1.jpg" alt="Результат до" title="Результат до">
          </div>
          <div>
            <header>
              <h3>До</h3>
              <p>Лишние килограммамы, отечностью и тяжелое дыхани.</p>
            </header>
          </div>
        </div>
      </div>
      <div class="result-after">
        <img src="img/carousel/after1.jpg" alt="Результат после" title="Результат после">
      </div>
    </div>
  </div>
  <div class="circle-carousel circle-prev" title="Назад">
    <svg viewBox="0 0 1024 1024"><path d="M716.8 1024c6.552 0 13.102-2.499 18.101-7.499 9.998-9.997 9.998-26.206 0-36.203l-442.698-442.698 442.698-442.699c9.998-9.997 9.998-26.206 0-36.203s-26.206-9.998-36.203 0l-460.8 460.8c-9.998 9.997-9.998 26.206 0 36.203l460.8 460.8c5 5 11.55 7.499 18.102 7.499z"></path></svg>
  </div>
  <div class="circle-carousel circle-next" title="Вперёд">
    <svg viewBox="0 0 1024 1024"><path d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z"></path></svg>
  </div>
</div>


<div class="result-today">
  <div class="container">
    <div>
      <h2 class="title-block">Как начать получать результат от тренировок уже сегодня?</h2>
    </div>
    <div class="result-today-steps">
      <div class="step-item">
        <div class="step-circle ppf">
          <img src="img/note.png" alt="Оставить заявку" title="Оставить заявку">
        </div>
        <p><span>1.</span>Оставить заявку</p>
      </div>
      <div class="next">
        <svg viewBox="0 0 1024 1024"><path d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z"></path></svg>
      </div>
      <div class="step-item">
        <div class="step-circle">
          <img src="img/cool.png" alt="Прийти на пробную тренировку" title="Прийти на пробную тренировку">
        </div>
        <p><span>2.</span>Прийти на пробную<br>
          тренировку</p>
      </div>
      <div class="next">
        <svg viewBox="0 0 1024 1024"><path d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z"></path></svg>
      </div>
      <div class="step-item">
        <div class="step-circle">
          <img src="img/money.png" alt="Оплатить абонемент по спец.цене" title="Оплатить абонемент по спец.цене">
        </div>
        <p><span>3.</span>В день визита оплатить<br>
          абонемент по спец.цене</p>
      </div>
      <div class="next">
        <svg viewBox="0 0 1024 1024"><path d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z"></path></svg>
      </div>
      <div class="step-item">
        <div class="step-circle">
          <img src="img/up.png" alt="Начать получать результаты" title="Начать получать результаты">
        </div>
        <p><span>4.</span>Начать получать результаты<br>
          уже через 30 дней</p>
      </div>
    </div>
  </div>
</div>

<div class="about-express">
  <div class="container">
    <div>
      <h2 class="title-block"><span>Safari</span>Экспресс-фитнес это:</h2>
    </div>
    <div class="about-express-items">
      
      <div class="route r1"><img src="img/route.png" alt=""></div>
      <div class="route r2"><img src="img/route.png" alt=""></div>
      <div class="route r3"><img src="img/route.png" alt=""></div>
      <div class="route r4"><img src="img/route.png" alt=""></div>

      <div class="express-item">
        <div class="item-img">
          <img src="img/about-express1.jpg" alt="Драйв" title="Драйв">
          <div class="big-number">1</div>
        </div>
        <header>
          <h4>Драйв</h4>
          <p>Тренировки длятся 30 минут и проходят под музыку. Это весело, в отличии от скучных и длинных тренировок в тренажерном зале.</p>
        </header>
      </div>
      <div class="express-item">
        <div class="item-img">
          <img src="img/about-express2.jpg" alt="Рузультат" title="Рузультат">
          <div class="big-number">2</div>
        </div>
        <header>
          <h4>Рузультат</h4>
          <p>TRX, стретчинг, пилатес, ABL & ABS, full body, Zumba — 7 самых эффективных направлений экспресс-фитнеса позволяют получить результат быстро.</p>
        </header>
      </div>
      <div class="express-item">
        <div class="item-img">
          <img src="img/about-express3.jpg" alt="Поддержка" title="Поддержка">
          <div class="big-number">3</div>
        </div>
        <header>
          <h4>Поддержка</h4>
          <p>Все тренировки проходят под контролем тренера. Вам больше не страшны травмы и непонимание что делать.</p>
        </header>
      </div>
    </div>
  </div>
</div>

<div class="video">
  <div class="container">
    <div>
      <h2 class="title-block"><span>Как проходят тренировки?</span>Тренировки по 30 мин. Каждый день. В любой точке города.</h2>
    </div>
    <div class="video-content">
      <iframe width="853" height="450" src="https://www.youtube.com/embed/dxquDtZNLIA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="conditions">
  <div class="container">
    <div>
      <h2 class="title-block">Мы продумали и создали все условия, чтобы Вы получили результат</h2>
    </div>
    <div class="conditions-items">
      <div class="condition-item">
        <div class="number">#1</div>
        <header>
          <h4>Удобный формат тренировок</h4>
          <p>Все тренировки длятся 30 минут без перерывов. Можно успеть потренироваться утром перед работой, в обеденный перерыв или вечером.</p>
        </header>
      </div>
      <div class="condition-item">
        <div class="number">#2</div>
        <header>
          <h4>Эффективная программа</h4>
          <p>Все тренировки разработанны специально для женщин и направлены на достижение конкретного результата: убрать лишний вес, получить желанные формы, получить заряд положительных эмоций.</p>
        </header>
      </div>
      <div class="condition-item">
        <div class="number">#3</div>
        <header>
          <h4>Консультации по питанию</h4>
          <p>Вам больше не нужно ломать голову что и сколько кушать, чтобы не перебирать «злобные» каллории. Тренера-диетологи подскажут вам как питаться правильно и полезно.</p>
        </header>
      </div>
      <div class="condition-item">
        <div class="number">#4</div>
        <header>
          <h4>Консультации по питанию</h4>
          <p>Тренеруйтесь без перерывов и получайте скидки постоянного клиента. Продление абонемента по специальной стоимости постоянного клиента уже активно внутри сети экспресс-фитнеса.</p>
        </header>
      </div>
    </div>
    <div>
      <button type="button" class="ppf">Хочу попробовать</button>
    </div>
  </div>
</div>

<div class="free-training">
  <div class="success-massage">
    <div>
      <p><span>Сообщение отправлено!</span><br>
          В ближайшее время с вами свяжется на менеджер.
      </p>
    </div>
  </div>
  <div class="container">
    <div class="free-training-content">
      <div>
        <h2 class="title-block">Запишитесь на первую<span>бесплатную тренировку</span></h2>
      </div>
      <div class="free-training-form">
        <form id="free-training" action="">
          <label for="">
            <input name="name" placeholder="Ваше имя" required>
          </label>
          <label for="">
            <input name="phone" placeholder="Ваш телефон" required>
          </label>
          <label for="">
            <input name="email" type="email" placeholder="Ваш e-mail" required>
          </label>
          <div class="checkboxes">
            <label class="checkbox" for="">
              <span class="checkbox-circle"></span>
              <input name="analysis" type="checkbox">
              <span class="checkbox-title">фитнес-анализ<br>состава тела</span>
            </label>
            <label class="checkbox" for="">
              <span class="checkbox-circle"></span>
              <input name="consultation" type="checkbox">
              <span class="checkbox-title">онлайн-консультация<br>диетолога</span>
            </label>
          </div>
          <input type="hidden" name="send">
          <button type="button">Готова прийти</button>
        </form>
      </div>

    </div>
  </div>
</div>

<div class="questions">
  <div class="container">
    <div class="questions-img">
      <img src="img/woman2.jpg" alt="Сделать первый шаг к похудению" title="Сделать первый шаг к похудению">
    </div>
    <div class="questions-content">
      <hr class="yellow-hr">
      <header>
        <h2 class="title-block"><span>Остались вопросы?</span></h2>
        <p>Мы постарались ответить на самые частые из них:</p>
      </header>
      <div class="questions-items">
        <div class="questions-item">
          <p class="big-number">1</p>
          <section>
            <h3>Есть ли противопоказания по здоровью?</h3>
            <p>Тренировки в экспресс-фитнесе не имеют противопоказаний, но перед началом любой активной физичекой деятельности лучше проконсультироваться с врачом.</p>
          </section>
        </div>
        <div class="questions-item">
          <p class="big-number">2</p>
          <section>
            <h3>Как скоро я получу результат?</h3>
            <p>Тренировки по системе экспресс-фитнеса дают видимые результаты уже через 30 дней. Главное условие вы должны посещать тренировки регулярно и следовать рекомендациям по питанию.</p>
          </section>
        </div>
        <div class="questions-item">
          <p class="big-number">3</p>
          <section>
            <h3>Что нужно для тренировок?</h3>
            <p>Хорошее самочувствие, спортивная одежда и обувь, а хорошее настроение и отличную физическую форму мы вам гарантируем.</p>
          </section>
        </div>
        <div class="questions-item">
          <p class="big-number">4</p>
          <section>
            <h3>Я никогда не занималась, я справлюсь с нагрузкой?</h3>
            <p>Тренироваться по системе экспресс-фитнеса можно начинать с любого уровня физической подготовки. Прежде чем начать вы пройдете фитнес-тестирование, результатом которого будет уровень вашей подготовки. Благодаря этому тесту тренер сможет скоректировать вашу программу тренировок.</p>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ask-question">
  <div class="container">
    <div class="ask-question-content">
      <header>
        <h4>Не нашла свой вопрос?</h4>
        <p>Онлайн-менеджер готов ответить 24/7</p>
      </header>
      <button class="ppf" type="button" data-area="true">задать вопрос</button>
    </div>
  </div>
</div>

<footer>
  <div>SAFARI ЭКСПРЕСС-ФИТНЕС <?php echo date("Y"); ?></div>
  <div class="social">
    <p>Харьков</p>
    <a href="https://www.instagram.com/fitness_safari_express/" target="_blank">
      <svg viewBox="0 0 167.657 167.657"><g><path d="M83.829,0.349C37.532,0.349,0,37.881,0,84.178c0,41.523,30.222,75.911,69.848,82.57v-65.081H49.626
      v-23.42h20.222V60.978c0-20.037,12.238-30.956,30.115-30.956c8.562,0,15.92,0.638,18.056,0.919v20.944l-12.399,0.006
      c-9.72,0-11.594,4.618-11.594,11.397v14.947h23.193l-3.025,23.42H94.026v65.653c41.476-5.048,73.631-40.312,73.631-83.154
      C167.657,37.881,130.125,0.349,83.829,0.349z"/></g>
      </svg>
    </a>
    <a href="https://www.facebook.com/expessfitness" target="_blank">
      <svg viewBox="0 0 438.536 438.536">
        <g>
          <path d="M421.981,16.562C410.941,5.519,397.711,0,382.298,0H56.248C40.83,0,27.604,5.521,16.561,16.562
          C5.52,27.6,0.001,40.828,0.001,56.243V382.29c0,15.413,5.518,28.644,16.56,39.683c11.043,11.04,24.272,16.563,39.687,16.563
          h326.046c15.41,0,28.644-5.523,39.684-16.563c11.043-11.039,16.557-24.27,16.557-39.683V56.243
          C438.534,40.825,433.021,27.604,421.981,16.562z M157.462,158.025c17.224-16.652,37.924-24.982,62.097-24.982
          c24.36,0,45.153,8.33,62.381,24.982c17.228,16.655,25.837,36.785,25.837,60.386c0,23.598-8.609,43.729-25.837,60.379
          c-17.228,16.659-38.014,24.988-62.381,24.988c-24.172,0-44.87-8.336-62.097-24.988c-17.228-16.652-25.841-36.781-25.841-60.379
          C131.621,194.81,140.234,174.681,157.462,158.025z M388.865,370.589c0,4.945-1.718,9.083-5.141,12.416
          c-3.433,3.33-7.519,4.996-12.282,4.996h-305.2c-4.948,0-9.091-1.666-12.419-4.996c-3.333-3.326-4.998-7.471-4.998-12.416V185.575
          H89.08c-3.805,11.993-5.708,24.462-5.708,37.402c0,36.553,13.322,67.715,39.969,93.511c26.65,25.786,58.721,38.685,96.217,38.685
          c24.744,0,47.583-5.903,68.527-17.703c20.937-11.807,37.486-27.839,49.676-48.112c12.183-20.272,18.274-42.4,18.274-66.38
          c0-12.94-1.91-25.406-5.715-37.402h38.547v185.014H388.865z M388.865,115.626c0,5.52-1.903,10.184-5.716,13.99
          c-3.805,3.809-8.466,5.711-13.989,5.711h-49.676c-5.517,0-10.185-1.903-13.99-5.711c-3.806-3.806-5.708-8.47-5.708-13.99V68.522
          c0-5.33,1.902-9.945,5.708-13.848c3.806-3.901,8.474-5.854,13.99-5.854h49.676c5.523,0,10.185,1.952,13.989,5.854
          c3.812,3.903,5.716,8.518,5.716,13.848V115.626z"/>
        </g>
      </svg>
    </a>
  </div>

  <div class="social">
    <p>YouTube</p>
    <a href="https://www.youtube.com/channel/UCBPL0KzlLGkgclLIIFQAG1w" target="_blank">
      <svg viewBox="0 0 512 512"><path d="m224.113281 303.960938 83.273438-47.960938-83.273438-47.960938zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm159.960938 256.261719s0 51.917969-6.585938 76.953125c-3.691406 13.703125-14.496094 24.507812-28.199219 28.195312-25.035156 6.589844-125.175781 6.589844-125.175781 6.589844s-99.878906 0-125.175781-6.851562c-13.703125-3.6875-24.507813-14.496094-28.199219-28.199219-6.589844-24.769531-6.589844-76.949219-6.589844-76.949219s0-51.914062 6.589844-76.949219c3.6875-13.703125 14.757812-24.773437 28.199219-28.460937 25.035156-6.589844 125.175781-6.589844 125.175781-6.589844s100.140625 0 125.175781 6.851562c13.703125 3.6875 24.507813 14.496094 28.199219 28.199219 6.851562 25.035157 6.585938 77.210938 6.585938 77.210938zm0 0"/></svg>
    </a>
  </div>

  <div class="social">
    <p>Днепр</p>
    <a href="https://www.instagram.com/safari_express_fitness_dp/" target="_blank">
      <svg viewBox="0 0 167.657 167.657"><g><path d="M83.829,0.349C37.532,0.349,0,37.881,0,84.178c0,41.523,30.222,75.911,69.848,82.57v-65.081H49.626
      v-23.42h20.222V60.978c0-20.037,12.238-30.956,30.115-30.956c8.562,0,15.92,0.638,18.056,0.919v20.944l-12.399,0.006
      c-9.72,0-11.594,4.618-11.594,11.397v14.947h23.193l-3.025,23.42H94.026v65.653c41.476-5.048,73.631-40.312,73.631-83.154
      C167.657,37.881,130.125,0.349,83.829,0.349z"/></g>
      </svg>
    </a>
    <a href="https://www.facebook.com/safari.express.fitness.dp" target="_blank">
      <svg viewBox="0 0 438.536 438.536">
        <g>
          <path d="M421.981,16.562C410.941,5.519,397.711,0,382.298,0H56.248C40.83,0,27.604,5.521,16.561,16.562
          C5.52,27.6,0.001,40.828,0.001,56.243V382.29c0,15.413,5.518,28.644,16.56,39.683c11.043,11.04,24.272,16.563,39.687,16.563
          h326.046c15.41,0,28.644-5.523,39.684-16.563c11.043-11.039,16.557-24.27,16.557-39.683V56.243
          C438.534,40.825,433.021,27.604,421.981,16.562z M157.462,158.025c17.224-16.652,37.924-24.982,62.097-24.982
          c24.36,0,45.153,8.33,62.381,24.982c17.228,16.655,25.837,36.785,25.837,60.386c0,23.598-8.609,43.729-25.837,60.379
          c-17.228,16.659-38.014,24.988-62.381,24.988c-24.172,0-44.87-8.336-62.097-24.988c-17.228-16.652-25.841-36.781-25.841-60.379
          C131.621,194.81,140.234,174.681,157.462,158.025z M388.865,370.589c0,4.945-1.718,9.083-5.141,12.416
          c-3.433,3.33-7.519,4.996-12.282,4.996h-305.2c-4.948,0-9.091-1.666-12.419-4.996c-3.333-3.326-4.998-7.471-4.998-12.416V185.575
          H89.08c-3.805,11.993-5.708,24.462-5.708,37.402c0,36.553,13.322,67.715,39.969,93.511c26.65,25.786,58.721,38.685,96.217,38.685
          c24.744,0,47.583-5.903,68.527-17.703c20.937-11.807,37.486-27.839,49.676-48.112c12.183-20.272,18.274-42.4,18.274-66.38
          c0-12.94-1.91-25.406-5.715-37.402h38.547v185.014H388.865z M388.865,115.626c0,5.52-1.903,10.184-5.716,13.99
          c-3.805,3.809-8.466,5.711-13.989,5.711h-49.676c-5.517,0-10.185-1.903-13.99-5.711c-3.806-3.806-5.708-8.47-5.708-13.99V68.522
          c0-5.33,1.902-9.945,5.708-13.848c3.806-3.901,8.474-5.854,13.99-5.854h49.676c5.523,0,10.185,1.952,13.989,5.854
          c3.812,3.903,5.716,8.518,5.716,13.848V115.626z"/>
        </g>
      </svg>
    </a>
  </div>

  <div class="politics">ПОЛИТИКА КОНФЕДИНЦИАЛЬНОСТИ</div>
</footer>

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
        <input name="name" type="text" placeholder="Ваше имя">
      </label>
      <label for="">
        <input name="phone" type="text" placeholder="+38 (0__) ___-__-__">
      </label>
      <label for="">
        <textarea disabled id="input-question" name="message" placeholder="Вопрос"></textarea>
      </label>
      <input type="hidden" name="send">
      <button type="button" class="white-btn">Записаться на гостевой визит</button>
    </form>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/layouts.js?<?= VER_JS; ?>"></script>
<script>


  var Slider = {

  	element : $(".slide-items"),

  	set : function (width) {
			if (width < 992) {
				Slider.element = $(".mobile-slide-items");
			} else {
				Slider.element = $(".slide-items");
      }

			Slider.element.slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				prevArrow : $(".circle-prev"),
				nextArrow : $(".circle-next"),
			});
		}
  };


  $(document).ready(function () {
  	Slider.set($(window).width());
		/*$(window).resize(function () {
      var width = $(window).width();
			Slider.set(width);
		});*/
	});
  
  

</script>
</body>
</html>