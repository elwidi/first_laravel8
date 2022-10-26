<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owner';
    protected $fillable = ['kode_pelanggan', 'name', 'alamat', 'no_hp', 'email', 'file_name', 'file_path'];
}
