<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $tabla='images';
    protected $fillable=['url','imageable_id','imageable_type'];
    use HasFactory;
}
