@extends('layouts.a_layouts')
@section('tabel')
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No.Telp</th>
      {{-- <th scope="col">No. Telp.</th>
      <th scope="col">Alamat</th>
      <th scope="col">Password</th> --}}
      <th scope="col" colspan="2">#</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_pelanggan as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->no_telepon_pelanggan}}</td>
        <td></td>
    </tr>
  @endforeach  
  </tbody>
</table>
@endsection