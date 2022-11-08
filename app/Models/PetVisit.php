<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetVisit extends Model
{
    use HasFactory;

    protected $table = 'pet_visit';
    protected $fillable = ['pet_id', 'vet_id', 'prognosis', 'weight', 'temperature', 'diagnose', 'note', 'admin_id', 'visit_date', 'status'];
}
