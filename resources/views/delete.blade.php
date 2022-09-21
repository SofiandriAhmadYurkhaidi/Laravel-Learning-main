@extends('layouts.base')

@section('content')

<a href="/dashboard/create" class="btn btn-success  mb-3 btn-large">TAMBAH DINAS</a>
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>kd_dl</th>
            <th>nip</th>
            <th>nama</th>
            <th>kota_asal</th>
            <th>st_asal</th>
            <th>ket_asal</th>
            <th>kota_tujuan</th>
            <th>st_pulang</th>
            <th>ket_pulang</th>
            <th>edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dashboard as $data)
        <tr>
            <th>{{ $data->kd_dl}}</th>
            <th>{{ $data->nip}}</th>
            <th>{{ $data->nama}}</th>
            <th>{{ $data->kota_asal}}</th>
            <th>{{ $data->st_asal}}</th>
            <th>{{ $data->ket_asal}}</th>
            <th>{{ $data->kota_tujuan}}</th>
            <th>{{ $data->st_pulang}}</th>
            <th>{{ $data->ket_pulang}}</th>
            <th class="d-flex">
            <a href="/dashboard/{{ $data->kd_dl }}/edit" class="btn btn-warning me-4">Update</a>
            <form action="/dashboard/{{ $data->kd_dl }}" method="post">
                @csrf
                @method("delete") 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </th>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection