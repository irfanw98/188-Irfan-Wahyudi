<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table   = 'outgoing_letters';
    public $timestamps = false;
    protected $guarded = ['id'];
}