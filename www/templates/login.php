<?php
$title = 'Connexion';

ob_start();
print_r($_POST);
?>
<h1>Connexion</h1>
<form method="post">
  <label for="username">Nom d'utilisateur</label>
  <input type="text" id="username" name="username">
  <label for="password">Mot de passe</label>
  <input type="password" id="password" name="password">
  <button type="submit">Se connecter</button>
</form>
<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>