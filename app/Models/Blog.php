<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use PhpParser\Node\Expr\Cast\Array_;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $with = ['category','author'];

    protected $guarded = ['id'];

    // function query filter
    public function scopeFilter($query, array $filters){
        // kalau filters memiliki search
        $query->when($filters['search'] ?? false, function($query,$search){
            // balikan query dengan function
            return $query->where(function($query) use ($search){
                // cek apakah title dan body ada yang mirip dengan yang di search
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use($author){
                $query->where('username', $author);
            });
        });
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}