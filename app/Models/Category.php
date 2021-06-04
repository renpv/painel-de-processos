<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'active'
    ];

    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    public function coordination()
    {
        return $this->belongsTo(Coordination::class);
    }
}
