<!DOCTYPE html>
<html>
<head>
	<title>Recettes - Index</title>
</head>
<body>
	<h1>Bienvenue sur la catégorie des recettes</h1>
	<a href="{{ route('recette.add') }}" title="ajouter une recette">Ajouter une recette</a>
	<ul>
		@foreach($recettes as $recette)
			<li>
				<a href="{{ route('recette.show', $recette->id) }}" title="{{ $recette->designation }}">{{ $recette->designation }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
