@extends("woning/base")
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h1 class="display-4 text-center mb-4">Nieuwe Woning</h1>
                    <form method="post" action="/woning/store">
                        @csrf
                        <div class="form-group">
                            <label for="titel">Titel<span class="text-danger">*</span></label>
                            <input type="text" name="titel" class="form-control" placeholder="Vul de titel in" required>
                        </div>

                        <div class="form-group">
                            <label for="omschrijving">Omschrijving<span class="text-danger">*</span></label>
                            <textarea name="omschrijving" class="form-control" rows="3" placeholder="Geef een omschrijving" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="oppervlakte">Oppervlakte (m²)<span class="text-danger">*</span></label>
                            <input type="number" name="oppervlakte" class="form-control" placeholder="Bijv. 100" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="prijsperweek">Prijs per week (€)<span class="text-danger">*</span></label>
                            <input type="number" name="prijsperweek" class="form-control" placeholder="Bijv. 200" min="0" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Opslaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
