<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Helper;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade', 'term_id', 'course_id', 'grade', 'points', 'gpa'
    ];

    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

    public function term() {
        return $this->belongsTo('App\Models\Term');
    }

    public function setPointsAttribute($value) {
        $this->attributes['points'] = $value;
        $this->attributes['grade'] = Helper::getGradeFromPoints($value);
        $this->attributes['gpa'] = Helper::getGPAFromGrade($this->attributes['grade']);
    }

    public function setGradeAttribute($value) {
        $this->attributes['grade'] = $value;
        $this->attributes['points'] = Helper::getPointsFromGrade($value);
        $this->attributes['gpa'] = Helper::getGPAFromGrade($value);
    }


}
