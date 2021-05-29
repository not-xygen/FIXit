<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
