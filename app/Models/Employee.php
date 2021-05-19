<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE =0;

    protected $table = 'employee';
    protected $fillable = ['nip', 'fullname','gender', 'birthplace', 'birthdate', 'address','phone_number', 'work_unit_id', 'position_id', 'entrydate', 'status'];
    protected $appends = ['status_label'];
    public function transaction()
    {
        return $this->hasMany(Transaction::class,'employee_id', 'id');
    }

    public function work_unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public static function statusLabels()
    {
        return [
            self::STATUS_ACTIVE => 'Aktif',
            self::STATUS_INACTIVE => 'Tidak Aktif',
        ];
    }

    public function getStatusLabelAttribute()
    {
        $list = static::statusLabels();
        if (!isset($this->attributes['status'])) {
            return null;
        }
        return $list[$this->attributes['status']] ? $list[$this->attributes['status']] :
        $this->attributes['status'];
    }
}
