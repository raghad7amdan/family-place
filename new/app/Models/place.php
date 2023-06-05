<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
