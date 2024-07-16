<?php 
$stylesheets = [
  '/public/css/styles.v0.css',
];

if(isset($styles)){
  $stylesheets = array_merge($stylesheets, $styles);
}

?>
<!DOCTYPE html>
<html
lang="fr"
data-transition="<?= $transition ?? '' ;?>"
>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio de Théophile, développeur web front-end.">
  <title><?= $title ?? 'Théophile - Dev web front end' ?></title>
  <?php foreach($stylesheets as $stylesheet): ?>
    <link rel="preload stylesheet" href="<?= $stylesheet; ?>"  as="style">
  <?php endforeach; ?>
  <link rel="icon" href="<?= '/public/img/favicon.svg';?>">
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "image": "favicon.svg",
      "url": "https://www.theophile.dev",
      "sameAs": ["https://be.linkedin.com/in/théophile-desmedt" , "https://dev.to/designthinkerer", "https://codepen.io/DesignThinkerer"],
      "logo": "favicon.svg",
      "name": "theophile.dev",
      "description": "Infographiste et développeur web front-end",
      "email": "hello@theophile.dev",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Tournai",
        "addressCountry": "BE",
        "postalCode": "7500"
      }
    }
  </script>
<?php 

if(isset($scripts)){
  foreach($scripts as $script) {
    ?>
      <script src="<?= $script["src"]; ?>" type="<?= $script["type"]; ?>"></script>
    <?php 
  }
}
?>
</head>
<body>
<header>
  <figure>
    <a href="/">
    theophile.dev
    </a>
  </figure>
  <nav>
    <!-- 
      Solution plus robuste:  
      https://developer.mozilla.org/fr/docs/Web/HTML/Element/dialog
  -->
    <button title="Afficher la navigation"></button>
    <ul>
      <li><a href="/#projets" title="Mes créations">projets</a></li>
      <li><a href="/#apropos" title="Mon histoire">à propos</a></li>
      <li><a href="/#contact" title="Travaillons ensemble!">contact</a></li>
    </ul>
  </nav>
</header>
<main>
<?= $content ?? '' ?>
</main>
<footer>
        <small>2024, theophile.dev</small>
        <nav>
          <ul>
            <li>
            <a href="https://github.com/thinkerers/theophile.dev">repo</a>
            </li>
          </ul>
        </nav>
      </footer>
</body>
</html>