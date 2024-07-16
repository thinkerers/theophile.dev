<?php
$title = 'Bienvenue !';
$transition="start";

ob_start();
?>
<p>
Ce site est en cours de construction 👷‍♂️ Vous pouvez suivre mes progrès <a href="/roadmap">ici</a>.
</p>

<address id="contact">
<ul>
  <li><a href="mailto:hello@theophile.dev">Contactez moi</a></li>
  <li><a href="https://docs.google.com/presentation/d/12qON9WzkUSGHv9LRzEdK1zckqqabfpfLK1-vlNeaQ9k/preview?slide=id.g706ef3ee9b_8_88">portfolio infographie</a></li>
  <li><a href="https://codepen.io/collection/Rzvekr">codepen</a></li>
  <li><a href="https://github.com/DesignThinkerer">github</a></li>
</ul>
</address>
<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>