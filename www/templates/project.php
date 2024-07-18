<?php
$title = 'Projet';
$transition="start";
$styles = ['/public/css/project.css'];
ob_start();
?>
<h2>Portfolio</h2>
<aside>
  Ce site est en cours de construction, codé from scratch en PHP. Voici les objectifs que je me suis fixé pour ce projet:
</aside>
<h3>Objectifs</h3>

<form name="tasks">
  <label>
    <input name="task" type="checkbox" checked disabled>
    (SEO) Linting des données structurées avec le <a href="http://linter.structured-data.org/?url=https:%2F%2Ftheophile.dev%2F">Structured Data Linter</a>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span>Utilisation de https://webhint.io pour améliorer le site.</span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span>Mise en place de la méthode MVC. <a href="https://learning-php-mysql.tiddlyhost.com/#:[created[20240203150245488]]">Documentation du projet</a> créée sur tiddlyhost.</span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span>Code validé avec <a href="https://validator.w3.org/nu/?doc=https://theophile.dev/&submit=Check">nu validator</a></span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span><a href="https://github.com/thinkerers/theophile.dev/blob/main/.github/workflows/main.yml">Utilisation de github action</a> pour push le code de mon site depuis un repo github vers mon hébergement OVH via FTP</span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span>Ajout de <a href="https://search.google.com/test/rich-results?url=https%3A%2F%2Ftheophile.dev%2F">résultat enrichis</a> pour afficher mon "logo" (temporairement un emoji) dans les résultats de recherche google</span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span>Demande d'indexation sur <a href="https://search.google.com/search-console">google search console</a>, <a href="/sitemap.xml">sitemap</a> et <a href="/robots.txt">robots.txt</a> créés</span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span><a href="https://pagespeed.web.dev/analysis?url=https%3A%2F%2Ftheophile.dev%2F">PageSpeed Insights: 100 Performance, 100 Accessibility, 100 Best Practices, 100 SEO</a></span>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <span><a href="https://developer.mozilla.org/en-US/observatory/analyze?host=theophile.dev">HTTP Observatory Report</a>: Score: 140 / 100
    </span>
  </label>
</form>
<?php
$content = ob_get_clean();
require_once(TEMPLATES_ROOT .'layout.php');
?>
