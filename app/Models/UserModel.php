<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;

    public function getPelanggan()
    {
        return User::whereRoleIs('pelanggan')->get();;
    }
    public function getFixer()
    {
        return User::whereRoleIs('fixer')->get();;
    }
    public function dataProfile($id)
    
    {
        return User::where('id',$id)->first();;
    }

    public function countProfile()
    {
        $fixer = User::whereRoleIs('fixer')->count();
        $pelanggan = User::whereRoleIs('pelanggan')->count();
        return (compact('fixer','pelanggan'));

    }
    public function pemesananData($data)
    {
        DB::table('pemesanan')->insert($data);
    }

}
