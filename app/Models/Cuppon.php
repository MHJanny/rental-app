<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuppon extends Model
{
    use HasFactory;
    protected $fillable = [ 'title','code','type', 'amount','property_id'];

    public $cast = [
        'amount' => 'float',
    ];
}
