<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'supervisor';

    public function leave()
    {
        return $this->hasMany(Leave::class, 'supervisor_id','id');
    }
}
