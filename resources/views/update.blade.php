@extends('layouts.base')
 
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Update data</h1>
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
      <form method="post" action="/update/{{$id}}">
          @csrf
          <div class="form-group">
              <label for="nip">kota_tujuan</label>
              <input type="text" class="form-control" name="kota_tujuan"/>
          </div>
 
          <div class="form-group">
              <label for="value">st_pulang</label>
              <input type="text" class="form-control" name="st_pulang"/>
          </div>

          <div class="form-group">
              <label for="value">ket_pulang</label>
              <input type="text" class="form-control" name="ket_pulang"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
@endsection