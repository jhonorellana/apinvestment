<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amortization extends Model
{
    use HasFactory;
    
    protected $table = "amortization";
    protected $fillable = ['id', 'inv_id', 'am_purchase_date', 'am_expiration_date', 'am_owner', 'am_enterprise', 'am_months', 'am_days', 'am_rate', 'am_return', 'am_interest', 'am_principal', 'am_retention', 'am_interest_total'];
    
    
}
