<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
    protected static function booted(): void{
        static::created(function(Product $product){
            $product->slug = SlugService::createSlug(Product::class, 'slug', $product->name);
        });
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
