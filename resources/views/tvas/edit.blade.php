<!DOCTYPE html>
<html>
<head>
	<title>TVA - Modification</title>
</head>
<body>
	<h1>Modification de la TVA n° {{ $tva->rate }} à {{ $tva->rate }}%</h1>
	<form method="post" action="{{ route('tva.update', $tva->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{ $tva->name }}">
		<input type="number" name="rate" step=0.01 value="{{ $tva->rate }}">
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
