<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use UUIDModel;

    protected $fillable = [
        'course_path', 'subjectId'
    ];
}