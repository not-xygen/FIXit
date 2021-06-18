@extends('layouts.a_layouts_pemesanan')
@section('title')
    DaftarFixer
@endsection
@section('a_dashboard')
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No.Telp</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_fixer as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->no_telepon_pelanggan}}</td>
        <td>{{$value->alamat}}</td>
    </tr>
  @endforeach  
  </tbody>
</table>
            
@endsection