<!DOCTYPE html>
<html>
<head>
	<title>TVA - Ajout</title>
</head>
<body>
	<h1>Ajout d'un taux de TVA</h1>
	<form method="post" action="{{ route('tva.store') }}">
		@csrf
		<input type="text" name="name" placeholder="Nom">
		<input type="number" name="rate" step=0.01 placeholder="Taux">
		<button type="submit">Ajouter</button>
	</form>
</body>
</html>
