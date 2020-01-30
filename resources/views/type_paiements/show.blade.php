<!DOCTYPE html>
<html>
<head>
	<title>Type de paiement - Tous les types de paiement</title>
</head>
<body>
	<h1>Type de paiement n°{{ $typePaiement->id}} : {{ $typePaiement->name }}</h1>
    <a href="{{ route('type_paiement.index') }}" title="retour à la liste des types de paiement">Retour à la liste des types de paiement</a>
    <ul>
        <li>
            <p><u>Nom :</u> {{ $typePaiement->name }}</p>
        </li>
	</ul>
	<a href="{{ route('type_paiement.edit', $typePaiement->id) }}" title="modifier le type de paiement">Modifier le type de paiement</a>
	<a href="{{ route('type_paiement.delete', $typePaiement->id) }}" title="supprimer le type de paiement">Supprimer le type de paiement</a>
</body>
</html>
