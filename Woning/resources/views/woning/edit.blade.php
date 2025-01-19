@extends('woning/base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Woning bewerken</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="display-4 text-center mb-4">Woning Bewerken</h1>

                        <form method="post" action="/woning/update/{{$woning->id}}">
                            @csrf
                            <div class="form-group">
                                <label for="titel">Titel<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="titel" value="{{ $woning->titel }}" placeholder="Vul de titel in" />
                            </div>

                            <div class="form-group">
                                <label for="omschrijving">Omschrijving<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="omschrijving" rows="3" placeholder="Geef een omschrijving">{{ $woning->omschrijving }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="oppervlakte">Oppervlakte (m²)<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="oppervlakte" value="{{ $woning->oppervlakte }}" placeholder="Bijv. 100" />
                            </div>

                            <div class="form-group">
                                <label for="prijsperweek">Prijs per week (€)</label>
                                <input type="number" step="0.01" class="form-control" name="prijsperweek" value="{{ $woning->prijsperweek }}" placeholder="Bijv. 200" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
