<!DOCTYPE html>
<html>
<head>
	<title>TVA - Toutes les TVA</title>
</head>
<body>
	<h1>TVA n° {{ $tva->id}} à {{ $tva->rate }}%</h1>
    <a href="{{ route('tva.index') }}" title="retour à la liste des tva">Retour à la liste des TVA</a>
    <ul>
        <li>
            <p><u>Nom :</u> {{ $tva->name }}</p>
        </li>
        <li>
            <p><u>Taux :</u> {{ $tva->rate }}%</p>
        </li>
	</ul>
	<a href="{{ route('tva.edit', $tva->id) }}" title="modifier la tva">Modifier la TVA</a>
	<a href="{{ route('tva.delete', $tva->id) }}" title="supprimer la tva">Supprimer la TVA</a>
</body>
</html>
