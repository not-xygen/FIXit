<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PemesananModel extends Model
{
    use HasFactory;
    public function dataInvoice($id_fixer)
    {
        $data = User::whereRoleIs('fixer')->get();
        $data = $data->where('id',$id_fixer)->first();
        return($data);
    }
    public function inputPemesanan($data)
    {
        DB::table('payments')->insert($data);
    }
    public function getRiwayatPelanggan($id_pelanggan)
    {
        $data = DB::table('payments')->where('id_pelanggan',$id_pelanggan)->get();
        return($data);
    }
    public function getRiwayatFixer($id_fixer)
    {
        $data = DB::table('payments')->where('id_fixer',$id_fixer)->get();
        return($data);
    }
    public function getRiwayatAdmin()
    {
        return DB::table('payments')->get();
        
    }
}
