@extends('layouts.base')


@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800"> Dinas Status</h1> 
                    
                    <a href="/add" class="btn btn-info">Add</a>
                    <br>
                    <br>

                    <!-- {{$data}} -->
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">kd_dl</th>
                            <th scope="col">nip</th>
                            <th scope="col">nama</th>
                            <th scope="col">kota_asal</th>
                            <th scope="col">st_asal</th>
                            <th scope="col">ket_asal</th>
                            <th scope="col">kota_tujuan</th>
                            <th scope="col">st_pulang</th>
                            <th scope="col">ket_pulang</th>
                            <th scope="col">edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(DB::table('dinas_luar')->get() as $item)
                            <tr>
                            <th scope="row">{{$item->kd_dl}}</th>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->kota_asal}}</td>
                            <td>{{$item->st_asal}}</td>
                            <td>{{$item->ket_asal}}</td>
                            <td>{{$item->kota_tujuan}}</td>
                            <td>{{$item->st_pulang}}</td>
                            <td>{{$item->ket_pulang}}</td>
                             <td>
                                <a href="/update/{{ $item->kd_dl }}" class="btn btn-primary">Update</a>
                                <a href="/delete/{{ $item->kd_dl }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach   
                        </tbody>
                    </table>


@endsection