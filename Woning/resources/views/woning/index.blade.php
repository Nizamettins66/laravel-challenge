@section('title', 'List of Woningen')
@extends('woning/base')
@section('content')
@php( $sum=0 )
<div>
  <a href="/woning/create" class="btn btn-primary mb-3">Add Woning</a>
</div>

<table class="table">
  <thead class="thead-light">
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
      <td>{{$w->titel}} </td>
      <td>{{$w->omschrijving}}</td>
      <td>{{$w->oppervlakte}}</td>
      <td>€{{ number_format($w->prijsperweek, 2, ',', '.')}}</td>
      <td>{{$w->updated_at}}</td>
      <td><a href="/woning/edit/{{$w->id}}" class="btn btn-primary">Edit</a></td>
      <td>
        <form action="/woning/destroy/{{$w->id}}" method="post">
          @csrf
          <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td><a href="/woning/show/{{$w->id}}" class="btn btn-success">Bekijk</a></td>
    </tr>
    @endforeach
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>€{{ number_format($sum, 2, ',', '.')}}</td>
    <td></td>
    <td></td>
  </tbody>
</table>
@endsection