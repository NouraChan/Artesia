<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artpiece extends Model
{
    use HasFactory;
    protected $table = 'artpiece';
    protected $fillable = ['name','caption','occasion','finishing_date'];
}
