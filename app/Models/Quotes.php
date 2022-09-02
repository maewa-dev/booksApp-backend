<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;

    protected $table = "quotes";

    protected $guarded = [];


    public function book(){
        return $this->belongsTo(Authors::class, 'book_id', 'id');
    }
}
