<?php
$title = 'Error';

ob_start();
?>
ERREUR 404
<?php
$content = ob_get_clean();
require_once(TEMPLATES_ROOT .'layout.php');
?>