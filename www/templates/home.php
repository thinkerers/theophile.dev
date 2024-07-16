<?php
$title = 'Bienvenue !';
$transition="start";

ob_start();
?>
<section id="accueil">
  <h1>Bienvenue !</h1>
  <p>Découvrez mon univers et explorez mes projets.</p>
  <address id="contact">
    <ul>
      <li><a href="#contact">Contactez moi</a></li>
      <li><a href="https://docs.google.com/presentation/d/12qON9WzkUSGHv9LRzEdK1zckqqabfpfLK1-vlNeaQ9k/preview?slide=id.g706ef3ee9b_8_88">portfolio infographie</a></li>
      <li><a href="https://codepen.io/collection/Rzvekr">codepen</a></li>
      <li><a href="https://github.com/DesignThinkerer">github</a></li>
    </ul>
  </address>
</section>

<section id="projets">
  <h2>Projets</h2>
  <article>
    <h3>Projet 1</h3>
    <p>Un projet de qualité</p>
  </article>
  <article>
    <h3>Projet 2</h3>
    <p>Un projet de qualité</p>
  </article>
</section>
<section id="mission">
  <h3>ma vocation</h3>
  <p>Passer des idées au concrets.</p>
</section>
<section id="apropos">
  <article>
    <h2><b>Théophile</b></h2>
    <h3>Infographiste</h3>
    <p>J'adore transmettre mes connaissances et créer des expériences captivantes et accessibles.</p>
    <address><a href="mailto:hello@theophile.dev">Contactez-moi : hello@theophile.dev</a></address>
  </article>
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
    <input type="submit" value="C'est parti !" />
  </form>
</section>
<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>