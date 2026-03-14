<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    public function apprentice()
    {
        return $this->hasMany(Apprentice::class);
    }
    public function teachers()
{
    return $this->belongsToMany(Teacher::class);
}

public function area()
{
    return $this->belongsTo(Area::class);
}

public function trainingCenter()
{
    return $this->belongsTo(Training_Center::class);
}

public function apprentices()
{
    return $this->hasMany(Apprentice::class);
}
}

