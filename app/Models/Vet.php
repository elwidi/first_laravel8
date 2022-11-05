<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    use HasFactory;

    protected $table = 'vet';
    protected $fillable = ['name', 'join_date'];
}
