<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $primaryKey = 'Game_id';
    protected $fillable = ['Game_pic','Game_name','Game_platform','Game_desc','Game_price'];
}
