<!DOCTYPE html>
<html>
<head>
	<title>Dépenses - Ajout</title>
</head>
<body>
	<h1>Ajout d'une dépense</h1>
	<form method="post" action="{{ route('depense.store') }}">
		@csrf
		<input type="text" name="designation" placeholder="Désignation">
		<input type="date" name="date">
		<input type="number" name="amount" step=0.01 placeholder="Montant HT">
        <select name="tva_id" size="1">
            @foreach($tvas as $tva)
                <option value="{{ $tva->id }}">{{ $tva->rate }}%</option>
            @endforeach
        </select>
		<input type="number" name="discount" step=0.01 placeholder="Remise">
        <select name="discount_type" size="1">
            <option value="€">€</option>
            <option value="%">%</option>
        </select>
        <select name="type_paiement_id" size="1">
            @foreach($types_paiements as $type_paiement)
                <option value="{{ $type_paiement->id }}">{{ $type_paiement->name }}</option>
            @endforeach
        </select>
		<button type="submit">Ajouter</button>
    </form>

</body>
</html>
