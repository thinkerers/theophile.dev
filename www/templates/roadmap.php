<?php
$title = 'Roadmap';
$transition="start";

ob_start();
?>
<form name="tasks">
  <label>
    <input name="task" type="checkbox" checked disabled>
    Mise en place de la méthode MVC. <a href="https://learning-php-mysql.tiddlyhost.com/#:[created[20240203150245488]]">Documentation du projet</a> créée sur tiddlyhost.
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    Code validé avec <a href="https://validator.w3.org/nu/?doc=https://theophile.dev/&submit=Check">nu validator</a>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <a href="https://github.com/thinkerers/theophile.dev/blob/main/.github/workflows/main.yml">Utilisation de github action</a> pour push le code de mon site depuis un repo github vers mon hébergement OVH via FTP
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    Ajout de <a href="https://search.google.com/test/rich-results?url=https%3A%2F%2Ftheophile.dev%2F">résultat enrichis</a> pour afficher mon "logo" (temporairement un emoji) dans les résultats de recherche google
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    Demande d'indexation sur <a href="https://search.google.com/search-console">google search console</a>, <a href="/sitemap.xml">sitemap</a> et <a href="/robots.txt">robots.txt</a> créés
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <a href="https://pagespeed.web.dev/analysis?url=https%3A%2F%2Ftheophile.dev%2F">PageSpeed Insights: 100 Performance, 100 Accessibility, 100 Best Practices, 100 SEO</a>
  </label>
  <label>
    <input name="task" type="checkbox" checked disabled>
    <a href="https://developer.mozilla.org/en-US/observatory/analyze?host=theophile.dev">HTTP Observatory Report</a>: Score: 135 / 100
  </label>
</form>
<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>
