<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;
    protected $gaurded=[];
    public function category():BelongsTo{
        /* inverse relationship
        make relation with parent-category and  child-subcategory
         */
        return $this->belongsTo(Category::class,'category_id','id');
 
     }
}
