<!DOCTYPE html>
<html
lang="fr"
data-transition="<?php echo $transition ?? '' ;?>"
>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez le portfolio de Théophile, un développeur web front-end mettant en avant des performances web de premier ordre, l'accessibilité, les meilleures pratiques et le SEO. Contactez pour une collaboration ou consultez le rapport HTTP Observatory.">
  <title><?= $title ?? 'Théophile - Dev web front end' ?></title>
  <link rel="preload stylesheet" href="<?php echo '/public/css/styles.css';?>" as="style">
  <link rel="icon" href="<?php echo '/public/img/favicon.svg';?>">
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