<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiteraryGenre extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $fillable =['name', 'description'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}