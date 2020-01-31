<!DOCTYPE html>
<html>
<head>
	<title>Recettes - Toutes les recettes</title>
</head>
<body>
	<h1>Recette n° {{ $recette->id}} : {{ $recette->designation }}</h1>
    <a href="{{ route('recette.index') }}" title="retour à la liste des recettes">Retour à la liste des recettes</a>
    <ul>
        <li>
            <p><u>Désigniation :</u> {{ $recette->designation }}</p>
        </li>
        <li>
            <p><u>Date :</u> {{ $recette->date }}</p>
        </li>
        <li>
            <p><u>Montant HT :</u> {{ $recette->amount }}€</p>
        </li>
        <li>
            <p><u>TVA :</u> {{ $recette->tva->rate }}%</p>
        </li>
        <?php if (isset($recette->montant_remise)) { echo '<li><p><u>Remise :</u> '.$recette->discount.$recette->discount_type.'</p></li>';} ?>
    </ul>
    <ol>
        <li>
            <p><u>Montant TVA :</u> {{ $recette->montant_tva }}</p>
        </li>
        <li>
            <p><u>Montant TTC :</u> {{ $recette->montant_ttc }}</p>
        </li>
        <?php if (isset($recette->montant_remise)) { echo '<li><p><u>Montant avec remise :</u> '.$recette->montant_remise.'</p></li>';} ?>
	</ol>
	<a href="{{ route('recette.edit', $recette->id) }}" title="modifier la recette">Modifier la recette</a>
	<a href="{{ route('recette.delete', $recette->id) }}" title="supprimer la recette">Supprimer la recette</a>
</body>
</html>
