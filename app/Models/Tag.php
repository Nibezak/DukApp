<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded =[];

     public function posts()
     {
        return $this->belongsToMany(Post::class)->orderBy('created_at', 'DESC');
     }
        public function getPostgridCardTagsAttribute(){

        return $this->tags->take(3);

        }

}
