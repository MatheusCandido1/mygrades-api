<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'credits'
    ];

    public function getFullnameAttribute($value)
    {
        return $this->code . ' - ' . $this->name;
    }

    public function grades() {
        return $this->hasMany('App\Models\Grade');
    }
}
