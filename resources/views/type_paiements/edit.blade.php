<!DOCTYPE html>
<html>
<head>
	<title>Type de paiement - Modification</title>
</head>
<body>
	<h1>Modification du type de paiement n° {{ $typePaiement->id }}</h1>
	<form method="post" action="{{ route('type_paiement.update', $typePaiement->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="name" value="{{ $typePaiement->name }}">
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
