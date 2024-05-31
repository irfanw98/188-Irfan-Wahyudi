<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table   = 'dispositions';
    protected $fillable = ['user_id', 'incoming_letter_id', 'purpose', 'content', 'status'];
}