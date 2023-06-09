<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty;

class Department extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function studyPrograms(){
        return $this->hasMany(StudyProgram::class);
    }
    protected $fillable = [
        'name','faculty_id'
    ];
    
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
