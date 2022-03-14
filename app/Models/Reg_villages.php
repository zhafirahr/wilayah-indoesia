<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_villages extends Model
{
    use HasFactory;
    protected $table = 'tbl_reg_villages';
    protected $fillable = [
        'district_id',
        'name'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
