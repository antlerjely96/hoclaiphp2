<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($all)
 */
class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'email',
    ];
    use HasFactory;
}
