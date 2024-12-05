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
    <h1 class="display-3">Woning</h1>
    <div>
      <a href="/woning/create" class="btn btn-primary mb-3">Add Woning</a>
    </div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Titel</th>
          <th>Oppervlakte</th>
          <th>PrijsPerWeek</th>
          <th>Updated at</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($woning as $w)
        <tr>
          <td>{{$w->id}}</td>
          <td>{{$w->titel}}</td>
          <td>{{$w->oppervlakte}} </td>
          <td>{{$w->prijsperweek}}</td>
          <td>{{$w->updated_at}}</td>
          <td><a href="/woning/edit/{{$w->id}}" class="btn btn-primary">Edit</a></td>
          <td>
            <form action="/woning/destroy/{{$w->id}}" method="post">
              @csrf
              <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>

</html>