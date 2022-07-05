<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $fillable = [
        'name',
        'description',
    ];


   
    /**
     * Get all of the comments for the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
