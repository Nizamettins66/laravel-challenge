@extends("woning/base")
@section('content')

<h1>Nieuwe Woning</h1>

<form method="post" action="/woning/store">
    @csrf
    <div class="form-group">
        <label for="titel">Titel</label>
        <input type="text" name="titel" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="omschrijving">Omschrijving</label>
        <input type="text" name="omschrijving" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="oppervlakte">Oppervlakte</label>
        <input type="number" name="oppervlakte" class="form-control" min="0" required>
    </div>
    <div class="form-group">
        <label for="prijsperweek">Prijs per week</label>
        <input type="number" name="prijsperweek" class="form-control" min="0" required>
    </div>
    <button type="submit" class="btn btn-primary">Opslaan</button>
</form>

@endsection
