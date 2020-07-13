<?php include 'header.php'; ?>

<?php include 'navBar.php'; ?>

<header>
  <section>
    <h1>Alexandre Cornil Orwat</h1>
    <p data-i18n="header-subtitle"></p>
    <p data-i18n="header-button" class="aboutme" onclick="myScroll('.about_me');"></p>
  </section>
</header>

<section class="about_me">
  <h4 data-i18n="about-title"></h4>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <p data-i18n="[html]about-text"></p>
      </div>
    </div>
  </div>
</section>

<section class="technos">
  <h4 data-i18n="technos-title"></h4>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fab fa-php"></i>
        <p data-i18n="technos-php-text"></p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-js-square"></i>
        <p data-i18n="technos-javascript-text"></p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-node"></i>
        <p data-i18n="technos-node-text"></p>
      </div>
    </div>
  </div>
</section>

<section class="graduations">
  <h4 data-i18n="graduations-title"></h4>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-graduation-cap"></i>
        <p data-i18n="graduations-highschool"></p>
        <p data-i18n="grauations-highschool-subtext"></p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-graduation-cap"></i>
        <p data-i18n="graduations-iim"></p>
        <p>2018</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-language"></i>
        <p>TOEIC</p>
        <p>2017</p>
      </div>
    </div>
  </div>
</section>

<section class="portfolio">
  <h4>Portfolio</h4>
  <p>belisamagames.fr<span>- 2019</span></p>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="img/belisama.png" alt="belisama games website screenshot" />
      </div>
      <div class="col-md-4">
        <a data-i18n="portfolio-button" target="_blank" href="https://belisamagames.com/"></a>
      </div>
    </div>
  </div>
  <p>yucall.fr<span>- 2018</span></p>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="img/YuCall.png" alt="YuCall website screenshot" />
      </div>
      <div class="col-md-4">
        <a data-i18n="portfolio-button" target="_blank" href="https://yucall-solutions.com/fr/accueil/"></a>
      </div>
    </div>
  </div>
  <p>paradoxales.fr<span>- 2018</span></p>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="img/paradoxales.png" alt="paradoxales website screenshot" />
      </div>
      <div class="col-md-4">
        <a data-i18n="portfolio-button" target="_blank" href="https://paradoxales.fr/"></a>
      </div>
    </div>
  </div>
  <p>nonna-giulia.com<span>- 2016</span></p>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img src="img/nonna.png" alt="nonna giulia website screenshot" />
      </div>
      <div class="col-md-4">
        <a data-i18n="portfolio-button" target="_blank" href="https://nonna-giulia.com/"></a>
      </div>
    </div>
  </div>
</section>

<section class="testimonial">
  <h4 data-i18n="testimonial-title"></h4>
  <p data-i18n="testimonial-quote"></p>
  <p data-i18n="[html]testimonial-author"></p>
</section>

<section class="contact">
  <h4 data-i18n="contact-title"></h4>
  <a href="mailto:alx.cornil@gmail.com">alx.cornil@gmail.com</a><br>
  <a target="_blank" href="https://github.com/Rookysolo">
    <i class="fab fa-github"></i>
  </a>
  <a target="_blank" href="https://www.linkedin.com/in/alexandre-cornil-orwat-005326107//">
    <i class="fab fa-linkedin-in"></i>
  </a>
  <p data-i18n="contact-rights"></p>
</section>

<?php include 'footer.php'; ?>
