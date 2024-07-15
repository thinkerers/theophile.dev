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
  <link rel="preload stylesheet" href="<?php echo '/www/public/css/styles.css';?>" as="style">
  <link rel="icon" href="<?php echo '/www/public/img/favicon.svg';?>">
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
    <a href="/login" title="Login">Login</a>
  </nav>
</header>
<main>
<?php echo $content ?? '' ;?>
</main>
<footer>
      <div class="icons-container">
        <a href="https://github.com/mobalti/props-color-finder" title="Source on Github">
        </a>
        <button class="theme-toggle" id="theme-toggle" title="Toggles light &amp; dark" aria-label="light" aria-live="polite">
          <svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24">
            <mask id="moon">
              <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
              <circle cx="40" cy="8" r="11" fill="black"></circle>
            </mask>
            <circle id="sun" cx="12" cy="12" r="11" mask="url(#moon)"></circle>
            <g id="sun-beams">
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </g>
          </svg>
        </button>
      </div>
    </footer>
</body>
</html>