<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class note_norms extends Model
{
    use HasFactory;
    protected $fillable = ['maDinhMuc','tenMaDinhMuc','ghiChuDinhMuc','created_at','updated_at'];

}
