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
        $query-> when(($filters['search'] ?? false),fn($query, $filter) =>
            $query->where('title', 'like', '%' . $filters['search'] . '%')
            ->orwhere('body', 'like', '%' . $filters['search'] . '%')

    );

//        $query->when($filters['category'] ?? false, fn($query,$category) =>
//            $query->whereExits(fn($query)=>
//                $query->from('categories')
//                ->whereColumn('categories.id','posts.category_id')
//                -> where('category.slug',$category)
//            )
//        );


        $query->when($filters['category'] ?? false,
            function ($query,$category){
            $query->withwhereHas('category',fn($query)=>
            $query-> where('categories.slug',$category)
            );
        });

        $query->when($filters['user'] ?? false,
            function ($query,$user){
                $query->withwhereHas('user',fn($query)=>
                $query-> where('users.name',$user)
                );
            });




    }



}
