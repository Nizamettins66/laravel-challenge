@section('title', 'Nieuwe Woningen')
@extends('woning/base')
@section('content')

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
@endsection