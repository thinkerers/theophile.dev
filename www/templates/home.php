<?php
$title = 'Bienvenue !';
$transition="start";

ob_start();
?>
<section id="accueil">
  <h1>Bienvenue !</h1>
  <p>
    Je suis Théophile, infographiste et développeur web.  Ce site est <a href="/projets/portfolio">mon portfolio</a>. Vous y trouverez mes <a href="#projets">projets</a>, mes <a href="#apropos">compétences</a> et <a href="#contact">mes coordonnées</a>.
    Vous avez un projet ? <a href="#contact">Parlons-en !</a>
  </p>
</section>

<section id="projets">
  <h2>Projets</h2>
  <article>
    <h3>Portfolio theophile.dev</h3>
    <p>Site en cours de construction, codé from scratch en PHP</p>
    <a href="/projets/portfolio">Plus d'infos</a>
  </article>
  <!-- <article>
    <h3>Webisu</h3>
    <p>Application de gestion de tâches réalisé avec Léa et Lunao durant un workshop organisé par l'ifapme</p>
    <a href="https://webisu.be/">Plus d'infos</a>
  </article> -->
</section>
<section id="apropos">
  <hgroup>
        <h2>Théophile</h2>
        <b>Infographiste</b>
      </hgroup>
      <p><em>Ma vocation:</em> Passer des idées au concrets, transmettre mes connaissances et créer des expériences captivantes et accessibles 👨‍💻</p>
      <address>
      <ul>
        <li><a href="mailto:hello@theophile.dev">hello@theophile.dev</a></li>
        <li><a href="https://docs.google.com/presentation/d/12qON9WzkUSGHv9LRzEdK1zckqqabfpfLK1-vlNeaQ9k/preview?slide=id.g706ef3ee9b_8_88">portfolio infographie</a></li>
        <li><a href="https://codepen.io/collection/Rzvekr">codepen</a></li>
        <li><a href="https://github.com/DesignThinkerer">github</a></li>
      </ul>
    </address>
</section>

<section id="contact">
  <form action="/submit-contact-form" method="post">
    <h2>
      <b>Travaillons ensemble</b>
    </h2>
    <label>
      Parlez moi de votre projet
      <textarea autofocus name="projet" placeholder="Je souhaite créer..." required></textarea>
    </label>

    <fieldset>
      <legend>Budget</legend>
      <label><input type="radio" name="budget" value="5000"><span>&lt;5 000 &euro;</span></label>
      <label><input type="radio" name="budget" value="10000"><span>&lt;10 000 &euro;</span></label>
      <label><input type="radio" name="budget" value="20000"><span>&lt;20 000 &euro;</span></label>
      <label><input type="radio" name="budget" value="30000"><span>&gt;30 000 &euro;</span></label>
      <label><input type="radio" name="budget" value="?"><span>Je ne sais pas</span></label>
    </fieldset>
    <label>Nom<input type="text" name="nom" required></label>
    <label>Entreprise<input type="text" name="entreprise" required></label>
    <label>Email<input type="email" name="email" required></label>
    <input type="submit" value="C'est parti !">
  </form>
</section>
<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>