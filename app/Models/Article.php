<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getFormattedTags()
    {
        $formattedTags = '';
        
        foreach($this->tags as $tag) {
            $formattedTags .= '<li class="list-group-item">'.$tag->name.'</li>';
        }

        return $formattedTags;
    }

}
