<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['cnic','name','address','telno','age','marital_status'] ;
    protected $primaryKey = 'cnic';
    public $incrementing = false;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

