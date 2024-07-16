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
  <h1><a href="/">theophile.dev</a></h1>
  <nav>
    <a href="/login" title="Login">🔒</a>
    <a href="/roadmap" title="Roadmap">🗺️</a>
  </nav>
</header>
<main>
<?= $content ?? '' ?>
</main>
<footer>
<a href="https://github.com/thinkerers/theophile.dev">repo</a>
</footer>
</body>
</html>