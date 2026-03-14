<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Apprentice extends Model
{
    use HasFactory;

    protected $table = 'apprentice';

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
    public function course()
{
    return $this->belongsTo(Course::class);
}

public function computer()
{
    return $this->belongsTo(Computer::class);
}
}
