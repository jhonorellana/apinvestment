<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inversion extends Model
{
    use HasFactory;
    protected $table = "investment";
    protected $fillable = ['inv_type','inv_purchase_date','inv_expiration_date','inv_owner','inv_enterprise','inv_rate','inv_return','inv_principal','inv_retention','inv_sold','inv_expired'];
    
}
