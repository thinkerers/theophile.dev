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

<form action="/submit-contact-form" method="post">
    <h2>
        <b>Travaillons ensemble</b>
    </h2>
    <label>
        Parlez moi de votre projet
        <textarea autofocus name="projet" placeholder="Je souhaite créer..." required></textarea>
    </label>

    <fieldset>
        <legend>Budget</legend>
        <label><input type="radio" name="budget" value="5000"><span>&lt;5 000 &euro;</span></label>
        <label><input type="radio" name="budget" value="10000"><span>&lt;10 000 &euro;</span></label>
        <label><input type="radio" name="budget" value="20000"><span>&lt;20 000 &euro;</span></label>
        <label><input type="radio" name="budget" value="30000"><span>&gt;30 000 &euro;</span></label>
        <label><input type="radio" name="budget" value="?"><span>Je ne sais pas</span></label>
    </fieldset>
    <label>Nom<input type="text" name="nom" required></label>
    <label>Entreprise<input type="text" name="entreprise" required></label>
    <label>Email<input type="email" name="email" required></label>
    <input type="submit" value="C'est parti !" />
</form>

<?php
$content = ob_get_clean();
require_once(TEMPLATE_ROOT .'layout.php');
?>