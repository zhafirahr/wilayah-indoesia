<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_regencies extends Model
{
    use HasFactory;
    protected $table = 'tbl_reg_regencies';
    protected $fillable = [
        'province_id',
        'name'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
