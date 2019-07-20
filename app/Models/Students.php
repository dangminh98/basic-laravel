<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = ['id', 'name', 'address', 'university', 'class_id', 'created_at', 'updated_at'];

    public $timestamps = true;

    public function classes()
    {
        return $this->belongsTo('App\Models\Classes', 'class_id', 'id');
    }
}
