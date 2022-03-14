<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_provinces extends Model
{
    use HasFactory;
    protected $table = 'tbl_reg_provinces';
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
