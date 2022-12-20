<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'start_date', 'end_date', 'status'
    ];

    public function grades() {
        return $this->hasMany('App\Models\Grade');
    }
}
