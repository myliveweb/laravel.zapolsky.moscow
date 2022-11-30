<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['wb_id', 'fine_name', 'name', 'trademark', 'ogrn', 'legal_address', 'total'];
}
