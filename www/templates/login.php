<?php
$title = 'Connexion';
$styles = ['/public/css/form.v0.css'];
$scripts = [
  [
    "src" => "/public/js/form.v0.js",
    "type" => "module"
  ]
];
ob_start();
?>
<form method="post" action="self" >
    <fieldset>
        <legend>Connexion</legend>
        <label>
            Email
            <small id="emailHint">L'email doit être sous la forme "nom@domain.extension"</small>
            <input 
              name="email" 
              type="email" 
              minlength="5" 
              maxlength="50"
              required
              autofocus
              aria-describedby="emailHint"
            >
        </label>
        <label>
          Mot de passe
          <small id="emailHint">Le mot de passe doit être de minimum 6 caractères et contenir au moins une majuscule, une minuscule, un nombre et un caractère spécial.</small>
          <input 
            name="password"
            type="password"
            minlength="6"
            maxlength="50"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,}"
            required
            aria-describedby="passwordHint"
          >
        </label>
        <input name="submit" type="submit"/>
    </fieldset>
</form>
<?php
$content = ob_get_clean();
require_once(TEMPLATES_ROOT .'layout.php');
?>