<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
	use HasTranslations;
    use HasFactory;
    public $translatable = ['title_en', 'full_text_en'];
    protected $fillable = ['title_en', 'full_text_en'];
         
    protected $guarded = ['id'];
}
