<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg_districts extends Model
{
    use HasFactory;
    protected $table = 'tbl_reg_districts';
    protected $fillable = [
        'regency_id',
        'name'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
