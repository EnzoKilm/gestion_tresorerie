<!DOCTYPE html>
<html>
<head>
	<title>Dépenses - Index</title>
</head>
<body>
	<h1>Bienvenue sur la catégorie des dépenses</h1>
	<a href="{{ route('depense.add') }}" title="ajouter une depense">Ajouter une dépense</a>
	<ul>
		@foreach($depenses as $depense)
			<li>
				<a href="{{ route('depense.show', $depense->id) }}" title="{{ $depense->designation }}">{{ $depense->designation }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
