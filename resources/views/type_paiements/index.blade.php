<!DOCTYPE html>
<html>
<head>
	<title>Type de paiement - Index</title>
</head>
<body>
	<h1>Bienvenue sur la catégorie des types de paiement</h1>
	<a href="{{ route('type_paiement.add') }}" title="ajouter un type de paiement">Ajouter un type de paiement</a>
	<ul>
		@foreach($typePaiements as $typePaiement)
			<li>
				<a href="{{ route('type_paiement.show', $typePaiement->id) }}" title="{{ $typePaiement->name }}">{{ $typePaiement->name }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
