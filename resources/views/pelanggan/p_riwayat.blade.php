@extends('layouts.f_p_layouts')
@section('tabel')
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Id Pesanan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Nama Fixer</th>
      <th scope="col">Device</th>  
      {{-- <th scope="col">No. Telp.</th>
      <th scope="col">Alamat</th>
      <th scope="col">Password</th> --}}
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($riwayat_data as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->id_pelanggan}}</td>
        <td>{{$value->id_fixer}}</td>
        {{-- <td>{{$value->no_telepon_pelanggan}}</td> --}}
        {{-- <td><a href="/payments/{{$value->id}}">Pesan</a></td> --}}
    </tr>
  @endforeach  
  </tbody>
</table>
            
@endsection