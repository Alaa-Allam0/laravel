<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded= [];

    public function employees()
    {
        return $this->hasMany(Employees::class,'company_id');
    }
}
