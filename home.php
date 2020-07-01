<?php include 'header.php'; ?>

<?php include 'navBar.php'; ?>

<header>
  <section>
    <h1>Alexandre Cornil Orwat</h1>
    <p>Développeur web full stack autodidacte</p>
    <p class="aboutme" onclick="myScroll('.about_me');">A propos de moi</p>
  </section>
</header>

<section class="about_me">
  <h4>Qui suis-je ?</h4>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <p>
          J'ai découvert le développement web durant mes études à l'Institut de l'Internet et du Multimédia.<br>
          Titulaire depuis 2018 d'un Mastère "Manager de la Communication Numérique", j'ai choisi de me spécialiser,
          depuis 2016, de manière autodidacte dans le développement web full-stack, approfondi durant mes deux stages
          réalisés dans le cadre de mon cursus.<br>
          En plus d'être un métier riche en possibilités, développer constitue également un challenge et
          une opportunité d'apprentissage permanente !
        </p>
      </div>
    </div>
  </div>
</section>

<section class="technos">
  <h4>Technologies</h4>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fab fa-php"></i>
        <p>
          Mon tout premier langage web back-end. Il m'a transmis l'envie d'approfondir l'envers du décor du monde du web !
          C'est également le langage que j'ai le plus utilisé au fil de différents projets WordPress.
        </p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-js-square"></i>
        <p>
          Véritable coup de coeur depuis le début de mes études, Javascript et plus particlièrement Jquery ne m'ont plus jamais quitté.
          Je l'utilisais à chaque projet étudiant, de la plus petite animation d'images de la Joconde au jeu étudiant par navigateur !
        </p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-node"></i>
        <p>
          Découvert durant mon premier stage, NodeJS est mon favori, à la fois pour sa souplesse d'écriture
          et pour ses performances. C'est un formidable outil qui permet la réalisation de structures full stack fonctionnant intégralement via Javascript, allant du site à l'application.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="graduations">
  <h4>Diplômes</h4>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-graduation-cap"></i>
        <p>Baccalauréat</p>
        <p>2013, Mention Bien, Scientifique</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-graduation-cap"></i>
        <p>Manager de la Communication Numérique</p>
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
        <a target="_blank" href="https://belisamagames.com/">Visiter</a>
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
        <a target="_blank" href="https://yucall-solutions.com/fr/accueil/">Visiter</a>
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
        <a target="_blank" href="https://paradoxales.fr/">Visiter</a>
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
        <a target="_blank" href="https://nonna-giulia.com/">Visiter</a>
      </div>
    </div>
  </div>
</section>

<section class="testimonial">
  <h4>Recommandations</h4>
  <p>
    "Profil créatif travailleur et impliqué dans les problématiques de l'entreprise, Alexandre mène à bien ses missions avec sérieux et professionnalisme."
  </p>
  <p>Alexandre Lefort, <span>CEO de YuCall</span></p>
</section>

<section class="contact">
  <h4>Me contacter</h4>
  <a href="mailto:alx.cornil@gmail.com">alx.cornil@gmail.com</a><br>
  <a target="_blank" href="https://github.com/Rookysolo">
    <i class="fab fa-github"></i>
  </a>
  <a target="_blank" href="https://www.linkedin.com/in/alexandre-cornil-orwat-005326107//">
    <i class="fab fa-linkedin-in"></i>
  </a>
  <p>
    Tous droits réservés @ Alexandre Cornil Orwat
  </p>
</section>

<?php include 'footer.php'; ?>
