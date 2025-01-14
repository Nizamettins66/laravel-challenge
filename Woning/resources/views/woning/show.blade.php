@extends('woning/base')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Woninggegevens</h1>

    <!-- Woning Details -->
    <div class="card">
        <div class="card-header bg-primary text-white">
            Gegevens van Woning #{{ $woning->id }}
        </div>
        <div class="card-body">
            <h4 class="card-title"><strong>Titel:</strong> {{ $woning->titel }}</h4>
            <p><strong>Omschrijving:</strong> {{ $woning->omschrijving }}</p>
            <p><strong>Oppervlakte:</strong> {{ $woning->oppervlakte }} m²</p>
            <p><strong>Prijs per week:</strong> €{{ number_format($woning->prijsperweek, 2) }}</p>
        </div>
        <div class="card-footer">
        <a href="{{ url('/woning') }}" class="btn btn-secondary">Terug naar Overzicht</a>
        </div>
    </div>
</div>
@endsection
