@extends('woning/base')
@section('title', 'List of Woningen')
@section('content')
@php( $sum=0 )
<div class="container vh-1000 d-flex justify-content-center align-items-center">
  <div class="w-75">
    <div class="mb-3">
      <a href="/woning/create" class="btn btn-success mb-3">Add Woning</a>
    </div>

    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Titel</th>
          <th>Omschrijving</th>
          <th>Oppervlakte</th>
          <th>Prijs Per Week</th>
          <th>Updated at</th>
          <th>Update</th>
          <th>Delete</th>
          <th>Show</th>
        </tr>
      </thead>
      <tbody>
        @foreach($woning as $w)
          @php( $sum+=$w->prijsperweek )
          <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->titel}}</td>
            <td>{{$w->omschrijving}}</td>
            <td>{{$w->oppervlakte}}</td>
            <td>€{{ number_format($w->prijsperweek, 2, ',', '.')}}</td>
            <td>{{$w->updated_at}}</td>
            <td><a href="/woning/edit/{{$w->id}}" class="btn btn-warning text-white">Edit</a></td>
            <td>
              <form action="/woning/destroy/{{$w->id}}" method="post">
                @csrf
                <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
            <td><a href="/woning/show/{{$w->id}}" class="btn btn-info text-white">Bekijk</a></td>
          </tr>
        @endforeach
        <tr class="font-weight-bold">
          <td colspan="4" class="text-right"><strong>Total Price Per Week</strong></td>
          <td>€{{ number_format($sum, 2, ',', '.')}}</td>
          <td colspan="4"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
