@extends('layouts.f_p_layouts')
@section('tabel')
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No.Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_fixer as $value)
    <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->no_telepon_pelanggan}}</td>
        <td>{{$value->alamat}}</td>
        <td><a href="/payments/{{$value->id}}">Pesan</a></td>
    </tr>
  @endforeach  
  </tbody>
</table>
            
@endsection