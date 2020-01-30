<!DOCTYPE html>
<html>
<head>
	<title>TVA - Index</title>
</head>
<body>
	<h1>Bienvenue sur la catégorie des TVA</h1>
	<a href="{{ route('tva.add') }}" title="ajouter une tva">Ajouter une TVA</a>
	<ul>
		@foreach($tvas as $tva)
			<li>
				<a href="{{ route('tva.show', $tva->id) }}" title="{{ $tva->name }}">{{ $tva->name }} {{ $tva->taux }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>
