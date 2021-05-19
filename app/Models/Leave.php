<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leave';
    protected $fillable = ['employee_id', 'leave_type_id','reason', 'period_start', 'period_end', 'days','address', 'phone', 'supervisor_id', 'status', 'status_approval'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function leave_type()
    {
        return $this->belongsTo(Type::class);
    }
    
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
