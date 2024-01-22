<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
//    protected $table = 'posts';
//    public $primaryKey  = 'id';

    protected $fillable=['category_id','slug','title','excerpt','body'];


    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function scopeFilter($query,array $filters)
    {
//        dd($filters);
        if(($filters['search'] ?? false)){
            $query-> where('title','like','%'.$filters['search'].'%')
            -> orwhere('body','like','%'.$filters['search'].'%');
        }
    }



}
