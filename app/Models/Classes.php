<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = ['id', 'class_name', 'teacher_name', 'major', 'max_student', 'created_at', 'updated_at'];

    public $timestamps = true;

    public function students()
    {
        return $this->hasMany('App\Models\Students', 'class_id', 'id');
    }
}
