@extends('layouts.base')
 
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/create">
          @csrf
          <div class="form-group">
              <label for="nip">nip</label>
              <input type="text" class="form-control" name="nip"/>
          </div>
 
          <div class="form-group">
              <label for="value">nama</label>
              <input type="text" class="form-control" name="nama"/>
          </div>

          <div class="form-group">
              <label for="value">kota_asal</label>
              <input type="text" class="form-control" name="kota_asal"/>
          </div>

          <div class="form-group">
              <label for="value">st_asal</label>
              <input type="text" class="form-control" name="st_asal"/>
          </div>

          <div class="form-group">
              <label for="value">ket_asal</label>
              <input type="text" class="form-control" name="ket_asal"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
@endsection