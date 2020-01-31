<!DOCTYPE html>
<html>
<head>
	<title>Dépenses - Toutes les dépenses</title>
</head>
<body>
	<h1>Dépense n° {{ $depense->id}} : {{ $depense->designation }}</h1>
    <a href="{{ route('depense.index') }}" title="retour à la liste des depenses">Retour à la liste des dépenses</a>
    <ul>
        <li>
            <p><u>Désigniation :</u> {{ $depense->designation }}</p>
        </li>
        <li>
            <p><u>Date :</u> {{ $depense->date }}</p>
        </li>
        <li>
            <p><u>Montant HT :</u> {{ $depense->amount }}€</p>
        </li>
        <li>
            <p><u>TVA :</u> {{ $depense->tva->rate }}%</p>
        </li>
        <?php if (isset($depense->montant_remise)) { echo '<li><p><u>Remise :</u> '.$depense->discount.$depense->discount_type.'</p></li>';} ?>
        <li>
            <p><u>Type de paiement :</u> {{ $depense->type_paiement->name }}</p>
        </li>
    </ul>
    <ol>
        <li>
            <p><u>Montant TVA :</u> {{ $depense->montant_tva }}</p>
        </li>
        <li>
            <p><u>Montant TTC :</u> {{ $depense->montant_ttc }}</p>
        </li>
        <?php if (isset($depense->montant_remise)) { echo '<li><p><u>Montant avec remise :</u> '.$depense->montant_remise.'</p></li>';} ?>
	</ol>
	<a href="{{ route('depense.edit', $depense->id) }}" title="modifier la depense">Modifier la depense</a>
	<a href="{{ route('depense.delete', $depense->id) }}" title="supprimer la depense">Supprimer la depense</a>
</body>
</html>
