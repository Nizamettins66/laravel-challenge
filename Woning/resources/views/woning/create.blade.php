
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Woning</title>
</head>
<body>
  <div class="container" style="margin:40px;">

  <h1 class="display-3">Woningen</h1>

    <form method="post" action="/woning/store">
          @csrf
          <div class="form-group">    
              <label for="titel">Titel:*</label>
              <input type="text" class="form-control" name="titel"/>
          </div>
 
          <div class="form-group">
              <label for="oppervlakte">Oppervlakte: *</label>
              <input type="text" class="form-control" name="oppervlakte"/>
          </div>
 
          <div class="form-group">
              <label for="prijsperweek">Prijs per week:</label>
              <input type="text" class="form-control" name="prijsperweek"/>
          </div>
          <button type="submit" class="btn btn-primary">Add woning</button>
      </form>

  </div>

</body>
</html>