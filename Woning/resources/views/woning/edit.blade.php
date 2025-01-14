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
    <div class="container" style="margin:40px;">

        <h1 class="display-3">Woning bewerken</h1>

        <form method="post" action="/woning/update/{{$woning->id}}">
            @csrf
            <div class="form-group">

                <label for="titel">titel:*</label>
                <input type="text" class="form-control" name="titel" value="{{ $woning->titel }}" />
            </div>
            <div class="form-group">

                <label for="titel">omschrijving:*</label>
                <input type="text" class="form-control" name="omschrijving" value="{{ $woning->omschrijving }}" />
            </div>

            <div class="form-group">
                <label for="oppervlakte">oppervlakte:*</label>
                <input type="text" class="form-control" name="oppervlakte" value="{{ $woning->oppervlakte }}" />
            </div>

            <div class="form-group">
                <label for="value">prijsperweek:</label>
                <input type="text" class="form-control" name="prijsperweek" value="{{ $woning->prijsperweek }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

</body>

</html>