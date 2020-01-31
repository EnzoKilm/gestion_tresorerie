<!DOCTYPE html>
<html>
<head>
	<title>Recettes - Modification</title>
</head>
<body>
	<h1>Modification de la recette n° {{ $recette->id }} </h1>
	<form method="post" action="{{ route('recette.update', $recette->id) }}">
		@csrf
		@method('PUT')
		<input type="text" name="designation" value="{{ $recette->designation }}">
		<input type="date" name="date" value="{{ $recette->date }}">
		<input type="number" name="amount" step=0.01 value="{{ $recette->amount }}">
        <select name="tva_id" size="1">
            @foreach($tvas as $tva)
                <option value="{{ $tva->id }}">{{ $tva->rate }}%</option>
            @endforeach
        </select>
		<input type="number" name="discount" step=0.01 value="{{ $recette->discount }}">
        <select name="discount_type" size="1" value="{{ $recette->discount_type }}">
            <option value="%">%</option>
            <option value="€">€</option>
        </select>
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
