<!DOCTYPE html>
<html>
<head>
	<title>Type de paiement - Ajout</title>
</head>
<body>
	<h1>Ajout d'un type de paiement</h1>
	<form method="post" action="{{ route('type_paiement.store') }}">
		@csrf
		<input type="text" name="name" placeholder="Nom">
		<button type="submit">Ajouter</button>
	</form>
</body>
</html>
