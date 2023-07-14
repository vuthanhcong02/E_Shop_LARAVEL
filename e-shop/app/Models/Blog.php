<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogComment;
class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey='id';
    protected $guarded = [];

    public function BlogComments(){
        return $this->hasMany(BlogComment::class,'blog_id','id');
    }
}
