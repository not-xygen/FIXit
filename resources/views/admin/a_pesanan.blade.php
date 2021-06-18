@extends('layouts.f_p_layouts')
@section('tabel')
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Id Pesanan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Nama Fixer</th>
      <th scope="col">No. Telp Pelanggan</th> 
      <th scope="col">No. Telp Fixer</th>
      <th scope="col">Alamat Pelanggan</th>
      <th scope="col">Alamat Fixer</th>
      <th scope="col">Jenis Device</th>
      <th scope="col">Status</th>
      <th scope="col">Foto Device</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($riwayat_data as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->nama_pelanggan}}</td>
        <td>{{$value->nama_fixer}}</td>
        <td>{{$value->no_hp_pelanggan}}</td>
        <td>{{$value->no_hp_fixer}}</td>
        <td>{{$value->alamat_pelanggan}}</td>
        <td>{{$value->alamat_fixer}}</td>
        <td>{{$value->jenis_device}}</td>
          <td>{{$value->status}}</td>
        <td>
          <img src="{{url('img/foto_device/'.$value->foto_device)}}" alt="" width="100" height="100">
        </td>
    </tr>
  @endforeach  
  </tbody>
</table>
            
@endsection