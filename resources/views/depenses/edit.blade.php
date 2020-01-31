<!DOCTYPE html>
<html>
<head>
	<title>Dépenses - Modification</title>
</head>
<body>
	<h1>Modification de la dépense n° {{ $depense->id }} </h1>
	<form method="post" action="{{ route('depense.update', $depense->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="designation" value="{{ $depense->designation }}">
		<input type="date" name="date" value="{{ $depense->date }}">
		<input type="number" name="amount" step=0.01 value="{{ $depense->amount }}">
        <select name="tva_id" size="1">
            @foreach($tvas as $tva)
                <option value="{{ $tva->id }}">{{ $tva->rate }}%</option>
            @endforeach
        </select>
		<input type="number" name="discount" step=0.01 value="{{ $depense->discount }}">
        <select name="discount_type" size="1" value="{{ $depense->discount_type }}">
            <option value="%">%</option>
            <option value="€">€</option>
        </select>
        <select name="type_paiement_id" size="1">
            @foreach($types_paiements as $type_paiement)
                <option value="{{ $type_paiement->id }}">{{ $type_paiement->name }}</option>
            @endforeach
        </select>
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
