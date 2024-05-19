<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Othervalue extends Model
{
    use HasFactory;
    protected $table = "othervalue";
    protected $fillable = ['ov_description','ov_value','is_active'];
    
}
