<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'url',
        'description',
        'featured_image',
    ];

   /**
    * Get the user that owns the post.
    */
   public function user()
   {
       return $this->belongsTo('App\Models\User');
   }

   /**
    * Get the category that owns the post.
    */
   public function category()
   {
       return $this->belongsTo('App\Models\Category');
   }
}
