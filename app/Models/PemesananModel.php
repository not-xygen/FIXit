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
    public function invoice($data)
    {
        DB::table('payments')->insert($data);
    }
}
