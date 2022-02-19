<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;

    protected $guarded=['id','created_at','updated_at'];
    protected $with = ['tags', 'author'];



     public function author()
     {
             return $this->belongsTo(User::class, 'user_id');
     }


     public function getPhotoAttribute($photo)
    {
      return asset($photo ? 'storage/'.$photo : 'images/default-picture.png');
    }
     /**
      * @return collection / relationship
      */
      public function tags()
      {
        return $this->belongsToMany(Tag::class)->orderBy('created_at', 'DESC');
      }
        public function getPostgridCardTagsAttribute(){

        return $this->tags->take(1);

        }

        /**
         * Get comments for this post
         * @return  collection of commetns
         */
        public function comments()
        {
            return $this->hasMany(Comment::class);
        }

        /**
         * Get reviews for this post
         * @return colelction
         */
         public function reviews()
         {
                 return $this->hasMany(Review::class);
         }

         /**
          * Get reviews for the current logged in user
          * 1. getMyRatingAttribute - remove the starting get and the ending attribute
          * 2. MyRating - Split words based on the case (Upper case) it will be [My, Rating]
          * 3. Join [my, rating] implode my_rating
          * @return number
          */
          public function getMyRatingAttribute()
          {
                $userReview =  $this->reviews()->whereUserId(request()->user()->id)->first();
                if(empty($userReview)){
                    return null;
                }

                return $userReview->rating;
          }
}
