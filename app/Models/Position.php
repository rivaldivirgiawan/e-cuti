<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'position';

    public function employee()
    {
        return $this->hasMany(Employee::class, 'position_id', 'id');
    }
}
