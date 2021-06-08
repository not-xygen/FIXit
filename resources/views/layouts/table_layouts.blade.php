@extends('layouts.f_p_layouts')
@section('tabel')

<link rel="stylesheet" src="{{asset('css/table.css')}}">

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
            @if (Auth::user()->hasRole('fixer'))
            <th scope="col" colspan="1">Action</th>
            @endif
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
            @if (Auth::user()->hasRole('pelanggan'))
            <td>{{$value->status}}</td>
            @endif
            @if (Auth::user()->hasRole('fixer'))
            <form action="/pesanan/{{$value->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <td>
                    <div class="form-group">
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option>{{$value->status}}</option>
                            <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </td>
            </form>
            @endif
            <td>
                <img src="{{url('img/foto_device/'.$value->foto_device)}}" alt="" width="100" height="100">
            </td>
            {{-- <td>{{$value->no_telepon_pelanggan}}</td> --}}
            {{-- <td><a href="/payments/{{$value->id}}">Pesan</a></td> --}}
        </tr>
        @endforeach
    </tbody>
</table>

@endsection