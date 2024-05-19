<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    
    protected $table = "variation";
    protected $fillable = ['var_date','var_jaime','var_argentina','var_cristian','var_totalbalance','var_ownbalance','var_importation','var_own'];
    
}
